@extends('layouts.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<img src="" alt="">

<div class="row">
  <div class="col-12" id="block1">
    <h1>Looking for a car?</h1>
    <h5>We got it!</h5>
    <a href="{{route('cars.index')}}" class="btn btn-primary">Click here!</a>
  </div>
</div>

<!--Signup Modal -->
<div class="modal fade" id="sign_up_modal" tabindex="-1" role="dialog" aria-labelledby="sign_up_modal_longtitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sign_up_modal_title">Utwórz konto</h5>
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
                <label for="password">Hasło</label>
                    <input type="password" id="password" name="password" class="form-control">
                <label for="email">Adres E-Mail</label>
                    <input type="email" id="email" name="email" class="form-control">
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Anuluj</button>
            <button type="submit" class="btn btn-primary">Zarejestruj</button>
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
        <h5 class="modal-title" id="sign_in_modal_title">Utwórz konto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <form action="{{route('login')}}" method="POST">
            @csrf
                <label for="silogin">Login</label>
                    <input type="text" id="silogin" name="login" class="form-control">
                <label for="sipassword">Hasło</label>
                    <input type="password" id="sipassword" name="password" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Anuluj</button>
        <button type="submit" class="btn btn-primary">Zaloguj</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection