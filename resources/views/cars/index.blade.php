@extends('layouts.app')
@section('content')
    @if(isset($cars))
    <div class="d-flex flex-wrap w-100 justify-content-center">
    @foreach($cars as $car)
        <a class="car-link mb-2" href="{{route('cars.show', $car->id)}}">
            <div class="row mb-3">
                <div class="col-3 car-photo-sm">
                    <img src="{{asset('storage/cars/'.$car->photos[0]->name)}}" alt="" >
                </div>
                <div class="col-3 pt-2">
                    <h5>{{ $car->brand . ' ' . $car->model }} <small>{{$car->year}}</small></h5>
                    <small>{{$car->litre . 'ccm ' . $car->power . 'HP' }} {{$car->automatic?"Automatic gearbox":"Manual gearbox"}}</small>
                </div>
                <div class="col-md-6 text-right pr-4 pt-2">
                        <h5>@if(isset($car->bids[0])) {{$car->bids->last()->price}} @else {{$car->price}} @endif $</h5>
                        <p class="small">Buy now for: {{$car->buynow_price}}$</p>
                </div>
            </div>
        </a>
    @endforeach
    
    </div>
    @else
        Nothing to display
    @endif

    @endsection

