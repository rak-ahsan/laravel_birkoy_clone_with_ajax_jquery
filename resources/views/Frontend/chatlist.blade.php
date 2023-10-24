@extends('Frontend.layout.Head')
@section('content')
<div class="container mt-5 shadow" style="background-color:#fff;">
    <div class="row">
        <div class="col-md-4 p-3">
            <div class="col">
                <b>My Chats</b>
            </div>
            <a href="" class="nav-link">
                <div class="col d-flex mt-3">
                    <div class="img col-md-2">
                        <img src="{{ asset('img/p.jpg') }}" style="height: 50px; border-radius:50%">
                    </div>
                    <div class="des px-2">
                        <b>Vivo Y22s 6/128gb Full Box (Used)</b>
                    </div>
                </div>
            </a>
            <div class="col d-flex mt-3">
                <div class="img col-md-2">
                    <img src="{{ asset('img/p.jpg') }}" style="height: 50px; border-radius:50%">
                </div>
                <div class="des px-2">
                    <b>Vivo Y22s 6/128gb Full Box (Used)</b>
                </div>
            </div>
            <div class="col d-flex mt-3">
                <div class="img col-md-2">
                    <img src="{{ asset('img/p.jpg') }}" style="height: 50px; border-radius:50%">
                </div>
                <div class="des px-2">
                    <b>Vivo Y22s 6/128gb Full Box (Used)</b>
                </div>
            </div>
        </div>
        <div class="col-md-8">b</div>
    </div>
</div>
@include('Frontend/layout/footer');
@endsection