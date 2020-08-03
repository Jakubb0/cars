@extends('layouts.app')

@section('content')
<h1>test</h1>
<button id="sign_up" class="btn btn-primary" data-toggle="modal" data-target="#sign_up_modal">Utwórz konto</button>
<button id="sign_in" class="btn btn-primary" data-toggle="modal" data-target="#sign_in_modal">Zaloguj</button>



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
                <label for="login">Login</label>
                    <input type="text" id="login" name="login" class="form-control">
                <label for="password">Hasło</label>
                    <input type="password" id="password" name="password" class="form-control">
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