@extends('Frontend.layout.Head')
@section('content')
<div class="container shadow" style="background-color: #FFFFFF" id="t">
    <div class="row mt-5 border-bottom ">
        <div class="part1 justify-content-center align-items-center d-flex mt-4 row">
            <div class="col-md-4 d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-location-dot fa-xl my-3"
                style="color: #149777;"></i>
                        <select class="form-select form-select-sm"  name='ads_loc'
                        id="location" style="border: 0px;   outline:0px;
                        ">
                        <option value=""><b>All Over Bangladesh</b></option>
                        @foreach ($location as $row)
                        <option value="{{$row->loc_id}}" {{ old('ads_loc') == $row->loc_id ? 'selected' : '' }}>
                            {{$row->loc_name}}</option>
                        @endforeach
                    </select>
            </div>
            <div class="col-md-4">
                <p style="font-size: 15px"> <i class="fa-solid fa-tag fa-rotate-90 fa-xl"
                        style="color: #149777;"></i><b>Select Category</b></p>
            </div>
            <div class="col-md-4 d-sm-none d-md-block mb-4">
                <div class="search">

                    <input class="form-control me-2" type="search" id="search" placeholder="What Are You Looking For?"
                        aria-label="Search" name="query" style="border-radius: 30px">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="border-right: 1px solid rgb(200, 200, 200)">
            <ul class="list-group list-group-flush">
                @foreach ($catagory as $list)
                <li class="list-group-item"><a href="{{ route('username',$list->cata_id) }}" class="nav-link"><i
                            class="{{ $list->cata_icon }}" style="margin-right:10px;"></i> {{$list->cata_name}} </a>
                </li>
                @endforeach
            </ul>
            {{ $catagory->links()}}
        </div>
        <div class="col-md-8 p-3" id="data">
            <p><b>Buy, Sell, Rent or Find Anything in Bangladesh</b></p>
            @include('Frontend/layout/carosol')
            @include('Frontend/layout/searchads')

        </div>
        <div class="mt-3">
            {{ $ads->links() }}
        </div>
    </div>
</div>
@include('Frontend/layout/footer');


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
<script>
   $(document).ready(function () {
    var originalContent = $('#data').html();
    $('#search').keyup(function (e) {
        let search = $('#search').val();
        console.log(search);

        if (search === '') {
            $('#data').html(originalContent);
        } else {
            $.ajax({
                type: "get",
                url: "{{ url('search') }}/" + search,
                success: function (res) {
                    if (res == 0) {
                        $('#data').html('<h1 style="color:red"> No Data Found </h1>');
                    } else {
                        $('#data').html(res);
                    }
                }
            });
        }
    });


// for location

    var originalContent = $('#data').html();
    $('#location').on('change', function (e) {
        let ads_loc = $('#location').val();
        if (ads_loc === '') {
            $('#data').html(originalContent);
        } else {
            $.ajax({
                type: "get",
                url: "{{ url('location') }}/" + ads_loc,
                success: function (res) {
                    console.log(res);
                    if (res == 0) {
                        $('#data').html('<h1 style="color:red"> No Data Found </h1>');
                    } else {
                        $('#data').html(res);
                    }
                }
            });
        }
    });
});



</script>
@endsection
