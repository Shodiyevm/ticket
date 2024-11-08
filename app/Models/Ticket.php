<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets'; // Agar jadval nomi 'tickets' bo'lsa, bu qadam optional

    protected $fillable = [
        'event_id',
        'ticket_adult_price',
        'ticket_kid_price',
        'ticket_adult_quantity',
        'ticket_kid_quantity',
        'barcode',
        'user_id',
        'equal_price',
        'event_name',
        'ticket_status',
        'discount',
    ];

    /**
     * Ticketga tegishli eventni olish.
     */
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }
}

