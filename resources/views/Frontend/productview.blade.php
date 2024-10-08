@extends('Frontend.layout.Head')
@section('content')
@if($singelproduct)
<div class="container" style="background-color: #fff;">
    <div class="row mt-3">
        <div class="porduct_title col-md-6 mt-3">
            <h1 class="fw-bolder fs-3">{{$singelproduct->title}}</h1>
            <span>Posted on {{$singelproduct->created_at}}, {{$singelproduct->loc_name}}</span>
        </div>
        <div class="porduct_title col-md-6 text-end mt-3">
            <div class="dropdown">
                <span><i class="fa-solid fa-share-nodes dropbtn" style="color: #ababab;"></i> share</span>
                <div class="dropdown">
                    <div class="dropdown-content text-center ">
                        <a href="#"><i class="fa-brands fa-facebook px-3 fa-xl"></i>Facebook</a>
                        <a href="#"><i class="fa-brands fa-whatsapp px-3 fa-xl" style="color: #0b9a09;"></i>WhatsApp</a>
                        <a href="#"><i class="fa-brands fa-twitter fa-xl px-3" style="color: #4074ce;"></i>&nbsp Twitter
                            &nbsp</a>
                    </div>
                </div>
            </div>
            <span class="px-3"><i class="fa-solid fa-star" style="color: #ababab;"></i> Save ad</span>
        </div>
    </div>
    <div class="row py-3 shadow-5">
        <div class="col-md-8 scrollbar-auto">
            @if($img)
            <div class="col-12 mb-1">
                <div class="lightbox">
                    <img src="{{ asset('img/ads/'.$img[0]->imagename) }}" alt="Gallery image 1"
                        class="ecommerce-gallery-main-img active w-100" id="fullimg" style="height: 800px" />
                </div>
            </div>
            <div class="d-flex">
                @foreach($img as $row)
                <div class="col-3 mt-1" style="padding-right:5px">
                    <img src="{{ asset('img/ads/'.$row->imagename) }}" style="height: 200px" alt="Gallery image"
                        class="active w-100" onclick="imgchnage(this)" />
                </div>
                @endforeach
            </div>
            @else
                <div class="col-12 mb-1">
                    <div class="lightbox">
                        <img src="{{ asset('img/ads/'.$singelproduct->mainphoto) }}" alt="Gallery image 1"
                            class="ecommerce-gallery-main-img active w-100" id="fullimg" style="height: 800px" />
                    </div>
                </div> 
            @endif

            <div class="row ">
                <div class="price-part justify-content-start align-items-center d-flex mt-3">
                    <span class="text-p">Tk {{$singelproduct->price}}</span>
                    @if($singelproduct->nego == 'on') 
                    <span class="px-3">Negotiable</span>
                    @else
                    <span class="px-3">Fixed</span>
                    @endif
                    <div class="like">
                        @if ($liker!== null && $liker->user_id == Auth::user()->id)
                        <a href="{{route('dlike',auth()->user()->id)}}" class="nav-link" onclick="dlike(event)">
                            <i class="fa-solid fa-heart fa-xl" style="color: #ff0000;"></i>
                             <span id="dlike">{{$like->count()}} </span>
                        </a>
                        @else
                        <a href="{{route('like',$singelproduct->ads_id)}}" class="nav-link">
                            <i class="fa-regular fa-heart fa-xl" ></i>
                            <span id="like">{{$like->count()}}</span>
                        </a>
                        @endif
                        
