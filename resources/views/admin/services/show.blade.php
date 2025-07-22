<!-- resources/views/admin/services/show.blade.php -->
@extends('admin.layouts.admin')

@section('title', 'Detail Layanan: ' . $service->title)

@section('breadcrumbs')
    <li>
        <div class="flex items-center">
            <i class="fas fa-chevron-right text-gray-400 px-2"></i>
            <a href="{{ route('admin.services.index') }}"
                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">
                Layanan
            </a>
        </div>
    </li>
    <li aria-current="page">
        <div class="flex items-center">
            <i class="fas fa-chevron-right text-gray-400 px-2"></i>
            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">
                {{ $service->title }}
            </span>
        </div>
    </li>
@endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Detail Layanan: {{ $service->title }}</h1>
            <div class="flex space-x-2">
                <a href="{{ route('admin.services.edit', $service->id) }}"
                    class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    <i class="fas fa-edit mr-1"></i> Edit
                </a>
                <a href="{{ route('admin.services.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="md:flex">
                <!-- Bagian Gambar -->
                <div class="md:w-1/3 p-6">
                    @if ($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                            class="w-full h-64 object-cover rounded-lg">
                    @else
                        <div class="bg-gray-200 w-full h-64 flex items-center justify-center rounded-lg">
                            <i class="fas fa-image text-4xl text-gray-400"></i>
                        </div>
                    @endif
                </div>

                <!-- Bagian Detail -->
                <div class="md:w-2/3 p-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Informasi Layanan</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="text-sm text-gray-500">Judul Layanan</p>
                                    <p class="font-medium">{{ $service->title }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Status</p>
                                    <span
                                        class="px-2 py-1 text-xs rounded-full {{ $service->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $service->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </div>
                                <div class="md:col-span-2">
                                    <p class="text-sm text-gray-500">Slug URL</p>
                                    <p class="font-mono text-blue-600">{{ $service->slug }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Deskripsi Layanan</h2>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            {!! nl2br(e($service->description)) !!}
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <p class="text-sm text-gray-500">Dibuat Pada</p>
                            <p class="font-medium">{{ $service->created_at->format('d M Y H:i') }}</p>
                        </div>
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <p class="text-sm text-gray-500">Diperbarui Pada</p>
                            <p class="font-medium">{{ $service->updated_at->format('d M Y H:i') }}</p>
                        </div>
                        <div class="bg-blue-50 p-3 rounded-lg">
                            <p class="text-sm text-gray-500">ID Layanan</p>
                            <p class="font-mono">{{ $service->id }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
