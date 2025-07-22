@extends('admin.layouts.admin')

@section('title', 'Create New Blog Post')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Create New Blog Post</h1>
            <a href="{{ route('admin.blogs.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Back
            </a>
        </div>

        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white rounded-lg shadow p-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Main Content -->
                <div class="md:col-span-2">
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-medium mb-2">Title*</label>
                        <input type="text" name="title" id="title"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-gray-700 font-medium mb-2">Content*</label>
                        <textarea name="content" id="content" rows="15"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="excerpt" class="block text-gray-700 font-medium mb-2">Excerpt</label>
                        <textarea name="excerpt" id="excerpt" rows="3"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        <p class="text-sm text-gray-500 mt-1">A short summary of your post (max 300 characters)</p>
                    </div>
                </div>

                <!-- Sidebar -->
                <div>
                    <div class="mb-4">
                        <label for="featured_image" class="block text-gray-700 font-medium mb-2">Featured Image*</label>
                        <input type="file" name="featured_image" id="featured_image"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        <p class="text-sm text-gray-500 mt-1">Recommended size: 1200x630 pixels</p>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium mb-2">Categories</label>
                        <div class="space-y-2">
                            @foreach ($categories as $category)
                                <div class="flex items-center">
                                    <input type="checkbox" name="categories[]" id="category-{{ $category->id }}"
                                        value="{{ $category->id }}" class="mr-2">
                                    <label for="category-{{ $category->id }}">{{ $category->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="published_at" class="block text-gray-700 font-medium mb-2">Publish Date</label>
                        <input type="datetime-local" name="published_at" id="published_at"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="flex items-center mb-4">
                        <input type="checkbox" name="is_published" id="is_published" value="1" class="mr-2">

                        <label for="is_published">Publish Immediately</label>
                    </div>

                    <div class="mb-4">
                        <label for="meta_title" class="block text-gray-700 font-medium mb-2">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="text-sm text-gray-500 mt-1">Recommended: 50-60 characters</p>
                    </div>

                    <div class="mb-4">
                        <label for="meta_description" class="block text-gray-700 font-medium mb-2">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" rows="3"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        <p class="text-sm text-gray-500 mt-1">Recommended: 150-160 characters</p>
                    </div>
                </div>
            </div>

            <button type="submit"
                class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                Save Post
            </button>
        </form>
    </div>

    @push('scripts')
        <script>
            // Initialize rich text editor
            ClassicEditor
                .create(document.querySelector('#content'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
@endsection
