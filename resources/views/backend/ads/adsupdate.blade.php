@extends('backend.layout.header')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="container">
        <form class="forms-sample mt-3" id="from" action="{{ route('upads', ['ads_id' => $ads->ads_id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="exampleInputUsername1">Ads Title</label>
                <input type="text" class="form-control" id="cata_name" placeholder="Category Name" name="title"
                    value="{{ $ads->title }}">
                @error('title')
                <p class="invalid-feedback d-block ">Title Is Required</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ads Phone Number</label>
                <input type="text" class="form-control" id="cata_icon" placeholder="Category Icon" name="pos_number"
                    value="{{ $ads->pos_number }}">
                @error('pos_number')
                <p class="invalid-feedback d-block">Number Is Required</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select class="form-select" aria-label="Default select example" name="ads_status" style="font-size: 0.8125rem">
                    <option selected>Open this select menu</option>
                    @foreach ($status as $list)
                    <option value="{{$list->status_id}}" {{ $list->status_id == $ads->ads_status ? 'selected' : '' }}>
                        {{ $list->status_name}}</option>
                    @endforeach
                </select>
                @error('ads_status')
                <p class="invalid-feedback d-block">ads_status Is Required</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2" id="sub">Submit</button>
        </form>
    </div>
</div>

@endsection
