<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=[
        'user_id',
        'room_id',
        'num_of_guests',
        'arrival',
        'departure'
    ];

    public function ReservationR() {
        return $this->belongsTo('app\Models\Room');
    }
    public function ReservationU() {
        return $this->belongsTo('app\User');
    }
}
