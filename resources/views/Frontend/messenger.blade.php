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
                    <li class="you">
                        <div class="entete"><span class="status green"></span>
                            <h2>{{ $chat->sender }}</h2>
                            <h3>{{ $chat->created_at->setTimezone('Asia/Dhaka')->format('h:iA, M d') }}</h3>
                        </div>
                        <div class="message">{{ $chat->message }} </div>
                    </li>
                @endif
            @endforeach
        </ul>

        <form action="{{ route('chatstore') }}" method="post">
            @csrf
            <div class="col-md-12">
                <textarea class="form-control" placeholder="Enter Description" id="floatingTextarea2"
                    style="height: 100px" name="message"></textarea>
                <input type="text" value="{{ $chat->reciver }}" name="reciver">
                <input type="text" value="{{ Auth::user()->username }}" name="sender">
                <input type="text" value="{{ $chat->product_id }}" name="product_id">
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-success px-5">Send Message</button>
            </div>
        </form>
    </div>
</div>

@endsection
