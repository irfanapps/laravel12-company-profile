@extends('admin.layouts.admin')

@section('title', 'Create New Category')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Create New Category</h1>
            <a href="{{ route('admin.categories.index') }}"
                class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                Back
            </a>
        </div>

        <form action="{{ route('admin.categories.store') }}" method="POST" class="bg-white rounded-lg shadow p-6">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name*</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="3"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label for="order" class="block text-gray-700 font-medium mb-2">Order</label>
                    <input type="number" name="order" id="order" min="0"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="0">
                </div>

                <div class="flex items-center mb-4">
                    <input type="checkbox" name="is_active" id="is_active" class="mr-2" checked>
                    <label for="is_active" class="text-gray-700">Active</label>
                </div>
            </div>

            <button type="submit"
                class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">
                Save Category
            </button>
        </form>
    </div>
@endsection
