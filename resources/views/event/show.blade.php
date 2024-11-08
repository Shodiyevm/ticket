@extends('layouts.master')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="flex flex-col lg:flex-row">
            <!-- Event Image Section -->
            <div class="lg:w-1/2 h-96 lg:h-auto relative">
                <img src="{{ asset('images/event_images/'.$event->image) }}" alt="Event Image" class="object-cover w-full h-full">
                <div class="absolute top-4 right-4 bg-indigo-600 text-white px-4 py-2 rounded-lg shadow">
                    {{ number_format($event->price) }} so'm
                </div>
            </div>

            <!-- Event Details Section -->
            <div class="lg:w-1/2 p-8">
                <h2 class="text-4xl font-bold text-indigo-700">{{ $event->title }}</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">{{ $event->description }}</p>
                
                <div class="mt-6">
                    <p class="text-lg font-semibold text-gray-600"><span class="font-bold text-indigo-700">Date:</span> {{ \Carbon\Carbon::parse($event->event_date)->format('F j, Y') }}</p>
                    <p class="text-lg font-semibold text-gray-600"><span class="font-bold text-indigo-700">Location:</span> {{ $event->location }}</p>
                </div>

                <!-- Ticket Purchase Form -->
                <form method="POST" action="{{ url('/ticket/purchase/'.$event->event_id) }}" class="mt-8 space-y-4">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="ticket_adult_quantity" class="block text-gray-600">Adults</label>
                            <input type="number" id="ticket_adult_quantity" name="ticket_adult_quantity" min="1" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200" required>
                        </div>
                        <div>
                            <label for="ticket_kid_quantity" class="block text-gray-600">Kids</label>
                            <input type="number" id="ticket_kid_quantity" name="ticket_kid_quantity" min="0" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-indigo-200">
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow-md transition duration-150">Buy Tickets</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
