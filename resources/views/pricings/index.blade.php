@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Pricing Plans</h1>
            <a href="{{ route('pricings.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                Create New Plan
            </a>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($pricings as $pricing)
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden {{ $pricing->is_featured ? 'ring-2 ring-blue-500 transform scale-105' : '' }}">
                    @if ($pricing->is_featured)
                        <div class="bg-blue-500 text-white text-center py-1">
                            Most Popular
                        </div>
                    @endif
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $pricing->name }}</h3>
                        <div class="text-3xl font-bold mb-4">
                            {{ $pricing->formatted_price }}
                            <span class="text-sm font-normal text-gray-500">{{ $pricing->period_text }}</span>
                        </div>
                        <p class="text-gray-600 mb-4">{{ $pricing->description }}</p>

                        <ul class="mb-6 space-y-2">
                            @foreach ($pricing->features as $feature)
                                <li class="flex items-center">
                                    <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>

                        <div class="flex space-x-2">
                            <a href="{{ route('pricings.edit', $pricing) }}"
                                class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('pricings.destroy', $pricing) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
