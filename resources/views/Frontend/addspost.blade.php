@extends('Frontend.layout.Head')
@section('content')
<div class="container">
    <form action="{{ route('adstore') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                            <option value="{{$row->loc_id}}" {{ old('ads_loc') == $row->loc_id ? 'selected' : '' }}>
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
                            <option value="{{$row->cata_id}}" {{ old('ads_cata') == $row->cata_id ? 'selected' : '' }}>
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
            <div class="top-f  d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-5">Post Title</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="title" name='title'
                        value="{{old('title')}}">
                    @error('title')
                    <p class="invalid-feedback d-block text-center">Title Is Required</p>
                    @enderror
                </div>

            </div>
            <label for="" class="text-center fw-bolder mt-3">Conditions</label>
            <div class="main d-flex justify-content-around align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="condtions" id="flexRadioDefault1" value="used">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Used
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="condtions" id="flexRadioDefault2" value="new">
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
                        value="orginal">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Original
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="authenticity" id="flexRadioDefault4"
                        value="refurbished">
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
                        value="{{old('brand')}}">
                </div>
            </div>
            @error('authenticity')
            <p class="invalid-feedback d-block text-center">Brand Is Required</p>
            @enderror
            <div class="top-f  d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-3">Model</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Model" name="model"
                        value="{{old('model')}}">
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
                      {{old('desc')}}
                    </textarea>
                </div>
            </div>
            @error('desc')
            <p class="invalid-feedback d-block text-center">Product Description Is Required</p>
            @enderror
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-3">Product Price</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Price" name="price">
                </div>
            </div>
            @error('price')
            <p class="invalid-feedback d-block text-center">Product Price Is Required</p>
            @enderror
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault"
                            name="nego">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Negotiable</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-floating d-flex justify-content-around align-items-center mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="mainphoto" class="form-label fw-bolder">Main Photo </label>
                        <input class="form-control" type="file" id="mainphoto" name="mainphoto">
                    </div>
                    @error('mainphoto')
                    <p class="invalid-feedback d-block text-center">Images Are Required and jpeg,png,jpg,gif,svg are
                        allowed </p>
                    @enderror
                </div>

            </div>
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formFile" class="form-label fw-bolder">Details Photos </label>
                        <input class="form-control" type="file" id="formFile" name="images[]" multiple>
                    </div>
                    @error('images[]')
                    <p class="invalid-feedback d-block text-center">Images Are Required and jpeg,png,jpg,gif,svg are
                        allowed </p>
                    @enderror
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
                                value="{{old('number')}}">
                            <input type="hidden" class="form-control" id="inputPassword" name="user_name"
                                value="{{ Auth::user()->username}}">
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
                    @if($membership==1)
                    <div class="1"> 
                    @if ($adsnum < 3)
                    You're a freemember Your Ads Limits 10 You Can Post {{ 10 - $adsnum }} More Ads </b></p>
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success px-5">Post ad</button>
                    </div>
                    @elseif($adsnum >= 3)
                    <div class="mt-3 text-end">
                        <a href="#" class="btn btn-success px-5 text-dark nav-link p-2" style="background-color: #ffc800">Limit Reach To Post More Ads Buy Membership</a>
                    </div>
                    @endif
                    </div>
                    @endif
                    @if($membership ==2)
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success px-5">Post ad</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </form>
</div>
@include('Frontend/layout/footer');
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function () {
        $('#search').select2();
        $('#cata').select2();
    });

</script>
@endsection
