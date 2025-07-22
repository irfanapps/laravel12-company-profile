<!-- resources/views/admin/services/index.blade.php -->
@extends('admin.layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">

        <!-- Form search di view -->
        <form method="GET" action="{{ route('admin.services.index') }}" class="mb-4">
            <div class="flex space-x-4">
                <input type="text" name="search" placeholder="Cari layanan..." value="{{ request('search') }}"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <select name="status"
                    class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Status</option>
                    <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Nonaktif</option>
                </select>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    <i class="fas fa-search"></i> Cari
                </button>
            </div>
        </form>
        <!-- Tambahkan dropdown items per page -->

        <!-- Tambahkan dropdown items per page -->
        <div class="flex items-center mb-4">
            <span class="mr-2 text-sm text-gray-600">Items per page:</span>
            <select onchange="window.location.href = this.value" class="px-2 py-1 border rounded text-sm">
                @foreach ([10, 25, 50, 100] as $perPage)
                    <option value="{{ request()->fullUrlWithQuery(['perPage' => $perPage]) }}"
                        {{ $services->perPage() == $perPage ? 'selected' : '' }}>
                        {{ $perPage }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Layanan</h1>
            <a href="{{ route('admin.services.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Tambah Layanan
            </a>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <!-- Header tabel tetap sama -->
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                    </tr>
                </thead>
                <!-- Isi tabel -->
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($services as $service)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ ($services->currentPage() - 1) * $services->perPage() + $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $service->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 py-1 text-xs rounded-full {{ $service->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $service->is_active ? 'Aktif' : 'Nonaktif' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('admin.services.show', $service->id) }}"
                                    class="text-green-500 hover:text-green-700 mr-2">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.services.edit', $service->id) }}"
                                    class="text-blue-500 hover:text-blue-700 mr-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Apakah Anda yakin?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->

            <div class="px-6 py-4 bg-white border-t border-gray-200 flex justify-between items-center">
                <div class="text-sm text-gray-600">
                    Showing {{ $services->firstItem() }} to {{ $services->lastItem() }} of {{ $services->total() }}
                    entries
                </div>
                <div>
                    {{ $services->links() }}
                </div>
            </div>

        </div>
    </div>
@endsection
