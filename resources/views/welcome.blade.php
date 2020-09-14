@extends('layouts.app')
@section('content')
<div id="carouselCarsIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselCarsIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselCarsIndicators" data-slide-to="1"></li>
    <li data-target="#carouselCarsIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/cars/public/storage/cars/IMG_20190401_184323_18_08_2020_1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/cars/public/storage/cars/IMG_20190401_184323_18_08_2020_1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/cars/public/storage/cars/IMG_20190401_184323_18_08_2020_1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselCarsIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselCarsIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row mb-5 mt-5">
  <div class="col-12">
    <h1>Do you want to sell your car?</h1>
    <h5>Sign up for free!</h5>
    <a href="#" data-toggle="modal" data-target="#sign_up_modal" class="btn btn-primary">Sign up!</a>
  </div>
</div>

<div class="row mb-5 mt-5">
  <div class="col-12">
    <h1>Already have an account?</h1>
    <h5>Sign in!</h5>
    <a href="#" data-toggle="modal" data-target="#sign_in_modal" class="btn btn-primary">Sign in!</a>
  </div>
</div>


<!--Signup Modal -->
<div class="modal fade" id="sign_up_modal" tabindex="-1" role="dialog" aria-labelledby="sign_up_modal_longtitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sign_up_modal_title">Sign up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <form action="{{route('register')}}" method="POST">
            @csrf
                <label for="login">Login</label>
                    <input type="text" id="login" name="login" class="form-control">
                <label for="password">Password</label>
                <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Password must consist of at least 8 characters">
                  !
                </button>
                    <input type="password" id="password" name="password" class="form-control">
                <label for="email">E-Mail</label>
                    <input type="email" id="email" name="email" class="form-control">
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Sign up</button>
            </form>
      </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="sign_in_modal" tabindex="-1" role="dialog" aria-labelledby="sign_in_modal_longtitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sign_in_modal_title">Sign in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <form action="{{route('login')}}" method="POST">
            @csrf
                <input type="text" id="silogin" name="login" class="form-control" placeholder="Login:"><br>
                <input type="password" id="sipassword" name="password" class="form-control" placeholder="Password:">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection