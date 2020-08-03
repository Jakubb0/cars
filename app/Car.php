<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    public function photos()
    {
        return $this->hasMany('App\Photo');
    }

    public function users()
    {
        return $this->belongsTo('App\Users');
    }
}
