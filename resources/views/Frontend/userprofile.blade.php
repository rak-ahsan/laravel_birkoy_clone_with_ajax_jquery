@extends('Frontend.layout.Head')
@section('content')
@include('backend.user.membership')
<div class="container shadow mt-5" style="background-color: #FFFFFF">
    <div class="row">
        <div class="col-md-4" style="border-right: 1px solid rgb(200, 200, 200)">
            <div class="card mt-3 mb-5 justify-content-center" style="width: 18rem;">
                <img src="{{ asset('img/user/' . $user->user_img) }}" alt="" srcset="" class="img-fluid"
                    style="border-radius: 5px">
                <div class="card-body">
                    <h4 class="card-title"><b>{{$user->name}}</b></h4>
                    <div class="card-subtitle mb-2 text-body-secondary">
                        @if ($user->membership == 2)
                        <img src=" {{ asset ('img/memberbadge.png') }}" alt="" srcset="" class="img-fluid"
                            style="width:80px">
                        @else
                        <img src=" {{ asset ('img/freemember.png') }}" alt="" srcset="" class="img-fluid"
                            style="width:80px">
                        @endif
                        <span><b>80% Positive Rating</b></span>
                    </div>
                    <div class="rating d-flex justify-content-around text-center">
                       <a href="#"><p class="btn btn-success">1</p></a> 
                       <a href="#"><p class="btn btn-danger">1</p></a> 
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Member Since : Jan 2023</li>
                    <li class="list-group-item">Phone Number : {{$user->number}}</li>
                    <li class="list-group-item">Email Address : {{$user->email}}</li>
                    <li class="list-group-item">Location: {{$user->loc_name}}</li>

                    @if (Auth::user() && Auth::user()->id == $user->id && Auth::user()->membership == 1)
                    <li class="list-group-item text-center">

                        @if ($mem !==null &&  $mem->user_name == Auth::user()->username)
                           <span>We've Recived Your Membership Request</span>
                        @else
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            style="background-color: #ffc800">
                            Buy Membership Now
                        </button>
                        @endif
                    </li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- mainpart -->
        <div class="col-md-8 p-3">
            <div class="d-flex">
                <p><b>Adds Posted By {{$user->name}} <br>
                        @if (Auth::user() && Auth::user()->id == $user->id && Auth::user()->membership == 1)
                        You're a freemember Your Ads Limits 10 You Can Post {{ 10 - $adsnum }} more Ads </b></p>
                @endif
            </div>
            <h5 class="text-center">Active Ads</h5>

            @foreach ($ads as $list )
            <div class="post">
                <a href="{{ url('productview/' . $list->ads_id) }}" class="nav-link">
                    <div class="card my-3">
                        <div class="row g-0 p-3">
                            <div class="col-md-4">
                                <img src="{{ asset('img/ads/' . $list->mainphoto) }}" class="img-fluid rounded-start"
                                    alt="..." style="height: 200px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{$list->title}}</h5>
                                    <p class="card-text"> {{$list->loc_name}} , {{$list->cata_name}}</p>
                                    <p class="card-text"><span style="color: #149777; font-size:20px ">Tk
                                            {{$list->price}}</span></p>
                                </div>
                                <p class="text-end px-4">@datetime($list->created_at)</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <!-- pending -->
            @if (Auth::user()->id == $user->id )
            <h5 class="text-center">Pending Ads</h5>
            @foreach ($pendingads as $list )
            <div class="post">
                <a href="{{ url('productview/' . $list->ads_id) }}" class="nav-link">
                    <div class="card my-3">
                        <div class="row g-0 p-3">
                            <div class="col-md-4">
                                <img src="{{ asset('img/ads/' . $list->mainphoto) }}" class="img-fluid rounded-start"
                                    alt="..." style="height: 200px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{$list->title}}</h5>
                                    <p class="card-text"> {{$list->loc_name}} , {{$list->cata_name}}</p>
                                    <p class="card-text"><span style="color: #149777; font-size:20px ">Tk
                                            {{$list->price}}</span></p>
                                </div>
                                <p class="text-end px-4">@datetime($list->created_at)</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
           
        </div>
    </div>
</div>

@include('Frontend/layout/footer');
@endsection
