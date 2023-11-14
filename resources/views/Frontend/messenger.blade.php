@extends('Frontend.layout.Head') 
@section('content')

<div class="col-md-12">
    <div class="container mb-5">
        <ul id="chat">
            @foreach ($chats as $chat)
                @if ($chat->sender == Auth::user()->username)
                    <li class="me">
                        <div class="entete">
                            <h3>{{ $chat->created_at->timezone('Asia/Dhaka')->format('h:iA, M d') }}</h3>
                            <h2>Me</h2><span class="status blue"></span>
                        </div>
                        <div class="message">{{ $chat->message }}</div>
                    </li>
                @else
                @if ($chat->sender == $sender && $chat->reciver == Auth::user()->username)
                    <li class="you">
                        <div class="entete"><span class="status green"></span>
                            <h2>{{ $chat->sender }}</h2>
                            <h3>{{ $chat->created_at->setTimezone('Asia/Dhaka')->format('h:iA, M d') }}</h3>
                        </div>
                        
                        <div class="message">{{ $chat->message }} </div>
                    </li>
                @endif
                @endif
            @endforeach
        </ul>
    @if($chat->availability==1)
        
        <form action="{{ route('chatstore') }}" method="post">
            @csrf
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Enter Message" id="floatingTextarea2"
                    style="height: 100px" name="message"></textarea>
                {{-- @if(auth::user()->username == $chat->sender) --}}
                <input type="text" value="{{ $sender }}" name="reciver">
                {{-- @else --}}
                {{-- <input type="text" value="{{ $chat->sender }}" name="reciver"> --}}
                {{-- @endif --}}
                <input type="text" value="{{ Auth::user()->username }}" name="sender">
                <input type="text" value="{{ $chat->product_id }}" name="product_id">
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-success px-5">Send Message</button>
            </div>
        </form>

        @else
            <b>Product Sold Out </b>
        @endif
    </div>
</div>

@endsection
