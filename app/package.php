<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['packageType', 'packagePrice'];

    public function bookings(){
        return $this->hasMany('App\Booking');
    }
}
