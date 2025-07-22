@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Di bagian atas view, sebelum tabel -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
            <div class="w-full md:w-auto">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="relative">
                        <input type="text" name="search" placeholder="Search users..." value="{{ request('search') }}"
                            class="pl-10 pr-4 py-2 border rounded-lg w-full md:w-64 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        @if (request('search'))
                            <a href="{{ route('users.index') }}"
                                class="absolute right-3 top-2.5 text-gray-400 hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <!-- Button trigger advanced search -->
            <button onclick="toggleAdvancedSearch()" class="text-blue-600 hover:text-blue-800 text-sm flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
                Advanced Search
            </button>

            <!-- Advanced search form (hidden by default) -->
            <div id="advancedSearch" class="hidden mt-4 p-4 bg-gray-50 rounded-lg">
                <form action="{{ route('users.index') }}" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @if (request('search'))
                        <input type="hidden" name="search" value="{{ request('search') }}">
                    @endif
                    <input type="hidden" name="perPage" value="{{ request('perPage', 10) }}">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name_filter" value="{{ request('name_filter') }}"
                            class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="text" name="email_filter" value="{{ request('email_filter') }}"
                            class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                        <select name="role_filter"
                            class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
                            <option value="">All Roles</option>
                            <option value="admin" {{ request('role_filter') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="editor" {{ request('role_filter') == 'editor' ? 'selected' : '' }}>Editor
                            </option>
                            <option value="user" {{ request('role_filter') == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                    <div class="md:col-span-3 flex justify-end space-x-2">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Apply Filters
                        </button>
                        <a href="{{ route('users.index', ['perPage' => request('perPage', 10), 'search' => request('search')]) }}"
                            class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-300">
                            Clear Filters
                        </a>
                    </div>
                </form>
            </div>


            <div class="flex items-center space-x-2 w-full md:w-auto">
                <span class="text-sm text-gray-600 whitespace-nowrap">Show</span>
                <select onchange="window.location.href = updateUrlParameter('perPage', this.value)"
                    class="border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 text-sm">
                    <option value="10" {{ request('perPage', 10) == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('perPage') == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request('perPage') == 50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ request('perPage') == 100 ? 'selected' : '' }}>100</option>
                </select>
                <span class="text-sm text-gray-600 whitespace-nowrap">entries</span>

                <a href="{{ route('users.export.excel', request()->query()) }}"
                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    Export Excel
                </a>


                <a href="{{ route('users.create') }}"
                    class="ml-4 bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded whitespace-nowrap">
                    Add New User
                </a>
            </div>
        </div>

        <!-- Modal Trigger -->
        <button onclick="toggleExportModal()"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            Custom Export
        </button>

        <!-- Export Modal -->
        <div id="exportModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
            <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
                <div class="mt-3 text-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">Export Options</h3>
                    <form action="{{ route('users.export.excel') }}" method="GET" class="mt-4 text-left">
                        @foreach (request()->query() as $key => $value)
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endforeach

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Columns to Export:</label>
                            <div class="space-y-2">
                                @foreach (['id', 'name', 'email', 'phone', 'role', 'status', 'created_at'] as $column)
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" name="columns[]" value="{{ $column }}" checked
                                            class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                        <span
                                            class="ml-2 text-sm text-gray-700">{{ ucwords(str_replace('_', ' ', $column)) }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="button" onclick="toggleExportModal()"
                                class="mr-2 px-4 py-2 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">
                                Cancel
                            </button>
                            <button type="submit"
                                class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">
                                Export
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Di bawah form search, sebelum tabel -->
        @if (request()->anyFilled(['search', 'name_filter', 'email_filter', 'role_filter']))
            <div class="mb-4 p-3 bg-blue-50 text-blue-800 rounded-lg">
                <div class="flex justify-between items-center">
                    <div>
                        @if (request('search'))
                            <span class="font-medium">General search:</span> "{{ request('search') }}"
                        @endif

                        @if (request()->anyFilled(['name_filter', 'email_filter', 'role_filter']))
                            <span class="font-medium ml-3">Filters:</span>
                            @if (request('name_filter'))
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded ml-1">Name:
                                    {{ request('name_filter') }}</span>
                            @endif
                            @if (request('email_filter'))
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded ml-1">Email:
                                    {{ request('email_filter') }}</span>
                            @endif
                            @if (request('role_filter'))
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded ml-1">Role:
                                    {{ ucfirst(request('role_filter')) }}</span>
                            @endif
                        @endif
                    </div>
                    <a href="{{ route('users.index', ['perPage' => request('perPage', 10)]) }}"
                        class="text-blue-600 hover:text-blue-800 text-sm">
                        Clear all
                    </a>
                </div>
            </div>
        @endif


        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                @foreach ($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&color=7F9CF5&background=EBF4FF' }}"
                                        alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $user->phone }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            {{ $user->role === 'admin'
                                ? 'bg-green-100 text-green-800'
                                : ($user->role === 'editor'
                                    ? 'bg-blue-100 text-blue-800'
                                    : 'bg-gray-100 text-gray-800') }}">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('users.edit', $user->id) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-6 py-4 bg-white border-t border-gray-200 flex justify-between items-center">
            <div class="text-sm text-gray-600">
                Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} entries
            </div>
            <div>
                {{ $users->links() }}
            </div>
        </div>


    </div>
    </div>

@section('scripts')
    <script>
        function updateUrlParameter(key, value) {
            const url = new URL(window.location.href);
            url.searchParams.set(key, value);
            return url.toString();
        }

        // Reset search when clicking the clear icon
        document.querySelector('a[href="{{ route('users.index') }}"]')?.addEventListener('click', function(e) {
            if (window.location.search.includes('search=')) {
                e.preventDefault();
                window.location.href = "{{ route('users.index') }}";
            }
        });

        // Di bagian scripts
        function toggleAdvancedSearch() {
            const element = document.getElementById('advancedSearch');
            element.classList.toggle('hidden');

            // Jika membuka advanced search, tutup dropdown lain jika ada
            if (!element.classList.contains('hidden')) {
                // Tambahkan logika lain jika diperlukan
            }
        }

        // Fungsi untuk menangani clear filter
        document.querySelectorAll('[data-clear-filter]').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const url = new URL(this.href);
                window.location.href = url.toString();
            });
        });

        function toggleExportModal() {
            document.getElementById('exportModal').classList.toggle('hidden');
        }
    </script>
@endsection
@endsection
