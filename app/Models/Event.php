<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events'; // Jadval nomini belgilash (agar jadval nomi 'events' bo'lsa, bu qadam optional)

    protected $fillable = [
        'event_id',
        'title',
        'description',
        'event_date',
        'location',
        'price',
    ];
}
