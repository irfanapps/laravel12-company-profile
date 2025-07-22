@extends('admin.layouts.admin')

@section('title', 'Detail Proyek: ' . $project->title)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Detail Proyek: {{ $project->title }}</h1>
            <div class="flex space-x-2">
                <a href="{{ route('admin.projects.edit', $project->slug) }}"
                    class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    <i class="fas fa-edit mr-1"></i> Edit
                </a>
                <a href="{{ route('admin.projects.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <!-- Cover Image -->
            <div class="h-64 w-full bg-gray-200 relative">
                <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}"
                    class="w-full h-full object-cover">
                @if ($project->is_featured)
                    <span
                        class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                        Featured Project
                    </span>
                @endif
            </div>

            <!-- Project Details -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Main Info -->
                    <div class="md:col-span-2">
                        <h2 class="text-xl font-bold mb-4">{{ $project->title }}</h2>
                        <div class="prose max-w-none mb-6">
                            {!! nl2br(e($project->description)) !!}
                        </div>

                        <!-- Project URL -->
                        @if ($project->project_url)
                            <div class="mb-6">
                                <a href="{{ $project->project_url }}" target="_blank"
                                    class="inline-flex items-center text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-external-link-alt mr-2"></i> Kunjungi Proyek
                                </a>
                            </div>
                        @endif

                        <!-- Status -->
                        <div class="flex items-center space-x-4">
                            <span
                                class="px-3 py-1 rounded-full text-sm font-medium {{ $project->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $project->is_active ? 'Aktif' : 'Nonaktif' }}
                            </span>
                            <span class="text-gray-500 text-sm">
                                Dilihat {{ $project->view_count }} kali
                            </span>
                        </div>
                    </div>

                    <!-- Client Info -->
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <h3 class="font-medium text-lg mb-3">Informasi Klien</h3>
                        <div class="space-y-3">
                            <div>
                                <p class="text-sm text-gray-500">Nama Klien</p>
                                <p class="font-medium">{{ $project->client_name }}</p>
                            </div>
                            @if ($project->client_company)
                                <div>
                                    <p class="text-sm text-gray-500">Perusahaan</p>
                                    <p class="font-medium">{{ $project->client_company }}</p>
                                </div>
                            @endif
                            <div>
                                <p class="text-sm text-gray-500">Periode Proyek</p>
                                <p class="font-medium">
                                    {{ $project->start_date->format('d M Y') }}
                                    @if ($project->end_date)
                                        - {{ $project->end_date->format('d M Y') }}
                                    @else
                                        - Sekarang
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gallery -->
                @if ($project->gallery && count($project->gallery) > 0)
                    <div class="mt-8">
                        <h3 class="text-lg font-medium mb-4">Gallery Proyek</h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach ($project->gallery as $image)
                                <div class="overflow-hidden rounded-lg shadow-sm">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image {{ $loop->iteration }}"
                                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300 cursor-pointer">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Metadata -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8 text-center">
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <p class="text-sm text-gray-500">Dibuat Pada</p>
                        <p class="font-medium">{{ $project->created_at->format('d M Y H:i') }}</p>
                    </div>
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <p class="text-sm text-gray-500">Diperbarui Pada</p>
                        <p class="font-medium">{{ $project->updated_at->format('d M Y H:i') }}</p>
                    </div>
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <p class="text-sm text-gray-500">ID Proyek</p>
                        <p class="font-mono">{{ $project->id }}</p>
                    </div>
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <p class="text-sm text-gray-500">Slug URL</p>
                        <p class="font-mono">{{ $project->slug }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
