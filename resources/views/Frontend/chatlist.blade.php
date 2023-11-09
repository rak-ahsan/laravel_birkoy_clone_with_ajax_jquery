@extends('Frontend.layout.Head') @section('content') 
<div class="container mt-5 shadow" style="background-color:#fff;">
    <div class="row">
        <div class="col-md-4 p-3">
            <div class="col"><b>My Chats</b></div>
            @foreach($chats as $chat)
            <a id="la" class="nav-link" href="{{route('message', $chat->product_id)}}">
                <div class="col d-flex mt-3">
                    <div class="img col-md-2"><img src="{{ asset('img/p.jpg') }}"
                            style="height: 50px; border-radius:50%"></div>
                    <div class="des px-2"><b>{{$chat->product_id}}</b></div>
                </div>
            </a>                         
            @endforeach
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
