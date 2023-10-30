@extends('Frontend.layout.Head')
@section('content')

<div class="main" style="background-color: #149777;">
    <div class="container " style="height: 200px">
        <div class="row d-flex justify-content-center align-items-center p-5 text-center">
            <div class="top mb-3">
                <span class="text"><i class="fa-solid fa-location-dot mx-2" style="color: #ffffff;"></i> All Over
                    Bangladesh</span>
            </div>
            <div class="search">
                <form class="d-flex  align-items-center" role="search">
                    <input class="form-control me-2 p-3 " type="search" placeholder="What Are You Looking For?"
                        aria-label="Search" style="border-radius: 30px">
                    <i class="fa-solid fa-magnifying-glass fa-2xl p-3"
                        style="color: #000000; margin-left:-80px;border-radius:20px"></i>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        <b>Browse items by category</b>
    </div>
    <div class="row mt-5">
        @foreach ($cata as $row)

        <div class="col-md-3 col-sm-6  d-flex justify-content-center align-items-center mb-5">
            <div class="part1 col-md-3">
                <i class="{{ $row->cata_icon }}" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3 col-md-9">
                <a href=" {{ route('username',$row->cata_username) }}" class="nav-link">
                    {{$row->cata_name}} <br>
                    108,245 ads
                </a>
            </div>
        </div>

        @endforeach

        {{-- <div class="col-md-3 col-sm-6  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
        <div class="col-md-3 col-sm-6 d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
        <div class="col-md-3 col-sm-6 d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-3  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
        <div class="col-md-3  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
        <div class="col-md-3  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
        <div class="col-md-3  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-3  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
        <div class="col-md-3  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
        <div class="col-md-3  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
        <div class="col-md-3  d-flex justify-content-center align-items-center">
            <div class="part1">
                <i class="fa-solid fa-mobile-retro fa-2xl" style="color: #117463; font-size:40px"></i>
            </div>
            <div class="t1 px-3">
                Mobiles <br>
                108,245 ads
            </div>
        </div>
    </div> --}}
    </div>

    <div class="container">
        <div class="row">
            <div class="part1 col-md-6 d-flex shadow mt-5 p-3">
                <div class="col-md-4 ">
                    <img src="{{ 'img/bagmoney.png' }}" style="height: 150px; width:auto;">
                </div>
                <div class="col-md-8 mt-3">
                    <b>Start making money!</b> <br>

                    Do you have something to sell?
                    Post your first ad and start making money! <br>

                    <a href="#" class="btn btn-warning mt-3" style="width: 250px ;border-radius:20px"><i
                            class="fa-solid fa-plus" style="color: #673500;"></i> Post your ad for free</a>
                </div>

            </div>

            <div class="part1 col-md-6 d-flex shadow mt-5" style="border-left:1px solid rgb(133, 130, 130)">
                <div class="row p-4">
                    <img src="{{ 'img/jobs.png' }}" style="width:186px;margin-top:10px ">

                    <div class="mt-0">
                        Looking to hire or get hired in Bangladesh ? <br>
                        Get access to 800k+ CVs or browse through 800+ job vacancies!
                    </div>

                    <div class="col-8">
                        <a href="#" class="btn btn-warning  mt-2 "
                            style="width: 250px;background-color:#0074BA; border-radius:20px;color:white"> Explore more
                            <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="container mb-3 mt-5">
        <div class="row">
            <b class="mb-3">Quick links</b>
            <div class="col-md-3 p-3" style="background-color:#D3D3D3;">
                <b>63,905 ads in Electronics</b>
                <span>Desktop Computers | Laptops | TVs | Cameras, Camcorders & Accessories | Audio & Sound
                    Systems</span>
            </div>
            <div class="col-md-3 p-3" style="background-color:#D3D3D3">
                <b>63,905 ads in Electronics</b>
                <span>Desktop Computers | Laptops | TVs | Cameras, Camcorders & Accessories | Audio & Sound
                    Systems</span>
            </div>
            <div class="col-md-3 p-3" style="background-color:#D3D3D3">
                <b>63,905 ads in Electronics</b>
                <span>Desktop Computers | Laptops | TVs | Cameras, Camcorders & Accessories | Audio & Sound
                    Systems</span>
            </div>
            <div class="col-md-3 p-3" style="background-color:#D3D3D3">
                <b>63,905 ads in Electronics</b>
                <span>Desktop Computers | Laptops | TVs | Cameras, Camcorders & Accessories | Audio & Sound
                    Systems</span>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="mainpart">
                <b style="font-size:18px">About Bikroy, The Largest Marketplace in Bangladesh!</b><br>
                <span>
                    Bikroy is a platform on which you can buy and sell almost everything! We help people buy and sell
                    vehicles, find properties, get jobs or recruit employees, buy and sell mobile phones, purchase
                    electronic products, and much more. With more than 50 categories our solutions are built to be safe,
                    smart, and convenient for our customers.
                </span>
            </div>
            <span class="collapsible" style="margin:10px 0">See More <i class="fa-solid fa-arrow-right"
                    style="color: black;"></i></span>
            <div class="mainpart" style="display:none">
                <b style="font-size:16px">Buy, Sell, Rent, or Find Jobs in Bangladesh</b><br>
                <span>
                    Every month, hundreds of millions of people use Bikroy to find and sell mobiles, musical
                    instruments,
                    cars, houses, jobs, and more through classified ads. To sell new items or sell used items quickly,
                    Bikroy offers Ad Promotion features.
                    <br>
                    Bikroy has an extensive collection of new and used goods, making it easier for users to quickly buy
                    new
                    items or buy used items at their desired location. To buy online, users easily can reach their
                    desired
                    products through filtering options.
                    <br>
                    For businesses, Bikroy has introduced the ‘Membership’ service, which helps them expand their
                    businesses
                    online. Members will have their virtual shop with a Bikroy URL with free promotions of their goods.
                    With
                    different membership categories, businesses can flourish as verified members and authorized dealers.
                    <br>
                    With millions of unique monthly visitors, thousands of interested buyers, and thousands of active
                    dealers on our platform, Bikroy is the Largest Marketplace in Bangladesh.
                </span>
                <br>
                <b style="font-size:16px">Benefits of Trading at Bikroy</b><br>
                <span>
                    At Bikroy, we make it so easy to connect people to buy, sell or rent goods and services as other
                    classified sites.

                    Fast & Easy Experience: Navigated buying and selling experience in Bangladesh which is simpler,
                    faster,
                    and easier. Shop and sell on the go and get your desired products in just a few clicks.
                    Post Ads Free: As a free classified website, we offer free ad posting features in many categories
                    for
                    the convenience of the users based on their locations.
                    Safe & Secure Shopping: We have listed our verified members and authorized dealers to create a safe
                    shopping experience for our users.
                </span>
            </div>
        </div>
    </div>
    @include('Frontend/layout/footer');



    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }

    </script>
    @endsection
