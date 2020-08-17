@extends("layouts.app")
@section("content")
<form action="{{route('cars.update', $car->id)}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
        <label for="brand">Brand</label>
        <input id="brand" name="brand" type="text" class="form-control" placeholder="{{$car->brand}}">
    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input id="model" name="model" type="text" class="form-control" placeholder="{{$car->model}}">
    </div>
    <div class="form-group">
        <label for="year">Year of production</label>
        <input id="year" name="year" type="year" class="form-control" placeholder="{{$car->year}}">
    </div>
    <div class="form-group">
        <label for="power">Engine Power (HP)</label>
        <input id="power" name="power" type="number" class="form-control" min="1" placeholder="{{$car->power}}">
    </div>
    <div class="form-group">
        <label for="litre">Displacement (cm3)</label>
        <input id="litre" name="litre" type="number" class="form-control" min="1" placeholder="{{$car->litre}}">
    </div>
    <div class="form-group">
        <label for="gearbox">Gearbox</label>
        <select name="gearbox" id="gearbox" class="form-control">
            <option value="0">Manual</option>
            <option value="1">Automatic</option>
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="{{$car->description}}"></textarea>
    </div>
    <a href="javascript:history.back()" class="btn btn-danger">Cancel</a>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection