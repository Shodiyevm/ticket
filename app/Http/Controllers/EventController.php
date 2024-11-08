<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
   public function index()
    {
        // Barcha eventlarni olish
        $events = Event::all();
    
        // Har bir event uchun ticketlar sonini hisoblash
        foreach ($events as $event) {
            $event->totalTickets = $event->tickets->sum(function($ticket) {
                return $ticket->ticket_adult_quantity + $ticket->ticket_kid_quantity;
            });
        }
    
        return view('index', compact('events'));
    }
    
    public function show($event_id)
    {
        // Tadbirni event_id orqali olish
        $event = Event::where('event_id', $event_id)->first();

        // Tadbirga tegishli ticketlarni olish
        $tickets = $event->tickets;

        // Jami ticketlar sonini hisoblash (katta va bola ticketlari)
        $totalTickets = $tickets->sum(function($ticket) {
            return $ticket->ticket_adult_quantity + $ticket->ticket_kid_quantity;
        });

        return view('event.show', compact('event', 'totalTickets'));
    }
}
