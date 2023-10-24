@extends('Frontend.layout.Head')
@section('content')
<div class="container shadow mt-5" style="background-color: #FFFFFF">
<!-- 
    <div class="row">
        <div class="banner col-md-12">
            <img src=" {{ asset ('img/banner.jpg') }}" alt="" srcset="" class="img-fluid">
        </div>
    </div> -->
    <div class="row">
        <!-- sidebar -->
        
        <div class="col-md-4" style="border-right: 1px solid rgb(200, 200, 200)">
        <div class="dp col-md-4">
            <img src="{{ asset('img/dp.jpg') }}" alt="" srcset="" class="img-thumbnail">
        </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><h2>{{ Auth::user()->name }} </h2></li>
                <li class="list-group-item"><h5>01775566772</h5></li>
                <li class="list-group-item"><h5>Dhaka</h5></li>
                <li class="list-group-item"><h5>{{ Auth::user()->email }}</h5></li>
            </ul>
        </div>
        <!-- mainpart -->
        <div class="col-md-8 p-3">
            <p><b>Adds Posted By Rakib</b></p>
            <div class="post">
                <a href="{{'productview'}}" class="nav-link">
                    <div class="card my-3">
                        <div class="row g-0 p-3">
                            <div class="col-md-4">
                                <img src="{{'img/laptop.jpg'}}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Emergency PC sell post</h5>
                                    <p class="card-text"> Kushtia, Khulna Division</p>
                                    <p class="card-text"><small class="text-body-secondary">2500</small></p>
                                </div>
                                <p class="text-end px-4">10 ministes ago</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="card my-3">
                    <div class="row g-0 p-3">
                        <div class="col-md-4">
                            <img src="{{'img/laptop.jpg'}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Emergency PC sell post</h5>
                                <p class="card-text"> Kushtia, Khulna Division</p>
                                <p class="card-text"><small class="text-body-secondary">2500</small></p>
                            </div>
                            <p class="text-end px-4">10 ministes ago</p>
                        </div>
                    </div>
                </div>
                <div class="card my-3">
                    <div class="row g-0 p-3">
                        <div class="col-md-4">
                            <img src="{{'img/laptop.jpg'}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Emergency PC sell post</h5>
                                <p class="card-text"> Kushtia, Khulna Division</p>
                                <p class="card-text"><small class="text-body-secondary">2500</small></p>
                            </div>
                            <p class="text-end px-4">10 ministes ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('Frontend/layout/footer');
@endsection