@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
                <h2 class="text-xl font-semibold text-gray-800">Activity Details</h2>
            </div>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Event</h3>
                        <p class="mt-1 text-sm text-gray-900 capitalize">{{ $activity->description }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Performed By</h3>
                        <p class="mt-1 text-sm text-gray-900">
                            @if ($activity->causer)
                                {{ $activity->causer->name }} ({{ $activity->causer->email }})
                            @else
                                System
                            @endif
                        </p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Date & Time</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $activity->created_at->format('d/m/Y H:i:s') }}</p>
                    </div>
                </div>

                @if ($activity->subject)
                    <div class="mb-6">
                        <h3 class="text-sm font-medium text-gray-500">Affected User</h3>
                        <p class="mt-1 text-sm text-gray-900">
                            {{ $activity->subject->name }} ({{ $activity->subject->email }})
                        </p>
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Before Changes</h3>
                        @if (isset($activity->properties['old']))
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <pre class="text-sm text-gray-800 whitespace-pre-wrap">{{ json_encode($activity->properties['old'], JSON_PRETTY_PRINT) }}</pre>
                            </div>
                        @else
                            <p class="text-sm text-gray-500">No data</p>
                        @endif
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-2">After Changes</h3>
                        @if (isset($activity->properties['attributes']))
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <pre class="text-sm text-gray-800 whitespace-pre-wrap">{{ json_encode($activity->properties['attributes'], JSON_PRETTY_PRINT) }}</pre>
                            </div>
                        @else
                            <p class="text-sm text-gray-500">No data</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 flex justify-end">
                <a href="{{ route('logs.index') }}"
                    class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Back to Logs
                </a>
            </div>
        </div>
    </div>
@endsection
