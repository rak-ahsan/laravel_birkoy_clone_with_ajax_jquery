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
        <div class="row">
            <div class="main d-flex justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Default radio
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Default checked radio
                    </label>
                  </div>
            </div>
        </div>
    </form> 
</div>
@include('Frontend/layout/footer');
@endsection
