@extends('admin.layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Edit Layanan: {{ $service->title }}</h1>
            <a href="{{ route('admin.services.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Kembali
            </a>
        </div>

        <form action="{{ route('admin.services.update', $service->id) }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-lg shadow p-6">
            @csrf
            @method('PUT')

            <!-- Input: Judul -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium mb-2">Judul Layanan</label>
                <input type="text" name="title" id="title" value="{{ old('title', $service->title) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Input: Deskripsi -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="5"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('description', $service->description) }}</textarea>
            </div>

            <!-- Input: Gambar -->
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-medium mb-2">Gambar</label>
                <!-- Tampilkan gambar saat ini -->
                @if ($service->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                            class="w-32 h-32 object-cover rounded">
                    </div>
                @endif
                <input type="file" name="image" id="image"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <p class="text-sm text-gray-500 mt-1">Ukuran maksimal: 2MB. Format: JPEG, PNG, JPG.</p>
            </div>

            <!-- Input: Status Aktif -->
            <div class="flex items-center mb-4">
                <input type="checkbox" name="is_active" id="is_active" value="1" class="mr-2"
                    {{ old('is_active', isset($service) ? $service->is_active : 1) ? 'checked' : '' }}>
                <label for="is_active" class="text-gray-700">Aktif</label>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Simpan Perubahan
            </button>
        </form>
    </div>
@endsection
