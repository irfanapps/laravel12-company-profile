<!-- resources/views/admin/services/create.blade.php -->
@extends('admin.layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Tambah Layanan Baru</h1>
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-lg shadow p-6">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul Layanan</label>
                <input type="text" name="title" id="title"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Gambar</label>
                <input type="file" name="image" id="image"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex items-center mb-4">
                <input type="checkbox" name="is_active" id="is_active" value="1" class="mr-2"
                    {{ old('is_active', isset($service) ? $service->is_active : 1) ? 'checked' : '' }}>
                <label for="is_active" class="text-gray-700">Aktif</label>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
        </form>
    </div>
@endsection
