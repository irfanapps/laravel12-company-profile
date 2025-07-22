@extends('layouts.app')

@section('title', 'Testimonials')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Testimonials</h1>
            <a href="{{ route('testimonials.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-200">
                Add New Testimonial
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($testimonials as $testimonial)
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 {{ $testimonial->is_featured ? 'ring-2 ring-yellow-400 border-yellow-100' : 'border border-gray-200' }}">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <img src="{{ $testimonial->avatar_url }}" alt="{{ $testimonial->name }}"
                                class="w-12 h-12 rounded-full object-cover mr-4 border-2 border-gray-200">
                            <div>
                                <h3 class="font-bold text-gray-800">{{ $testimonial->name }}</h3>
                                <p class="text-sm text-gray-600">
                                    {{ $testimonial->position }}
                                    @if ($testimonial->company)
                                        <span class="text-gray-500">at</span> {{ $testimonial->company }}
                                    @endif
                                </p>
                            </div>
                        </div>

                        <div class="mb-4 text-yellow-500 text-lg">
                            {{ $testimonial->rating_stars }}
                        </div>

                        <blockquote class="text-gray-700 mb-6 italic">
                            "{{ $testimonial->content }}"
                        </blockquote>

                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-500">
                                {{ $testimonial->created_at->format('M d, Y') }}
                            </span>
                            <div class="flex space-x-2">
                                <a href="{{ route('testimonials.edit', $testimonial) }}"
                                    class="text-blue-600 hover:text-blue-800 text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 text-sm"
                                        onclick="return confirm('Are you sure you want to delete this testimonial?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">No testimonials found. Create your first one!</p>
                    <a href="{{ route('testimonials.create') }}"
                        class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        Add Testimonial
                    </a>
                </div>
            @endforelse
        </div>

        {{-- @if ($testimonials->hasPages())
            <div class="mt-8">
                {{ $testimonials->links() }}
            </div>
        @endif --}}
    </div>
@endsection
