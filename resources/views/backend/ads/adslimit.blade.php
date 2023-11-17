@extends('backend.layout.header')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="container">
        <form class="forms-sample mt-3" id="from" action="{{ route('adslimitup',  $limit->limits_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputUsername1">Set Ads Limit</label>
                <input type="text" class="form-control" id="cata_name" placeholder="Set Ads Limit" name="limit" value="{{ $limit->limit }}">
                @error('title')
                <p class="invalid-feedback d-block ">Title Is Required</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2" id="sub">Submit</button>
        </form>
    </div>
</div>

@endsection
