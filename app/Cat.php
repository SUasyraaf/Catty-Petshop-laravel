<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = ['name' ,'breed', 'age'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
