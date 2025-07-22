<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Spatie\Activitylog\Models\Activity;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
        // $this->middleware('role:admin')->except(['show']);
    }

    // app/Http/Controllers/UserController.php
    public function index(Request $request)
    {
        $query = User::query();

        // Tambahkan filter untuk menampilkan yang terhapus
        if ($request->has('with_trashed')) {
            $query->withTrashed();
        } elseif ($request->has('only_trashed')) {
            $query->onlyTrashed();
        }

        // Simple search (search general)
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        // Advanced filters
        if ($request->filled('name_filter')) {
            $query->where('name', 'like', '%' . $request->name_filter . '%');
        }

        if ($request->filled('email_filter')) {
            $query->where('email', 'like', '%' . $request->email_filter . '%');
        }

        if ($request->filled('role_filter')) {
            $query->where('role', $request->role_filter);
        }

        $perPage = $request->input('perPage', 10);
        $users = $query->orderBy('created_at', 'desc')
            ->paginate($perPage)
            ->withQueryString(); // Pertahankan semua parameter query

        return view('users.index', compact('users'));
    }

    // Menampilkan form create user
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    // Menyimpan user baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'role' => 'required|in:admin,editor,user',
            'is_active' => 'boolean',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->phone = $validated['phone'];
        $user->role = $validated['role'];
        $user->is_active = $request->has('is_active');

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
        }

        $user->save();

        // Log activity
        activity()
            ->performedOn($user)
            ->causedBy(Auth::user())
            ->withProperties(['attributes' => $user->getAttributes()])
            ->log('created');

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Menampilkan detail user
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Menampilkan form edit user
    public function edit(User $user)
    {
        $roles = Role::all();
        $userRoles = $user->roles->pluck('id')->toArray();

        return view('users.edit', compact('user', 'roles', 'userRoles'));
    }

    // Update user
    public function update(Request $request, User $user)
    {
        $request->merge([
            'is_active' => $request->has('is_active'),
        ]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'role' => 'required|in:admin,editor,user',
            'is_active' => 'boolean',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //dd($validated);
        $oldData = $user->getOriginal();
        $changes = [];

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'];
        $user->role = $validated['role'];
        $user->is_active = $request->has('is_active');

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
        }

        $user->save();

        // Log activity
        activity()
            ->performedOn($user)
            ->causedBy(Auth::user())
            ->withProperties([
                'old' => $oldData,
                'attributes' => $user->getAttributes()
            ])
            ->log('updated');

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // Hapus user
    public function destroy(User $user)
    {
        // Cek jika user adalah admin terakhir
        if ($user->hasRole('admin') && Role::where('name', 'admin')->first()->users()->count() <= 1) {
            return redirect()->back()
                ->with('error', 'Tidak bisa menghapus admin terakhir');
        }

        $oldData = $user->getOriginal();

        // Delete avatar if exists
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        $user->delete();

        // Log activity
        activity()
            ->performedOn($user)
            ->causedBy(Auth::user())
            ->withProperties(['old' => $oldData])
            ->log('deleted');

        return redirect()->route('users.index')
            ->with('success', 'User berhasil dihapus');
    }

    public function restore($id)
    {
        User::withTrashed()->where('id', $id)->restore();

        return redirect()->route('users.index')
            ->with('success', 'User restored successfully');
    }

    public function forceDelete($id)
    {
        $user = User::withTrashed()->findOrFail($id);

        // Hapus avatar jika ada
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        $user->forceDelete();

        return redirect()->route('users.index')
            ->with('success', 'User permanently deleted');
    }


    public function exportExcel(Request $request)
    {
        // Ambil data users dengan filter yang ada
        $users = User::query();

        // Terapkan filter yang sama dengan index
        if ($request->has('search')) {
            $search = $request->input('search');
            $users->where(function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%");
            });
        }

        if ($request->has('role_filter')) {
            $users->where('role', $request->input('role_filter'));
        }

        if ($request->has('with_trashed')) {
            $users->withTrashed();
        } elseif ($request->has('only_trashed')) {
            $users->onlyTrashed();
        }

        $users = $users->get();

        // Kolom yang tersedia untuk export
        $availableColumns = [
            'id' => 'ID',
            'name' => 'Nama',
            'email' => 'Email',
            'phone' => 'Telepon',
            'role' => 'Role',
            'is_active' => 'Status',
            'created_at' => 'Tanggal Dibuat',
            'deleted_at' => 'Tanggal Dihapus'
        ];

        // Ambil kolom yang dipilih dari request atau gunakan default
        $selectedColumns = $request->input('columns', array_keys($availableColumns));

        // Filter hanya kolom yang valid
        $selectedColumns = array_filter($selectedColumns, function ($col) use ($availableColumns) {
            return array_key_exists($col, $availableColumns);
        });

        // Jika tidak ada kolom yang dipilih, gunakan semua
        if (empty($selectedColumns)) {
            $selectedColumns = array_keys($availableColumns);
        }

        // Buat spreadsheet baru
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set judul kolom berdasarkan pilihan
        $columnIndex = 'A';
        foreach ($selectedColumns as $column) {
            $sheet->setCellValue($columnIndex . '1', $availableColumns[$column]);
            $columnIndex++;
        }

        // Style untuk header
        $headerStyle = [
            'font' => ['bold' => true],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['argb' => 'FFD9D9D9']
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN
                ]
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER
            ]
        ];

        $lastColumn = chr(ord('A') + count($selectedColumns) - 1);
        $sheet->getStyle('A1:' . $lastColumn . '1')->applyFromArray($headerStyle);

        // Isi data
        $row = 2;
        foreach ($users as $user) {
            $columnIndex = 'A';
            foreach ($selectedColumns as $column) {
                $value = match ($column) {
                    'is_active' => $user->is_active ? 'Aktif' : 'Nonaktif',
                    'created_at' => $user->created_at->format('d/m/Y H:i'),
                    'deleted_at' => $user->deleted_at?->format('d/m/Y H:i') ?? '-',
                    'role' => ucfirst($user->role),
                    default => $user->{$column} ?? '-'
                };

                $sheet->setCellValue($columnIndex . $row, $value);
                $columnIndex++;
            }
            $row++;
        }

        // Auto size kolom
        for ($i = 0; $i < count($selectedColumns); $i++) {
            $columnLetter = chr(65 + $i);
            $sheet->getColumnDimension($columnLetter)->setAutoSize(true);
        }

        // Style untuk data
        $dataStyle = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN
                ]
            ]
        ];
        $sheet->getStyle('A2:' . $lastColumn . ($row - 1))->applyFromArray($dataStyle);

        // Buat writer
        $writer = new Xlsx($spreadsheet);

        $fileName = 'data-user-' . date('Ymd-His') . '.xlsx';

        // Return sebagai stream response
        return new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            },
            200,
            [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
                'Cache-Control' => 'max-age=0'
            ]
        );
    }

    // public function bulkActions(Request $request)
    // {
    //     dd('aa');
    //     $request->validate([
    //         'action' => 'required|in:activate,deactivate,delete',
    //         'selected_ids' => 'required|array',
    //         'selected_ids.*' => 'exists:users,id'
    //     ]);

    //     $action = $request->action;
    //     $selectedIds = $request->selected_ids;

    //     try {
    //         switch ($action) {
    //             case 'activate':
    //                 User::whereIn('id', $selectedIds)->update(['is_active' => true]);
    //                 $message = count($selectedIds) . ' user(s) activated successfully';
    //                 break;

    //             case 'deactivate':
    //                 User::whereIn('id', $selectedIds)->update(['is_active' => false]);
    //                 $message = count($selectedIds) . ' user(s) deactivated successfully';
    //                 break;

    //             case 'delete':
    //                 // Cek apakah ada user yang tidak boleh dihapus (misalnya admin utama)
    //                 $undeletableUsers = User::whereIn('id', $selectedIds)
    //                     ->where('id', 1) // Contoh: user dengan id 1 tidak boleh dihapus
    //                     ->count();

    //                 if ($undeletableUsers > 0) {
    //                     return back()->with('error', 'Some users cannot be deleted');
    //                 }

    //                 User::whereIn('id', $selectedIds)->delete();
    //                 $message = count($selectedIds) . ' user(s) moved to trash';
    //                 break;
    //         }

    //         return back()->with('success', $message);
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Error performing bulk action: ' . $e->getMessage());
    //     }
    // }
}
