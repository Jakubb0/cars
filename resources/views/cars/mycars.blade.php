@extends('layouts.app')
@section('content')
<table class="table">
<thead class="thead-dark">
    <th>Car</th>
    <th>Year</th>
    <th>Displacement</th>
    <th>Power</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
</thead>
<tbody>
@foreach($cars as $car)
    <tr>
        <td>{{$car->brand}} {{$car->model}}</td>
        <td>{{$car->year}}</td>
        <td>{{$car->litre}}</td>
        <td>{{$car->power}}</td>
        <td><a class="badge badge-primary" href="{{route('cars.show', $car->id)}}">Show</a></td>
        <td><a class="badge badge-warning" href="{{route('cars.edit', $car->id)}}">Edit</a></td>
        <td><a class="badge badge-danger" href="{{route('cars.destroy', $car->id)}}" onclick="return confirm('Are you sure you want to Remove?')">Delete</a></td>
    </tr>
@endforeach
</tbody>
</table>
@endsection