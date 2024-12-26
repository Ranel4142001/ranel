<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_title',
        'image',
        'description',
        'price',
        'wifi',
        'room_type'
    ];

    public function isAvailable($startDate, $endDate)
{
    // Check if any bookings overlap with the requested dates
    return !Booking::where('room_id', $this->id)
        ->where('start_date', '<', $endDate)
        ->where('end_date', '>', $startDate)
        ->exists();
}

}
