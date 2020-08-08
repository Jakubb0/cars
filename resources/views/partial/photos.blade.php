@extends('layouts.app')
@section("content")
<div class="" id="sign_in_modal" tabindex="-1" role="dialog" aria-labelledby="sign_in_modal_longtitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sign_in_modal_title">Photos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <img id="test" src="{{asset('storage/cars/'.$photos[0])}}" style="width:200px; height:200px;" alt="Error">
        @for($i=1; $i<count($photos); $i++)
            <img src="{{asset('storage/cars/'.$photos[$i])}}" style="width:200px; height:200px; display: none" alt="Error">
        @endfor
        <p id="prevphoto"><</p>
        <p id="nextphoto">></p>
      </div>
    </div>
  </div>
</div>
@endsection