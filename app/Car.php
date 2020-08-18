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

    public function bids()
    {
        return $this->belongsToMany('App\Bid', "bids_cars", "car_id", "bid_id");
    }
}
