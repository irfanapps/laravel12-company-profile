@extends('admin.layouts.admin')

@section('title', $blog->title)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">{{ $blog->title }}</h1>
            <div class="flex space-x-2">
                {{-- <a href="{{ route('admin.blogs.edit', $blog->slug) }}"
                    class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    Edit
                </a> --}}
                <a href="{{ route('admin.blogs.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Back
                </a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <!-- Featured Image -->
            <div class="w-full h-64 bg-gray-200 overflow-hidden">
                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                    class="w-full h-full object-cover">
            </div>

            <!-- Blog Content -->
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        {{-- <img src="{{ $blog->author->profile_photo_url }}" alt="{{ $blog->author->name }}"
                            class="w-10 h-10 rounded-full mr-3"> --}}
                        <div>
                            {{-- <div class="font-medium">{{ $blog->author->name }}</div> --}}
                            <div class="text-sm text-gray-500">
                                {{ $blog->published_at ? $blog->published_at->format('F j, Y') : 'Not published' }}
                                • {{ $blog->views }} views
                            </div>
                        </div>
                    </div>
                    <div>
                        <span
                            class="px-3 py-1 rounded-full text-sm font-medium {{ $blog->is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ $blog->is_published ? 'Published' : 'Draft' }}
                        </span>
                    </div>
                </div>

                <!-- Categories -->
                @if ($blog->categories->count() > 0)
                    <div class="mb-6">
                        <div class="flex flex-wrap gap-2">
                            @foreach ($blog->categories as $category)
                                <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                                    {{ $category->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Excerpt -->
                @if ($blog->excerpt)
                    <div class="prose-lg mb-6">
                        {{ $blog->excerpt }}
                    </div>
                @endif

                <!-- Content -->
                <div class="prose max-w-none">
                    {!! $blog->content !!}
                </div>

                <!-- SEO Meta -->
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <h3 class="text-lg font-medium mb-3">SEO Information</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="mb-3">
                            <p class="text-sm text-gray-500">Meta Title</p>
                            <p class="font-medium">{{ $blog->meta_title ?? 'Not set' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Meta Description</p>
                            <p class="font-medium">{{ $blog->meta_description ?? 'Not set' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
