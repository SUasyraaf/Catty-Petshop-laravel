<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = ['name' ,'breed', 'age'];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function bookings(){
        return $this->belongsTo('App\booking');
    }
}