{{-- 
                        <a href="" class="nav-link" onclick="toggleLike(event)">
                            <i class="fa-solid fa-heart fa-xl" style="color: #ff0000;"></i>
                            <span id="like">50</span>
                        </a> --}}
                        
                    </div>
                </div>

                <div class="model d-flex justify-content-between">
                    <div class="model1">
                        <span>Condition: {{$singelproduct->condtions}}</span><br>
                        <span>Model: {{$singelproduct->model}}</span>
                    </div>
                    <div class="model2">
                        <span>Brand: {{$singelproduct->brand}}</span><br>
                        <span>Authenticity: {{$singelproduct->authenticity}}</span>
                    </div>
                </div>

                <div class="features mt-3">
                    <p>{{$singelproduct->desc}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">For sale by <b>{{$singelproduct->name}}</b></li>
                    <li onclick="number()" class="list-group-item">
                        <i class="fa-solid fa-phone"
                            style="background-color: #0b9a09; padding:5px; border-radius:20px;color:#fff"></i> <span
                            id="cngnumber"> Call :0177xxxxxx <br>
                            <span class="px-4">please click to see Number</span>
                            <span id="rakib" class="d-none">{{$singelproduct->number}}</span>
                        </span>
                    </li>
                    @if (Auth::user()->username !==$singelproduct->user_name)
                        <li class="list-group-item" data-bs-toggle="modal" data-bs-target="#exampleModal"><a
                            class="nav-link active" aria-current="page" href="#"> <i class="fa-solid fa-comments fa-xl "
                                style="color: #0b9a09; padding:5px"></i>Chats</a>
                    </li>
                    @endif
                    
                    <li class="list-group-item"><a class="nav-link active" aria-current="page"
                            href=" {{ route('userprofile',$singelproduct->username) }}"> <i
                                class="fa-solid fa-user fa-xl" style="color: #0b9a09; padding:5px"></i>User Profile</a>
                    </li>
                </ul>
            </div>
            <div class="privacy card-body mt-3 border border-info">
                <div class="tips p-2">
                    <i class="fa-solid fa-shield-halved fa-xl"></i><span style="margin-left: 10px;"> Safety tips </span>
                    <ul class="mt-3">
                        <li>
                            <p>Meet in a safe & public place</p>
                        </li>
                        <li>
                            <p>Don’t pay in advance</p>
                        </li>
                        <a href="#" class="nav-link text-info">See all safety tips</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="nav-link active btn text-dark p-2" aria-current="page" href="{{url('post-add')}}"
                    style="background-color: #ffc800"><b><i class="fa-solid fa-arrow-down fa-rotate-180"></i> POST YOUR
                        AD</b></a>
            </div>
            <div class="col-md-3 mb-3">
                <a class="nav-link active btn text-dark p-2" aria-current="page" href="#" data-bs-toggle="modal"
                    data-bs-target="#exampleModals"><i class="fa-solid fa-ban fa-xl px-2"></i>Report this ad</a>
            </div>
        </div>
    </div>
</div>

<div class="container shadow mt-5 " style="background-color: #fff; max-height:500px">
    <div class="row">
        <div class="col-md-6 mt-3 mb-2">
            <form class="d-flex" action="{{route('comment',$singelproduct->ads_id)}}">
                <input class="form-control me-2" type="search" placeholder="Post Your Comment" aria-label="Search" name="comment">
                <button class="btn btn-outline-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
    @foreach ($comment as $list )
    <div class="row mt-3 align-items-center">
        <div class="pic col-md-1 mx-1">
            <img src="{{ asset('img/user/' . $list->user_img) }}" alt="" style="height: 50px; border-radius: 50px;">
        </div>
        <div class="comment col-md-4 mb-2" style="background-color: #F0F2F5; border-radius:20px">
            <span><b>{{$list->name}}</b></span> <br>
            <span>{{$list->comment}}</span> 
            
            @if ($list!== null && $list->user_id == Auth::user()->id)
                <a href="{{route('dcomment', $list->comment_id)}}"><i class="fa-solid fa-trash mx-4" style="color: red;"></i></a><br>
            @endif
        </div>
    </div>  
    @endforeach
    
</div>
@include('Frontend.chat')

<script>
    // forimage chnage
    function imgchnage(small) {
        var fullimg = document.getElementById('fullimg');
        fullimg.src = small.src
    }

    // for number chnage

    function number() {
        document.getElementById('cngnumber').innerHTML = document.getElementById('rakib').innerHTML;

    }

    // function like(e) {

    //     e.preventDefault();
    //     var like = document.getElementById('like');
    //     var likes = parseInt(like.innerHTML) + 1;
    //     like.innerHTML = likes;
    // }

    // function dlike(e) {
    //     e.preventDefault();
    //     var dlike = document.getElementById('dlike');
    //     var likes = parseInt(dlike.innerHTML) - 1;
    //     dlike.innerHTML = likes;
    // }

    var liked = false; // Initial state is unliked

// function toggleLike(e) {
//     e.preventDefault();
//     var likeCount = document.getElementById('like');

//     if (liked) {
//         // If already liked, double-click unlikes it
//         var likes = parseInt(likeCount.innerHTML) - 1;
//         likeCount.innerHTML = likes;
//     } else {
//         // If not liked, single-click likes it
//         var likes = parseInt(likeCount.innerHTML) + 1;
//         likeCount.innerHTML = likes;
//     }

//     liked = !liked; // Toggle the liked state
// }


</script>

<div class="modal fade" id="exampleModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Report This Ads</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('report')}}" method="post" id="from">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">please Describe In Details</label>
                        <textarea class="form-control" id="reports" rows="3" name="reports"></textarea>
                        <span id="msg" class="text-danger"></span>
                        <input type="hidden" value="{{$singelproduct->ads_id}}" name="ads_id">
                    </div>
                    <input type="submit" value="Report" id="sub" style="background-color: #ffc800" class="btn">
                </form>
            </div>
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
        $("#sub").click(function (e) {
            e.preventDefault();
            var form = $("#from")[0];
            var formData = new FormData(form);
            var reports = $("#reports").val();
            if (reports == '' || reports.length>500) {
                $('#msg').html('Please explain in Details In 500 Charectars');
                return;
            } else {
                $('#msg').html('');
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route('report') }}',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#exampleModal').modal('hide')
                        $('#from')[0].reset();
                    Swal.fire(
                'Report Recived',
                'Thank you!!',
                'success'
                )
                }
            });
        });


    });



</script>
@else
<div class="container">
    <div class="row vh-100 align-items-center justify-content-center">
        <h1 class="text-center text-danger">Product Pending OR Sold Out </h1>
    </div>
</div>

@endif
@endsection
 