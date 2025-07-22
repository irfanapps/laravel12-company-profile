@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <!-- User Header -->
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-semibold text-gray-800">User Details</h2>
                        <div class="flex space-x-3">
                            <a href="{{ route('users.edit', $user->id) }}"
                                class="text-sm bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded">
                                Edit
                            </a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-sm bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded"
                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- User Content -->
                <div class="p-6">
                    <div class="flex flex-col md:flex-row gap-8">
                        <!-- Left Column - Avatar -->
                        <div class="md:w-1/3 flex flex-col items-center">
                            <div class="mb-4">
                                <img class="h-32 w-32 rounded-full object-cover"
                                    src="{{ $user->avatar ? asset('storage/' . $user->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($user->name) . '&color=7F9CF5&background=EBF4FF' }}"
                                    alt="{{ $user->name }}">
                            </div>

                            <div class="text-center">
                                <span
                                    class="px-3 py-1 rounded-full text-sm font-medium 
                                {{ $user->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $user->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>
                        </div>

                        <!-- Right Column - Details -->
                        <div class="md:w-2/3">
                            <div class="space-y-4">
                                <!-- Name and Role -->
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">{{ $user->name }}</h3>
                                    <p class="text-sm text-gray-500">
                                        <span
                                            class="px-2 py-1 rounded-full 
                                        {{ $user->role === 'admin'
                                            ? 'bg-green-100 text-green-800'
                                            : ($user->role === 'editor'
                                                ? 'bg-blue-100 text-blue-800'
                                                : 'bg-gray-100 text-gray-800') }}">
                                            {{ ucfirst($user->role) }}
                                        </span>
                                    </p>
                                </div>

                                <!-- Contact Info -->
                                <div class="mt-4">
                                    <h4 class="text-sm font-medium text-gray-500">Contact Information</h4>
                                    <div class="mt-2 space-y-1">
                                        <div class="flex items-center text-sm text-gray-700">
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                            {{ $user->email }}
                                        </div>
                                        @if ($user->phone)
                                            <div class="flex items-center text-sm text-gray-700">
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path
                                                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                </svg>
                                                {{ $user->phone }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Account Info -->
                                <div class="mt-4">
                                    <h4 class="text-sm font-medium text-gray-500">Account Information</h4>
                                    <div class="mt-2 space-y-1">
                                        <div class="flex items-center text-sm text-gray-700">
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Member since {{ $user->created_at->format('M d, Y') }}
                                        </div>
                                        <div class="flex items-center text-sm text-gray-700">
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Last updated {{ $user->updated_at->diffForHumans() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Info Section -->
                <div class="border-t border-gray-200 px-6 py-4">
                    <h3 class="text-sm font-medium text-gray-500 mb-2">Additional Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-sm text-gray-500">Email Verified</p>
                            <p class="text-sm font-medium text-gray-900">
                                {{ $user->email_verified_at ? $user->email_verified_at->format('M d, Y H:i') : 'Not verified' }}
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Last Login</p>
                            <p class="text-sm font-medium text-gray-900">
                                {{ $user->last_login_at ? $user->last_login_at->diffForHumans() : 'Never logged in' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="mt-6">
                <a href="{{ route('users.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                    ← Back to all users
                </a>
            </div>
        </div>
    </div>
@endsection
