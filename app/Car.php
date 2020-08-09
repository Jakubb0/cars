<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    public function photos()
    {
        return $this->hasMany('App\Photo', 'car');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'owner');
    }
}