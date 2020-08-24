<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = ["user_id", "date", "price"];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany("App\User");
    }
    
    public function cars()
    {
        return $this->belongsToMany("App\Car", "bids_cars", "bid_id", "car_id");
    }

}
