@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Edit About Us Page</h1>

        <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $about->title) }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                    <textarea name="content" id="content" rows="10"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">{{ old('content', $about->content) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label>
                    <input type="file" name="image" id="image"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                    @if ($about->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $about->image) }}" alt="Current Image" class="h-40">
                            <p class="text-sm text-gray-500 mt-1">Current image</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="bg-white shadow rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4">Company Profile</h2>

                <div class="mb-4">
                    <label for="mission" class="block text-sm font-medium text-gray-700 mb-1">Mission</label>
                    <input type="text" name="mission" id="mission" value="{{ old('mission', $about->mission) }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label for="vision" class="block text-sm font-medium text-gray-700 mb-1">Vision</label>
                    <input type="text" name="vision" id="vision" value="{{ old('vision', $about->vision) }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Core Values</label>
                    <div id="values-container">
                        @if (!empty(old('values', $about->values)))
                            @foreach (old('values', $about->values) as $value)
                                <div class="value-input mb-2 flex">
                                    <input type="text" name="values[]" value="{{ $value }}"
                                        class="flex-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                    <button type="button"
                                        class="remove-value ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">×</button>
                                </div>
                            @endforeach
                        @else
                            <div class="value-input mb-2 flex">
                                <input type="text" name="values[]"
                                    class="flex-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                <button type="button"
                                    class="remove-value ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">×</button>
                            </div>
                        @endif
                    </div>
                    <button type="button" id="add-value"
                        class="mt-2 px-3 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 text-sm">+ Add
                        Value</button>
                </div>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('about.index') }}"
                    class="mr-4 px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Cancel
                </a>
                <button type="submit"
                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Save Changes
                </button>
            </div>
        </form>
    </div>

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add new value field
            document.getElementById('add-value').addEventListener('click', function() {
                const container = document.getElementById('values-container');
                const div = document.createElement('div');
                div.className = 'value-input mb-2 flex';
                div.innerHTML = `
                <input type="text" name="values[]" 
                       class="flex-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <button type="button" class="remove-value ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">×</button>
            `;
                container.appendChild(div);
            });

            // Remove value field
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-value')) {
                    e.target.closest('.value-input').remove();
                }
            });
        });
    </script>
@endsection
@endsection
