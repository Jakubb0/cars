@extends('layouts.app')
@section('content')
    @if(!empty($cars))
    <div class="d-flex flex-wrap w-100">
    @foreach($cars as $car)
    <div class="card col-md-4">
    <a class="car-link" href="{{route('cars.show', $car->id)}}">
        <div class="text-center car-card-image">
            <img src="{{asset('storage/cars/'.$car->photos[0]->name)}}" alt="No photo" class="card-img-top">
        </div>
        <div class="card-body">
                <p>{{$car->brand}} {{$car->model}}</p>
                <p>Year: {{$car->year}}</p>
                <p>@if($car->automatic==1) Automaitc @else Manual @endif</p>
        </div>
            <div class="card-footer">
                <p>Current bid: {{$car->price}}$</p>
                <p class="small">Buy now price: {{$car->buynow_price}}$</p>
        </div>
    </a>
    </div>
    @endforeach
    </div>
    @else
        Nothing to display
    @endif
@endsection