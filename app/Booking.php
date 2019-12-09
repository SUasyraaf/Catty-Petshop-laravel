<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['day_in', 'day_out', 'num_of_days','payment'];

    public function package(){
        return $this->hasMany('App\Package');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function cat(){
        return $this->hasMany('App\User');
    }

    public function room(){
        return $this->hasMany('App\Room');
    }
}
