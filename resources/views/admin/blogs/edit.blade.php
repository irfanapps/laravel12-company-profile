@extends('layouts.app')

@section('title', 'Edit Blog Post')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Blog Post</h1>

            <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data"
                class="bg-white rounded-lg shadow-md p-6">
                @csrf
                @method('PUT')

                <!-- Title Input -->
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Excerpt Input -->
                <div class="mb-6">
                    <label for="excerpt" class="block text-gray-700 font-medium mb-2">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('excerpt') border-red-500 @enderror">{{ old('excerpt', $blog->excerpt) }}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Content Input -->
                <div class="mb-6">
                    <label for="content" class="block text-gray-700 font-medium mb-2">Content</label>
                    <textarea name="content" id="content" rows="10"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('content') border-red-500 @enderror">{{ old('content', $blog->content) }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Categories Multi-select -->
                <div class="mb-6">
                    <label for="categories" class="block text-gray-700 font-medium mb-2">Categories</label>
                    <select name="categories[]" id="categories" multiple
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('categories') border-red-500 @enderror">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ in_array($category->id, $selectedCategories) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('categories')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div class="mb-6">
                    <label for="image" class="block text-gray-700 font-medium mb-2">Featured Image</label>

                    @if ($blog->image)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Current featured image"
                                class="w-full max-w-xs rounded-md shadow-sm">
                            <p class="text-sm text-gray-500 mt-1">Current image</p>
                        </div>
                    @endif

                    <input type="file" name="image" id="image"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('image') border-red-500 @enderror">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Publish Status -->
                <div class="mb-6">
                    <div class="flex items-center">
                        <input type="checkbox" name="is_published" id="is_published" value="1" class="mr-2"
                            {{ old('is_published', isset($blog->is_published) ? $blog->is_published : 1) ? 'checked' : '' }}
                            class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="is_published" class="ml-2 block text-gray-700">Publish this post</label>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Update Post
                    </button>

                    <a href="{{ route('admin.blogs.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Inisialisasi select2 untuk multiple categories
        document.addEventListener('DOMContentLoaded', function() {
            new MultiSelectTag('categories', {
                rounded: true,
                tagColor: {
                    textColor: '#1E40AF',
                    borderColor: '#93C5FD',
                    bgColor: '#DBEAFE'
                }
            });
        });
    </script>
@endpush
