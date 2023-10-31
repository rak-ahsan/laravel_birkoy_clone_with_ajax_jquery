@extends('Frontend.layout.Head')
@section('content')
<div class="container shadow mt-5" style="background-color: #FFFFFF">
    <div class="row">
        <div class="col-md-4" style="border-right: 1px solid rgb(200, 200, 200)">
            <div class="card mt-3 mb-5 justify-content-center" style="width: 18rem;">
                <img src="{{ asset('img/user/' . $user->user_img) }}" alt="" srcset="" class="img-fluid"
                    style="border-radius: 5px">
                <div class="card-body">
                    <h4 class="card-title"><b>{{$user->name}}</b></h4>
                    <div class="card-subtitle mb-2 text-body-secondary">
                        <img src=" {{ asset ('img/memberbadge.png') }}" alt="" srcset="" class="img-fluid"
                            style="width:80px">
                        <span><b>80% Positive Rating</b></span>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Member Since : Jan 2023</li>
                    <li class="list-group-item">Phone Number : {{$user->number}}</li>
                    <li class="list-group-item">Email Address : {{$user->email}}</li>
                    <li class="list-group-item">Location: {{$user->location}}</li>
                </ul>
            </div>
        </div>
        <!-- mainpart -->
        <div class="col-md-8 p-3">
            <p><b>Adds Posted By {{$user->name}}</b></p>
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
           
        </div>

    </div>
</div>

@include('Frontend/layout/footer');
@endsection
