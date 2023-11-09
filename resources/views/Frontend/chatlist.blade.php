@extends('Frontend.layout.Head') @section('content') <div class="container mt-5 shadow" style="background-color:#fff;">
    <div class="row">
        <div class="col-md-4 p-3">
            <div class="col"><b>My Chats</b></div><a id="la" class="nav-link">
                <div class="col d-flex mt-3">
                    <div class="img col-md-2"><img src="{{ asset('img/p.jpg') }}"
                            style="height: 50px; border-radius:50%"></div>
                    <div class="des px-2"><b>Vivo Y22s 6/128gb Full Box (Used)</b></div>
                </div>
            </a>
            <div class="col d-flex mt-3">
                <div class="img col-md-2"><img src="{{ asset('img/p.jpg') }}" style="height: 50px; border-radius:50%">
                </div>
                <div class="des px-2"><b>Vivo Y22s 6/128gb Full Box (Used)</b></div>
            </div>
            <div class="col d-flex mt-3">
                <div class="img col-md-2"><img src="{{ asset('img/p.jpg') }}" style="height: 50px; border-radius:50%">
                </div>
                <div class="des px-2"><b>Vivo Y22s 6/128gb Full Box (Used)</b></div>
            </div>
        </div>
        <div class="col-md-8">
            
            <div class="container mb-5">
                <ul id="chat">
                @foreach($chats as $chat)
                    <li class="you">
                        <div class="entete"><span class="status green"></span>
                            <h2>{{$chat->sender}}</h2>
                            <h3>10:12AM,
                                Today</h3>
                        </div>
                        <div class="triangle"></div>
                        <div class="message">{{$chat->message}} </div>
                    </li>
                    <li class="me">
                        <div class="entete">
                            <h3>10:12AM,
                                Today</h3>
                            <h2>{{$chat->reciver}}</h2><span class="status blue"></span>
                        </div>
                        <div class="triangle"></div>
                        <div class="message">Lorem ipsum dolor sit amet,
                            consectetuer adipiscing elit. Aenean commodo ligula eget dolor. </div>
                    </li>
                    @endforeach

                </ul>
                <form action="">
                    <div class="col-md-12"><textarea class="form-control" placeholder="Enter Description"
                            id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-success px-5">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>@include('Frontend/layout/footer');


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
            $('#la').click(function (e) {
                    e.preventDefault();
                    $('.load').load('/')
                }

            )
        }

    );

</script>@endsection
