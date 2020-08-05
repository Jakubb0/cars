@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-8">
        {{$car->photos[0]}}
    </div>
    <div class="col-4">
        @for($i = 1; $i<count($car->photos); $i++)
            {{$car->photos[$i]}}
        @endfor
    </div>
    <p>{{$car->brand . ' ' . $car->model}}</p>
</div>
@endsection