<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> -->
            <div class="modal-body">
                <div class="container">
                    <p>Chat With {{$singelproduct->name}}</p>
                    <div class="row">
                        <div class="img col-md-2">
                            <img src="{{ asset('img/ads/'.$singelproduct->mainphoto) }}"
                            style="height: 100px;">                        </div>
                        <div class="des col-md-4">
                            <b>{{$singelproduct->title}}</b>
                            <p>৳ {{$singelproduct->price}}</p>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="privacy card-body mt-3 border border-info" style="background-color: #f3f6f5;">
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
                    <div class="chat mt-3">
                        <form action="{{route('chatstore')}}" method="post">
                            @csrf
                            <div class="form-floating">
                                <textarea class="form-control" name="message" placeholder="Leave a Message here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2" >Message</label>
                                <input type="hidden" value="{{$singelproduct->ads_id}}" name="product_id">
                                <input type="hidden" value="{{$singelproduct->user_name}}" name="reciver">
                                <input type="hidden" value="{{Auth::user()->username}}" name="sender">
                            </div>
                            <div class="mt-3">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>