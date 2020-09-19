@extends("layouts.app")
@section("content")
<form action="{{route('cars.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="brand">Brand</label>
            <input id="brand" name="brand" type="text" class="form-control" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="model">Model</label>
            <input id="model" name="model" type="text" class="form-control" required>
        </div>
        <div class="col-md-4 mb-3">
            <label for="year">Year of production</label>
            <input id="year" name="year" type="number" class="form-control" min="1900" max="{{date('Y')}}" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="power">Engine Power</label>
            <div class="input-group">
                <input id="power" name="power" type="number" class="form-control" min="1" required>
                <div class="input-group-append">
                    <div class="input-group-text">HP</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="litre">Displacement</label>
            <div class="input-group">
                <input id="litre" name="litre" type="number" class="form-control" min="50" required>
                <div class="input-group-append">
                    <div class="input-group-text">cm3</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="gearbox">Gearbox</label>
            <select name="gearbox" id="gearbox" class="form-control">
                <option value="0">Manual</option>
                <option value="1">Automatic</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="price">Price</label>
            <div class="input-group">
                <input id="price" name="price" type="number" class="form-control" required>
                <div class="input-group-append">
                    <div class="input-group-text">$</div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="buynow_price">Buy Now Price</label>
            <div class="input-group">
                <input id="buynow_price" name="buynow_price" type="number" class="form-control" required>
                <div class="input-group-append">
                    <div class="input-group-text">$</div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="photos">Photos</label>
        <input type="file" name="photos[]" id="photos" multiple>
        <div id="filesgallery"></div>
    </div>
    <button type="submit" class="btn btn-primary">Add car</button>
</form>
@endsection