<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['day_in', 'day_out', 'payment'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
