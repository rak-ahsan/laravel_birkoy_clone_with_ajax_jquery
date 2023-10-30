@extends('Frontend.layout.Head')
@section('content')
<div class="container shadow" style="background-color: #FFFFFF">
    <div class="row mt-5 border-bottom ">
        <div class="part1 justify-content-center align-items-center d-flex mt-4 row">
            <div class="col-md-4">
                <p style="font-size: 15px" id="loc"> <i class="fa-solid fa-location-dot fa-xl"
                        style="color: #149777;"></i> <b>Select Location</b></p>
            </div>
            <div class="col-md-4">
                <p style="font-size: 15px"> <i class="fa-solid fa-tag fa-rotate-90 fa-xl"
                        style="color: #149777;"></i><b>Select Category</b></p>
            </div>
            <div class="col-md-4 d-sm-none d-md-block">
                <div class="search">
                    <form class="d-flex align-items-center justify-content-center" role="search" action="3"
                        method="GET">
                        <input class="form-control me-2" type="search" placeholder="What Are You Looking For?"
                            aria-label="Search" name="query" style="border-radius: 30px">
                        <button type="submit" class="btn"
                            style="background-color: transparent; border: none; margin-left: -80px;">
                            <i class="fa-solid fa-magnifying-glass fa-2xl"
                                style="color: #000000; border-radius:20px"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="border-right: 1px solid rgb(200, 200, 200)">
            <ul class="list-group list-group-flush">
                @foreach ($catagory as $list)
                <li class="list-group-item"><a href="{{ route('username',$list->cata_username) }}" class="nav-link"><i
                            class="{{ $list->cata_icon }}" style="margin-right:10px;"></i> {{$list->cata_name}} </a>
                </li>
                @endforeach
            </ul>
            {{ $catagory->links()}}
        </div>
        <div class="col-md-8 p-3">
        </div>
        </div>

        @include('Frontend/layout/footer');
        @endsection
