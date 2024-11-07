<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets'; // Jadval nomini belgilash (agar jadval nomi 'tickets' bo'lsa, bu qadam optional)

    protected $fillable = [
        'event_id',
        'event_name',
        'user_id',
        'equal_price',
        'ticket_adult_price',
        'ticket_kid_price',
        'ticket_adult_quantity',
        'ticket_kid_quantity',
        'barcode',
        'ticket_status',
        'seat_number',
        'discount',
    ];
}
