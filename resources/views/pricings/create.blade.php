@extends('layouts.app')

@section('title', 'Create New Pricing Plan')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Create New Pricing Plan</h1>

            <form action="{{ route('pricings.store') }}" method="POST" class="bg-white rounded-lg shadow-md p-6">
                @csrf

                <!-- Name Input -->
                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Plan Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                        required>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price and Period -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Price Input -->
                    <div>
                        <label for="price" class="block text-gray-700 font-medium mb-2">Price</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500">$</span>
                            </div>
                            <input type="number" name="price" id="price" min="0" step="0.01"
                                value="{{ old('price') }}"
                                class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('price') border-red-500 @enderror"
                                required>
                        </div>
                        @error('price')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Period Select -->
                    <div>
                        <label for="period" class="block text-gray-700 font-medium mb-2">Billing Period</label>
                        <select name="period" id="period"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('period') border-red-500 @enderror">
                            <option value="month" {{ old('period') == 'month' ? 'selected' : '' }}>Monthly</option>
                            <option value="year" {{ old('period') == 'year' ? 'selected' : '' }}>Yearly</option>
                            <option value="one-time" {{ old('period') == 'one-time' ? 'selected' : '' }}>One-time</option>
                        </select>
                        @error('period')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Description Input -->
                <div class="mb-6">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea name="description" id="description" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Features Input -->
                <div class="mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Features</label>
                    <div id="features-container">
                        @if (old('features'))
                            @foreach (old('features') as $index => $feature)
                                <div class="feature-input flex mb-2">
                                    <input type="text" name="features[]" value="{{ $feature }}"
                                        class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <button type="button"
                                        class="remove-feature ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                                        Remove
                                    </button>
                                </div>
                            @endforeach
                        @else
                            <div class="feature-input flex mb-2">
                                <input type="text" name="features[]"
                                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <button type="button"
                                    class="remove-feature ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                                    Remove
                                </button>
                            </div>
                        @endif
                    </div>
                    <button type="button" id="add-feature"
                        class="mt-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">
                        + Add Feature
                    </button>
                    @error('features')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Featured Plan and Order -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <!-- Featured Plan -->
                    <div>
                        <div class="flex items-center">
                            <input type="checkbox" name="is_featured" id="is_featured" value="1"
                                {{ old('is_featured') ? 'checked' : '' }}
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="is_featured" class="ml-2 block text-gray-700">Featured Plan</label>
                        </div>
                        <p class="text-sm text-gray-500 mt-1">Highlight this plan as featured</p>
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
                        class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Create Plan
                    </button>

                    <a href="{{ route('pricings.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add feature field
                document.getElementById('add-feature').addEventListener('click', function() {
                    const container = document.getElementById('features-container');
                    const div = document.createElement('div');
                    div.className = 'feature-input flex mb-2';
                    div.innerHTML = `
                <input type="text" name="features[]"
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="button" class="remove-feature ml-2 px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                    Remove
                </button>
            `;
                    container.appendChild(div);
                });

                // Remove feature field
                document.addEventListener('click', function(e) {
                    if (e.target && e.target.classList.contains('remove-feature')) {
                        e.target.closest('.feature-input').remove();
                    }
                });
            });
        </script>
    @endpush
@endsection
