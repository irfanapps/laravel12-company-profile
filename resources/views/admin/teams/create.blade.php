@extends('admin.layouts.admin')

@section('title', 'Tambah Anggota Tim')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Tambah Anggota Tim Baru</h1>
            <a href="{{ route('admin.teams.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Kembali
            </a>
        </div>

        <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-lg shadow p-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap*</label>
                        <input type="text" name="name" id="name"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="position" class="block text-gray-700 font-medium mb-2">Posisi/Jabatan*</label>
                        <input type="text" name="position" id="position"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="photo" class="block text-gray-700 font-medium mb-2">Foto Profil*</label>
                        <input type="file" name="photo" id="photo"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        <p class="text-sm text-gray-500 mt-1">Format: JPEG, PNG, JPG (Max 2MB)</p>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div>
                    <div class="mb-4">
                        <label for="bio" class="block text-gray-700 font-medium mb-2">Biografi*</label>
                        <textarea name="bio" id="bio" rows="4"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Media Sosial</label>
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <i class="fab fa-facebook text-blue-600 mr-2 w-6"></i>
                                <input type="url" name="facebook" placeholder="Link Facebook"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="flex items-center">
                                <i class="fab fa-twitter text-blue-400 mr-2 w-6"></i>
                                <input type="url" name="twitter" placeholder="Link Twitter"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="flex items-center">
                                <i class="fab fa-linkedin text-blue-700 mr-2 w-6"></i>
                                <input type="url" name="linkedin" placeholder="Link LinkedIn"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="flex items-center">
                                <i class="fab fa-instagram text-pink-600 mr-2 w-6"></i>
                                <input type="url" name="instagram" placeholder="Link Instagram"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                <div class="mb-4">
                    <label for="order" class="block text-gray-700 font-medium mb-2">Urutan Tampil</label>
                    <input type="number" name="order" id="order" min="0"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="0">
                </div>

                <div class="flex items-center mb-4">
                    <input type="checkbox" name="is_active" id="is_active" class="mr-2" checked value="1">
                    <label for="is_active" class="text-gray-700">Aktif</label>
                </div>
            </div>

            <button type="submit"
                class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                Simpan Anggota Tim
            </button>
        </form>
    </div>
@endsection
