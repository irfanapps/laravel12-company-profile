@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 border-b flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">Contact Message</h2>
                <span
                    class="px-3 py-1 rounded-full text-sm font-medium {{ $contact->is_read ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                    {{ $contact->is_read ? 'Read' : 'New' }}
                </span>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">From</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->name }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Email</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->email }}</p>
                    </div>
                </div>

                @if ($contact->phone)
                    <div class="mb-6">
                        <h3 class="text-sm font-medium text-gray-500">Phone</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->phone }}</p>
                    </div>
                @endif

                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-500">Message</h3>
                    <div class="mt-1 p-4 bg-gray-50 rounded-lg">
                        <p class="text-gray-900 whitespace-pre-line">{{ $contact->message }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Received</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $contact->created_at->format('F j, Y \a\t g:i a') }}</p>
                    </div>
                </div>
            </div>

            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 flex justify-between">
                <a href="{{ route('contact.index') }}"
                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Back to Messages
                </a>

                <form action="{{ route('contact.destroy', $contact) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                        onclick="return confirm('Are you sure?')">
                        Delete Message
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
