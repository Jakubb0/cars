@extends("layouts.app")
@section("content")
<form action="{{route('cars.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
        <label for="brand">Brand</label>
        <input id="brand" name="brand" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input id="model" name="model" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="year">Year of production</label>
        <input id="year" name="year" type="year" class="form-control">
    </div>
    <div class="form-group">
        <label for="power">Engine Power (HP)</label>
        <input id="power" name="power" type="number" class="form-control" min="1">
    </div>
    <div class="form-group">
        <label for="litre">Displacement (cm3)</label>
        <input id="litre" name="litre" type="number" class="form-control" min="1">
    </div>
    <div class="form-group">
        <label for="gearbox">Gearbox</label>
        <select name="gearbox" id="gearbox" class="form-control">
            <option value="0">Manual</option>
            <option value="1">Automatic</option>
        </select>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input id="price" name="price" type="number" class="form-control">
    </div>
    <div class="form-group">
        <label for="buynow_price">Buy Now Price</label>
        <input id="buynow_price" name="buynow_price" type="number" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="photos">Photos</label>
        <input type="file" name="photos[]" id="photos" multiple>
        <div id="filesgallery"></div>
    </div>
    <button type="submit" class="btn btn-primary">Add car</button>
</form>
@endsection