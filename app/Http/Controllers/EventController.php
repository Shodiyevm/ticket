<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    
    public function index()
    {
        $events = Event::all(); 
        return view('index', compact('events'));
    }

    public function show($event_id)
    {
        $event = Event::where('event_id', $event_id)->first(); // Tadbirni ID orqali olish
        return view('event.show', compact('event'));
    }
}
