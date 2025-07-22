@extends('layouts.app')

@section('title', 'Add New Testimonial')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Add New Testimonial</h1>

            <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data"
                class="bg-white rounded-lg shadow-md p-6">
                @csrf

                <!-- Name Input -->
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Name *</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                        required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Position and Company -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Position Input -->
                    <div>
                        <label for="position" class="block text-gray-700 font-medium mb-2">Position</label>
                        <input type="text" name="position" id="position" value="{{ old('position') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('position') border-red-500 @enderror">
                        @error('position')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Company Input -->
                    <div>
                        <label for="company" class="block text-gray-700 font-medium mb-2">Company</label>
                        <input type="text" name="company" id="company" value="{{ old('company') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('company') border-red-500 @enderror">
                        @error('company')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Content Input -->
                <div class="mb-6">
                    <label for="content" class="block text-gray-700 font-medium mb-2">Testimonial Content *</label>
                    <textarea name="content" id="content" rows="4"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('content') border-red-500 @enderror"
                        required>{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Rating Input -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Rating *</label>
                    <div class="flex items-center space-x-2">
                        @for ($i = 1; $i <= 5; $i++)
                            <label class="cursor-pointer">
                                <input type="radio" name="rating" value="{{ $i }}"
                                    {{ old('rating', 5) == $i ? 'checked' : '' }} class="sr-only peer">
                                <span class="text-2xl peer-checked:text-yellow-500 text-gray-300">★</span>
                            </label>
                        @endfor
                    </div>
                    @error('rating')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Avatar Upload -->
                <div class="mb-6">
                    <label for="avatar" class="block text-gray-700 font-medium mb-2">Profile Photo</label>
                    <input type="file" name="avatar" id="avatar"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('avatar') border-red-500 @enderror"
                        accept="image/*">
                    @error('avatar')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <p class="text-sm text-gray-500 mt-1">Recommended size: 200x200 pixels</p>
                </div>

                <!-- Featured and Order -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Featured Checkbox -->
                    <div>
                        <div class="flex items-center">
                            <input type="checkbox" name="is_featured" id="is_featured" value="1"
                                {{ old('is_featured') ? 'checked' : '' }}
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="is_featured" class="ml-2 block text-gray-700">Featured Testimonial</label>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Highlight this testimonial</p>
                    </div>

                    <!-- Order Input -->
                    <div>
                        <label for="order" class="block text-gray-700 font-medium mb-2">Display Order</label>
                        <input type="number" name="order" id="order" min="0" value="{{ old('order', 0) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <p class="text-sm text-gray-500 mt-1">Lower numbers display first</p>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                        Save Testimonial
                    </button>

                    <a href="{{ route('testimonials.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
