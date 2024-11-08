@extends('layouts.master')

@section('content')
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-indigo-600">Welcome to Our Event Site</h2>
        <p class="mt-4 text-lg text-gray-600">Discover upcoming events and book your tickets easily.</p>
    </div>

    <section id="events" class="py-16 bg-gray-200">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-indigo-600">Upcoming Events</h2>
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($events as $event)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="https://via.placeholder.com/300x200" alt="{{ $event->title }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold">{{ $event->title }}</h3>
                            <p class="mt-2 text-gray-600">{{ $event->description }}</p>
                            <p class="mt-2 text-lg font-bold text-indigo-600">Price: {{ $event->price }} so'm</p>
                            <p class="mt-2 text-lg font-bold text-indigo-600">Available Tickets: {{ $event->totalTickets }}</p> 
                            <a href="{{ url('event/'.$event->event_id) }}" class="mt-4 inline-block bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Buy Ticket</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
