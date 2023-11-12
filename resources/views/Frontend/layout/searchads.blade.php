<div class="post">

    @foreach($ads as $list)

    <a href="{{ url('productview/' . $list->ads_id) }}" class="nav-link">
        <div class="card my-3">
            <div class="row g-0 p-3">
                <div class="col-md-4">
                    <img src="{{ asset('img/ads/' . $list->mainphoto) }}" class="img-fluid rounded-start"
                        alt="..." style="height: 200px">
                  </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{$list->title}}</h5>
                        <p class="card-text"> {{$list->loc_name}} , {{$list->cata_name}}</p>
                        <p class="card-text"><span style="color: #149777; font-size:20px ">Tk
                                {{$list->price}}</span></p>
                    </div>
                    <p class="text-end px-4">@datetime($list->created_at)</p>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>