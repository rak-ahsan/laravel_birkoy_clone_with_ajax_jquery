@extends('Frontend.layout.Head') @section('content')
<div class="container mt-5 shadow" style="background-color:#fff;">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4 p-3">
            <div class="col"><b>My Chats</b></div>
            @foreach($chats as $chat)
            @if (Auth::user()->username == $chat->sender || Auth::user()->username == $chat->reciver && Auth::user()->username == $chat->user_name)
            @if(Auth::user()->username !== $chat->sender)
            <a id="la" class="nav-link" href="{{ route('message', [$chat->product_id, $chat->sender]) }}">
                <div class="col d-flex mt-3 align-items-center">
                    <div class="img col-md-2"><img src="{{ asset('img/ads/'.$chat->mainphoto) }}"
                            style="height: 50px; width:50px; border-radius:50%"></div>
                    <div class="des col-md-10 px-2"><b>{{$chat->title}} <br><small> {{$chat->sender}}</small>d</b></div>
                </div>
            </a>
            @elseif(Auth::user()->username == $chat->user_name)
            @else
            <a id="la" class="nav-link" href="{{ route('message', [$chat->product_id, $chat->reciver]) }}">
                <div class="col d-flex mt-3 align-items-center">
                    <div class="img col-md-2"><img src="{{ asset('img/ads/'.$chat->mainphoto) }}"
                            style="height: 50px; width:50px; border-radius:50%"></div>
                    <div class="des col-md-10 px-2"><b>{{$chat->title}} <br> <small>{{$chat->reciver}}</small></b></div>
                </div>
            </a>
            @endif
                
            @endif

            @endforeach

        </div>
        <div class="col-md-8">
            <p>Please Follow Our Policy while Chatting</p>
        </div>
    </div>
</div>
@include('Frontend/layout/footer');


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script>
    $(document).ready(function () {
            $('#la').click(function (e) {
                    e.preventDefault();
                    $('.load').load('/')
                }

            )
        }

    );

</script> --}}
@endsection
