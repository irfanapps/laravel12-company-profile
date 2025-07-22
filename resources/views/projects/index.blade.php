@extends('layouts.app')

@section('title', 'Portfolio Kami')

@section('content')
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Portfolio Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Beberapa proyek terbaik yang telah kami selesaikan untuk
                    klien-klien kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                        <a href="{{ route('projects.show', $project->slug) }}">
                            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}"
                                class="w-full h-48 object-cover">
                        </a>
                        <div class="p-6">
                            @if ($project->is_featured)
                                <span
                                    class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full mb-2">Featured</span>
                            @endif
                            <h3 class="text-xl font-bold mb-2">
                                <a href="{{ route('projects.show', $project->slug) }}"
                                    class="hover:text-blue-600">{{ $project->title }}</a>
                            </h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">{{ $project->client_name }}</span>
                                <a href="{{ route('projects.show', $project->slug) }}"
                                    class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                    Lihat Detail <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8">
                {{ $projects->links() }}
            </div>
        </div>
    </section>
@endsection
