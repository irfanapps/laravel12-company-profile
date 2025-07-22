@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">{{ $about->title ?? 'About Us' }}</h1>
            @can('edit-about')
                <a href="{{ route('about.edit') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Edit Page
                </a>
            @endcan
        </div>

        @if ($about->image)
            <div class="mb-8 rounded-lg overflow-hidden">
                <img src="{{ asset('storage/' . $about->image) }}" alt="About Us" class="w-full h-96 object-cover">
            </div>
        @endif

        <div class="prose max-w-none mb-8">
            {!! $about->content ?? '<p>Content not available.</p>' !!}
        </div>

        @if ($about->mission || $about->vision)
            <div class="grid md:grid-cols-2 gap-8 mb-8">
                @if ($about->mission)
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-xl font-semibold mb-4 text-blue-600">Our Mission</h2>
                        <p>{{ $about->mission }}</p>
                    </div>
                @endif

                @if ($about->vision)
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-xl font-semibold mb-4 text-blue-600">Our Vision</h2>
                        <p>{{ $about->vision }}</p>
                    </div>
                @endif
            </div>
        @endif

        @if (!empty($about->values))
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Our Core Values</h2>
                <div class="grid md:grid-cols-3 gap-4">
                    @foreach ($about->values as $value)
                        <div class="bg-white p-4 rounded-lg shadow border-l-4 border-blue-500">
                            <p class="font-medium">{{ $value }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
