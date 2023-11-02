@extends('backend.layout.header')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="container">
        <form class="forms-sample mt-3" id="from" method="POST" action="/update/{{ $user->username }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="exampleInputUsername1">Name</label>
                <input type="text" class="form-control" id="cata_name" placeholder="Category Name" name="name"
                    value="{{ $user->name }}">
                @error('name')
                <p class="invalid-feedback d-block ">Title Is Required</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="text" class="form-control" id="cata_icon" placeholder="Category Icon" name="number"
                    value="{{ $user->number }}">
                @error('number')
                <p class="invalid-feedback d-block">Number Is Required</p>
                @enderror
            </div>
            @php
                $value = 1;
                $values = 2;
            @endphp
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select class="form-select" aria-label="Default select example" name="membership">
                    <option selected>Open this select menu</option>
                    <option value="1" {{ $value == $user->membership ? 'selected' : '' }}>Free</option>
                    <option value="2" {{ $values == $user->membership ? 'selected' : '' }}>Paid</option>
                </select>
                @error('membership')
                <p class="invalid-feedback d-block">ads_status Is Required</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2" id="sub">Submit</button>
        </form>
    </div>
</div>

@endsection
