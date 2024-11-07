<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
   // Chipta sotib olish
   public function purchase(Request $request, $event_id)
   {
       $event = Event::where('event_id', $event_id)->first(); // Tadbirni olish

       // Ticketni yaratish va saqlash mantiqini qo'shish
       $ticket = new Ticket;
       $ticket->event_id = $event->event_id;
       $ticket->event_name = $event->title;
       $ticket->user_id = auth()->id(); // Agar foydalanuvchi tizimga kirgan bo'lsa
       $ticket->equal_price = $request->equal_price;
       $ticket->ticket_adult_price = $request->ticket_adult_price;
       $ticket->ticket_kid_price = $request->ticket_kid_price;
       $ticket->ticket_adult_quantity = $request->ticket_adult_quantity;
       $ticket->ticket_kid_quantity = $request->ticket_kid_quantity;
       $ticket->ticket_status = 'available'; // Boshlang'ich holat
       $ticket->barcode = uniqid(); // Yagona barcode
       $ticket->save();

       return redirect()->route('event.show', $event->event_id)
                        ->with('success', 'Chipta muvaffaqiyatli sotib olindi!');
   }
}
