<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Car;
use App\Bid;

class BidController extends Controller
{
    public function bid(Request $request, $carid)
    {
        $car = Car::findOrFail($carid);
        $lastbid = $car->bids->last();
        if($request->bid>$lastbid->price && $lastbid->user_id!=Auth::id() && $car->owner!=Auth::id())
        {
            $bid = Bid::create([
                'price' => $request->bid,
                'user_id' => Auth::id(),
                'date' => date("Y.m.d h:i:s"),
            ]);
            $car->bids()->attach($bid->id);
        }
        return redirect()->back();
    }

    public function mybids()
    {
        $bids = Bid::where('user_id', Auth::id())->get()->sortByDesc("date");
        return view("bids.mybids")->with('bids', $bids);
    }
}
