@extends('admin.layouts.admin')

@section('title', 'Tambah Proyek Baru')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Tambah Proyek Baru</h1>
            <a href="{{ route('admin.projects.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Kembali
            </a>
        </div>

        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-lg shadow p-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div>
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-medium mb-2">Judul Proyek*</label>
                        <input type="text" name="title" id="title"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-medium mb-2">Deskripsi*</label>
                        <textarea name="description" id="description" rows="5"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="cover_image" class="block text-gray-700 font-medium mb-2">Cover Image*</label>
                        <input type="file" name="cover_image" id="cover_image"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        <p class="text-sm text-gray-500 mt-1">Format: JPEG, PNG, JPG (Max 2MB)</p>
                    </div>

                    <div class="mb-4">
                        <label for="gallery" class="block text-gray-700 font-medium mb-2">Gallery Images</label>
                        <input type="file" name="gallery[]" id="gallery" multiple
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="text-sm text-gray-500 mt-1">Format: JPEG, PNG, JPG (Max 2MB per gambar)</p>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <div class="mb-4">
                        <label for="client_name" class="block text-gray-700 font-medium mb-2">Nama Klien*</label>
                        <input type="text" name="client_name" id="client_name"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="client_company" class="block text-gray-700 font-medium mb-2">Perusahaan Klien</label>
                        <input type="text" name="client_company" id="client_company"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="start_date" class="block text-gray-700 font-medium mb-2">Tanggal Mulai*</label>
                            <input type="date" name="start_date" id="start_date"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                        </div>
                        <div>
                            <label for="end_date" class="block text-gray-700 font-medium mb-2">Tanggal Selesai</label>
                            <input type="date" name="end_date" id="end_date"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="project_url" class="block text-gray-700 font-medium mb-2">URL Proyek</label>
                        <input type="url" name="project_url" id="project_url" placeholder="https://example.com"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="flex items-center space-x-6">
                        <div class="flex items-center">
                            <input type="checkbox" name="is_featured" id="is_featured" class="mr-2">
                            <label for="is_featured" class="text-gray-700">Featured Project</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" name="is_active" id="is_active" value="1" class="mr-2"
                                {{ old('is_active', isset($project) ? $project->is_active : 1) ? 'checked' : '' }}>
                            <label for="is_active" class="text-gray-700">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit"
                class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200 mt-4">
                Simpan Proyek
            </button>
        </form>
    </div>
@endsection
