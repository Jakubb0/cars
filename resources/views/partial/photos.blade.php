<div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('storage/cars/'.$photos[0])}}" alt="No photo">
</div>
@for($i=1; $i<count($photos); $i++)
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('storage/cars/'.$photos[$i])}}" alt="No photo">
    </div>
@endfor 




<!--
<img id="test" class="car-gallery-photo" val="0" src="{{asset('storage/cars/'.$photos[0])}}" alt="Error">
@for($i=1; $i<count($photos); $i++)
    <img class="d-none" src="{{asset('storage/cars/'.$photos[$i])}}" val="{{$i}}" alt="Error">
@endfor
<span id="prevphoto"><</span>
<span id="nextphoto">></span>