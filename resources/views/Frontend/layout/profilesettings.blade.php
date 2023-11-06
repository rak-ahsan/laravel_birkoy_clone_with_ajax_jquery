@extends('Frontend.layout.Head')
@section('content')
<div class="container shadow mt-5" style="background-color: #FFFFFF">
    <div class="row">
        <div class="col-md-2 p-3" style="border-right: 1px solid rgb(200, 200, 200)">
        <a href="{{route('userads')}}" class="nav-link">My Ads</a>

        </div>
        <!-- mainpart -->
        <div class="col-md-10 p-3">
            @yield('profile')
        </div>
    </div>
</div>

@include('Frontend/layout/footer');
@endsection
