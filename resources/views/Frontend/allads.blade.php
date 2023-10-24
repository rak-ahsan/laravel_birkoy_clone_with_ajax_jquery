@extends('Frontend.layout.Head')
@section('content')
<div class="container shadow" style="background-color: #FFFFFF">
  <div class="row mt-5 border-bottom ">
    <div class="part1 justify-content-center align-items-center d-flex mt-4 row">
      <div class="col-md-4">
        <p style="font-size: 15px" id="loc"> <i class="fa-solid fa-location-dot fa-xl" style="color: #149777;"></i> <b>Select Location</b></p>
      </div>
      <div class="col-md-4">
        <p style="font-size: 15px"> <i class="fa-solid fa-tag fa-rotate-90 fa-xl" style="color: #149777;"></i><b>Select Category</b></p>
      </div>
      <div class="col-md-4 d-sm-none d-md-block">
        <div class="search">
          <form class="d-flex align-items-center justify-content-center" role="search" action="3" method="GET">
            <input class="form-control me-2" type="search" placeholder="What Are You Looking For?" aria-label="Search" name="query" style="border-radius: 30px">
            <button type="submit" class="btn" style="background-color: transparent; border: none; margin-left: -80px;">
              <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: #000000; border-radius:20px"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4" style="border-right: 1px solid rgb(200, 200, 200)">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
        <li class="list-group-item"><a href="" class="nav-link">Mobiles </a></li>
      </ul>
    </div>
    <div class="col-md-8 p-3">
      <p><b>Buy, Sell, Rent or Find Anything in Bangladesh</b></p>
      @include('Frontend/layout/carosol')
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