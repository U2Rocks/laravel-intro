<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $fillable=[
        'hotel_id',
        'type',
        'description',
        'price',
        'image'
    ];
    public function hotel() {
        return $this->belongsTo('app\Models\Hotel');
    }
}






//this is a commment
