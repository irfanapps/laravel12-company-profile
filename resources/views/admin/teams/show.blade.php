@extends('admin.layouts.admin')

@section('title', 'Detail Anggota: ' . $team->name)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Detail Anggota: {{ $team->name }}</h1>
            <div class="flex space-x-2">
                <a href="{{ route('admin.teams.edit', $team->id) }}"
                    class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    <i class="fas fa-edit mr-1"></i> Edit
                </a>
                <a href="{{ route('admin.teams.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="md:flex">
                <!-- Bagian Foto -->
                <div class="md:w-1/3 p-6 flex flex-col items-center">
                    <img src="{{ asset('storage/' . $team->photo) }}" alt="{{ $team->name }}"
                        class="w-48 h-48 rounded-full object-cover mb-4">

                    <div class="flex space-x-4 mt-4">
                        @if ($team->facebook)
                            <a href="{{ $team->facebook }}" target="_blank" class="text-blue-600 hover:text-blue-800">
                                <i class="fab fa-facebook text-2xl"></i>
                            </a>
                        @endif
                        @if ($team->twitter)
                            <a href="{{ $team->twitter }}" target="_blank" class="text-blue-400 hover:text-blue-600">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                        @endif
                        @if ($team->linkedin)
                            <a href="{{ $team->linkedin }}" target="_blank" class="text-blue-700 hover:text-blue-900">
                                <i class="fab fa-linkedin text-2xl"></i>
                            </a>
                        @endif
                        @if ($team->instagram)
                            <a href="{{ $team->instagram }}" target="_blank" class="text-pink-600 hover:text-pink-800">
                                <i class="fab fa-instagram text-2xl"></i>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Bagian Detail -->
                <div class="md:w-2/3 p-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Informasi Pribadi</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-500">Nama Lengkap</p>
                                    <p class="font-medium">{{ $team->name }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Posisi/Jabatan</p>
                                    <p class="font-medium">{{ $team->position }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Status</p>
                                    <span
                                        class="px-2 py-1 text-xs rounded-full {{ $team->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $team->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Urutan Tampil</p>
                                    <p class="font-medium">{{ $team->order }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Biografi</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="whitespace-pre-line">{{ $team->bio }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <p class="text-sm text-gray-500">Dibuat Pada</p>
                            <p class="font-medium">{{ $team->created_at->format('d M Y H:i') }}</p>
                        </div>
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <p class="text-sm text-gray-500">Diperbarui Pada</p>
                            <p class="font-medium">{{ $team->updated_at->format('d M Y H:i') }}</p>
                        </div>
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <p class="text-sm text-gray-500">ID Anggota</p>
                            <p class="font-mono">{{ $team->id }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
