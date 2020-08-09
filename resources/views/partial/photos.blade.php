<img id="test" class="car-gallery-photo" val="0" src="{{asset('storage/cars/'.$photos[0])}}" alt="Error">
@for($i=1; $i<count($photos); $i++)
    <img class="d-none" src="{{asset('storage/cars/'.$photos[$i])}}" val="{{$i}}" alt="Error">
@endfor
<p id="prevphoto"><</p>
<p id="nextphoto">></p>