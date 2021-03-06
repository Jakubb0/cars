@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-sm-8 car-photo-lg">
        <img src="{{asset('storage/cars/'.$car->photos[0]->name)}}" class="car-photo" val="{{$car->id}}" data-toggle="modal" data-target="#photo_modal" alt="No photo">
    </div>
    <div class="col-sm-4 d-none d-sm-block car-photo-sm">
        @for($i = 1; $i<count($car->photos); $i++)
           <img class="car-photo" src="{{asset('storage/cars/'.$car->photos[$i]->name)}}" val="{{$car->id}}"  data-toggle="modal" data-target="#photo_modal" alt="No photo" >
            @if($i>1)
                <div class="car-photo-text text-center">
                    <img class="car-photo" src="{{asset('storage/cars/'.$car->photos[$i+1]->name)}}" val="{{$car->id}}"  data-toggle="modal" data-target="#photo_modal" alt="No photo">
                    <p class="carousel-caption font-weight-bold">+{{count($car->photos)-4}}</p>
                </div>
                @break
            @endif
        @endfor
    </div>
    <div class="col-12"><h1>{{$car->brand . ' ' . $car->model}}</h1></div>
    <div class="col-sm-8">
        <p><span class="badge badge-primary">@if($car->automatic==true)Automatic @else Manual @endif</span>
        <span class="font-weight-bold">Year of production:</span> {{$car->year}}</p>
        <p><span class="font-weight-bold">Displacement: </span>{{$car->litre}} ccm
        <span class="font-weight-bold">Power: </span><span>{{$car->power}} HP</span></p>
    </div>
    <div class="col-sm-4 text-md-right">
        @if(!isset($car->bids[0]))
          <p><span class="font-weight-bold">Starting price: </span>{{$car->price}}</p>
        @else
          <p><span class="font-weight-bold">Current bid: </span>{{$car->bids->last()->price}}</p>
        @endif
        @if(Auth::check() && $car->owner!=Auth::id())
        <p>
          <form action="{{route('bid', $car->id)}}" method="POST">
            @csrf
            @if(!isset($car->bids[0]))
              <input name="bid" id="bid" type="number" min="{{$car->price + 1}}"> <button type="submit" class="btn btn-primary">Bid</button>
            @elseif($car->bids->last()->user_id != Auth::id())
              <input name="bid" id="bid" type="number" min="{{$car->bids->last()->price + 1}}"> <button type="submit" class="btn btn-primary">Bid</button>
            @endif
          </form>
        </p>
        <p><span class="font-weight-bold">Buy now for: </span>{{$car->buynow_price}} <button type="submit" class="btn btn-primary">Buy now</button></p>
        @endif
    </div>
    <div class="col-12"><div class="car-desc">{{$car->description}}</div></div>
</div>


<div class="modal" id="photo_modal" tabindex="-1" role="dialog" aria-labelledby="photo_modal_longtitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <div id="CarPhotoControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="car-gallery"> 
        </div>
        <a class="carousel-control-prev" href="#CarPhotoControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#CarPhotoControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
    </div>
  </div>
</div>

@endsection


