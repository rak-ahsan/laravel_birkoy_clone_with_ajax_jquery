@extends('Frontend.layout.Head')
@section('content')
<div class="container">
    <form action="">
        @csrf
        <div class="row">
            <div class="formdesign mt-4 p-3" style="background-color: #fff">
                <div class="top col-md-12 d-flex justify-content-between">
                    <div class="top-f col-md-4">
                        <b>Fill in the details</b>
                    </div>
                    <div class="top-f col-md-3 text-center">
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option selected>Please Select Location</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="top-f col-md-3 text-end">
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option selected>Please Select Catagories</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row" style="background-color: #fff">
        <div class="top-f  d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-5">Post Title</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="tital">
                </div>
            </div>
            <label for="" class="text-center fw-bolder mt-3">Conditions</label>
            <div class="main d-flex justify-content-around align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Used
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        New
                    </label>
                </div>
            </div>
            <label for="" class="text-center fw-bolder mt-5">Authenticity</label>
            <div class="main d-flex justify-content-around">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label" for="flexRadioDefault3">
                        Original
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                    <label class="form-check-label" for="flexRadioDefault4">
                        Refurbished
                    </label>
                </div>
            </div>
            <div class="top-f  d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-5">Brand</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Brand">
                </div>
            </div>
            <div class="top-f  d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-3">Model</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Model">
                </div>
            </div>
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-3">Product Description</label>
                    <textarea class="form-control" placeholder="Enter Description" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                </div>
            </div>

            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <label for="" class="text-end fw-bolder mt-3">Product Price</label>
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Price">
                </div>
            </div>
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Negotiable</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-floating d-flex justify-content-around align-items-center mb-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="formFile" class="form-label fw-bolder">Upload Photos</label>
                        <input class="form-control" type="file" id="formFile">
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
                            value="email@example.com">
                    </div>
                    <div class="">
                        <label for="" class="text-end fw-bolder mt-3">Email</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                            value="email@example.com">
                    </div>
                    <div class="">
                        <label for="" class="text-end fw-bolder mt-3">Number</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="mt-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            I have read and accept the Terms and Conditions </label>
                    </div>
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success px-5">Post ad</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@include('Frontend/layout/footer');
@endsection
