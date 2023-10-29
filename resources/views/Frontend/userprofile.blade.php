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
            {{-- <div class="dp col-md-8 mt-3 ">
                <img src="{{ asset('img/dp.jpg') }}" alt="" srcset="" class="img-fluid">
        </div>
        <div class="card mt-4" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title"><b>Rakib Ahsan</b></h4>
                <div class="card-subtitle mb-2 text-body-secondary">
                    <img src=" {{ asset ('img/memberbadge.png') }}" alt="" srcset="" class="img-fluid"
                        style="width:80px">
                </div>
                <p class="card-text" style="font-size: 18px">Member Since : 10/01/23</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div> --}}
        <div class="card mt-3 mb-5 justify-content-center" style="width: 18rem;">
            <img src="{{ asset('img/dp.jpg') }}" alt="" srcset="" class="img-fluid" style="border-radius: 5px">
            <div class="card-body">
                <h4 class="card-title"><b>Rakib Ahsan</b></h4>
                <div class="card-subtitle mb-2 text-body-secondary">
                    <img src=" {{ asset ('img/memberbadge.png') }}" alt="" srcset="" class="img-fluid"
                        style="width:80px">
                    <span><b>80% Positive Rating</b></span>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Member Since : Jan 2023</li>
                <li class="list-group-item">Phone Number : 01775566772</li>
                <li class="list-group-item">Email Address : Demo@gmail.com</li>
                <li class="list-group-item">Location: Dhaka</li>
            </ul>
        </div>
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
