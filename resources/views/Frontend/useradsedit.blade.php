@extends('Frontend.layout.Head')
@section('content')
<div class="container">
    @if(Auth::user()->username == $ads->user_name)
    <form method="POST" enctype="multipart/form-data" action="{{ route('upads', ['ads_id' => $ads->ads_id]) }}">
        @csrf
        @method('put')
        <div class="row">
            <div class="formdesign mt-4 p-3" style="background-color: #fff">
                <div class="top col-md-12 d-flex justify-content-between">
                    <div class="top-f col-md-4">
                        <b>Fill in the details</b>
                    </div>
                    <div class="top-f col-md-3 text-center">
                        <select class="form-select form-select-sm" aria-label="Small select example" name='ads_loc'
                            id="search">
                            <option value="">Please Select Location</option>
                            @foreach ($location as $row)
                            <option value="{{$row->loc_id}}" {{$ads->ads_loc == $row->loc_id ? 'selected' : '' }}>
                                {{$row->loc_name}}</option>
                            @endforeach
                        </select>
                        @error('ads_loc')
                        <p class="invalid-feedback d-block">Location Is Requried</p>
                        @enderror
                    </div>
                    <div class="top-f col-md-3 text-center">
                        <select class="form-select form-select-sm text-start" aria-label="Small select example"
                            name='ads_cata' id="cata">
                            <option value="">Please Select Catagories</option>
                            @foreach ($catagory as $row)
                            <option value="{{$row->cata_id}}" {{ $ads->ads_cata == $row->cata_id ? 'selected' : '' }}>
                                {{$row->cata_name}}</option>
                            @endforeach
                        </select>
                        @error('ads_cata')
                        <p class="invalid-feedback d-block">Catagories Is Requried</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row" style="background-color: #fff">
            <div class="top-f  d-flex justify-content-around align-items-center">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-5">Product Availability</label>
                    <select class="form-select form-select-sm mt-3" aria-label="Small select example" name='availability'
                            id="search">
                            <option value="">Please Select Availability</option>
                            @foreach ($status as $row)
                            <option value="{{$row->status_id}}" {{$ads->availability == $row->status_id ? 'selected' : '' }}>
                                {{$row->status_name}}</option>
                            @endforeach
                        </select>
                        @error('availability')
                        <p class="invalid-feedback d-block">Availability Is Requried</p>
                        @enderror
                </div>

            </div>

            <div class="top-f  d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-5">Post Title</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="title" name='title'
                    value="{{ $ads->title }}">
                    @error('title')
                    <p class="invalid-feedback d-block text-center">Title Is Required</p>
                    @enderror
                </div>
            </div>
            <label for="" class="text-center fw-bolder mt-3">Conditions</label>
            <div class="main d-flex justify-content-around align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="condtions" id="flexRadioDefault1" value="used" {{$ads->condtions=='used' ? 'checked' : ''}}>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Used
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="condtions" id="flexRadioDefault2" value="new" {{$ads->condtions=='new' ? 'checked' : ''}}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        New
                    </label>
                </div>
            </div>
            @error('condtions')
            <p class="invalid-feedback d-block text-center">{{ $message }}</p>
            @enderror
            <label for="" class="text-center fw-bolder mt-5">Authenticity</label>
            <div class="main d-flex justify-content-around">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="authenticity" id="flexRadioDefault3"
                        value="orginal" {{$ads->authenticity=='orginal' ? 'checked' : ''}}>
                    <label class="form-check-label" for="flexRadioDefault3">
                        Original
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="authenticity" id="flexRadioDefault4"
                        value="refurbished" {{$ads->authenticity=='refurbished' ? 'checked' : ''}}>
                    <label class="form-check-label" for="flexRadioDefault4">
                        Refurbished
                    </label>
                </div>
            </div>
            @error('authenticity')
            <p class="invalid-feedback d-block text-center">Authenticity Is Required</p>
            @enderror
            <div class="top-f  d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-5">Brand</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Brand" name="brand"
                        value="{{$ads->brand}}">
                </div>
            </div>
            @error('authenticity')
            <p class="invalid-feedback d-block text-center">Brand Is Required</p>
            @enderror
            <div class="top-f  d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-3">Model</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Model" name="model"
                        value="{{$ads->model}}">
                </div>
            </div>
            @error('model')
            <p class="invalid-feedback d-block text-center">Model Is Required</p>
            @enderror
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-3">Product Description</label>
                    <textarea class="form-control" placeholder="Enter Description" id="floatingTextarea2"
                        style="height: 100px" name="desc">
                      {{trim($ads->desc)}}
                    </textarea>
                </div>
            </div>
            @error('desc')
            <p class="invalid-feedback d-block text-center">Product Description Is Required</p>
            @enderror
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-3">Product Price</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Price" name="price" value="{{$ads->price}}">
                </div>
            </div>
            @error('price')
            <p class="invalid-feedback d-block text-center">Product Price Is Required</p>
            @enderror
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                            name="nego" {{$ads->nego=='on' ? 'checked' : ''}}>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Negotiable</label>
                    </div>
                </div>
            </div>
            <hr>
            
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <h6>Contact details</h6>
                    <div class="">
                        <label for="" class="text-end fw-bolder mt-3">Name</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                            value="{{ Auth::user()->name}}">
                    </div>
                    <div class="">
                        <label for="" class="text-end fw-bolder mt-3">Email</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                            value="{{ Auth::user()->email}}">
                    </div>
                    <div class="">
                        <label for="" class="text-end fw-bolder mt-3">Number</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword" name="pos_number"
                                value="{{$ads->pos_number}}">
                            <input type="hidden" class="form-control" id="inputPassword" name="user_name"
                                value="{{ Auth::user()->username}}">
                            <input type="hidden" value="3" name="ads_status">
                        </div>
                    </div>
                    @error('pos_number')
                    <p class="invalid-feedback d-block text-center">Number Is Required</p>
                    @enderror
                    <div class="mt-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            I have read and accept the Terms and Conditions </label>
                    </div>
                    
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success px-5">Update ad</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @else
    <span>Access Dinied</span>
    @endif
</div>
@endsection


