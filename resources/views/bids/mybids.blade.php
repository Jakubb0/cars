@extends('layouts.app')
@section('content')
<table class="table">
<thead class="thead-dark">
    <th>Bid</th>
    <th>Date</th>
    <th>Car-brand</th>
    <th>Car-model</th>
    <th></th>
</thead>
<tbody>
@foreach($bids as $bid)
    <tr>
        <td>{{$bid->price}}</td>
        <td>{{$bid->date}}</td>
        <td>{{$bid->cars->last()->brand}}</td>
        <td>{{$bid->cars->last()->model}}</td>
        <td><a class="badge badge-primary" href="{{route('cars.show', $bid->cars->last()->id)}}">Car</a></td>
    </tr>
@endforeach
</tbody>
</table>
@endsection