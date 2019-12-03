<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['roomType', 'roomPrice'];

    public function bookings(){
        return $this->belongsTo('App\Booking');
    }
}
