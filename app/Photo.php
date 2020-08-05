<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public $timestamps = false;

    public function cars()
    {
        return $this->belongsTo('App\Car', 'car');
    }
}
