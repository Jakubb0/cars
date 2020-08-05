<?php

namespace App\Http\Controllers;

use App\Car;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index')->with('cars', $cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car;
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->year = $request->year;
        $car->power = $request->power;
        $car->litre = $request->litre;
        $car->automatic = $request->gearbox;
        $car->price = $request->price;
        $car->buynow_price = $request->buynow_price;
        $car->description = $request->description;
        $car->owner = Auth::id();
        $car->save();

        $photos = $request->file('photos');
        foreach($photos as $p)
        {
            $photo = new Photo;
            $photo->name = $p->getClientOriginalName();
            $photo->location = "asd";
            $photo->cars()->associate($car);
            $photo->save();
        }


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
