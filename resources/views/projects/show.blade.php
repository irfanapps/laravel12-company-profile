@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Project Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold mb-2">{{ $project->title }}</h1>
                    <div class="flex items-center space-x-4 text-gray-600">
                        <span>Klien: {{ $project->client_name }}</span>
                        <span>•</span>
                        <span>{{ $project->start_date->format('M Y') }}
                            @if ($project->end_date)
                                - {{ $project->end_date->format('M Y') }}
                            @else
                                - Sekarang
                            @endif
                        </span>
                    </div>
                </div>

                <!-- Cover Image -->
                <div class="mb-8 rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}"
                        class="w-full h-auto">
                </div>

                <!-- Project Details -->
                <div class="prose max-w-none mb-8">
                    {!! nl2br(e($project->description)) !!}
                </div>

                <!-- Project URL -->
                @if ($project->project_url)
                    <div class="mb-8">
                        <a href="{{ $project->project_url }}" target="_blank"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            <i class="fas fa-external-link-alt mr-2"></i> Kunjungi Proyek
                        </a>
                    </div>
                @endif

                <!-- Gallery -->
                @if ($project->gallery && count($project->gallery) > 0)
                    <div class="mb-8">
                        <h3 class="text-xl font-bold mb-4">Galeri Proyek</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            @foreach ($project->gallery as $image)
                                <div class="overflow-hidden rounded-lg shadow-sm">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Gallery Image {{ $loop->iteration }}"
                                        class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300 cursor-pointer">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Client Info -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-bold mb-4">Tentang Klien</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <p class="text-gray-600 mb-1">Nama Klien</p>
                            <p class="font-medium">{{ $project->client_name }}</p>
                        </div>
                        @if ($project->client_company)
                            <div>
                                <p class="text-gray-600 mb-1">Perusahaan</p>
                                <p class="font-medium">{{ $project->client_company }}</p>
                            </div>
                        @endif
                        <div>
                            <p class="text-gray-600 mb-1">Periode Proyek</p>
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
        </div>
    </section>
@endsection
