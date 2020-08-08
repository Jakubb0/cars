<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function gallery(Request $request)
    {
        $photos = array();
        $car = Car::where("id",$request->carid)->first();
        foreach($car->photos as $p)
        {
            array_push($photos, $p->name);
        }
        return view('partial.photos')->with('photos', $photos);
    }
}
