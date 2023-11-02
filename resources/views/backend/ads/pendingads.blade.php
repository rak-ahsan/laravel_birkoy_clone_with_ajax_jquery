@extends('backend.layout.header')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Ads</h4>
            </p>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Ads Title </th>
                        <th> Ads Price </th>
                        <th> Number </th>
                        <th> Membership </th>
                        <th> Posting Date </th>
                        <th colspan="3"> Action </th>
                    </tr>
                </thead>
                @php
                $a=1
                @endphp
                @foreach ($ads as $list )
                <tr>
                    <td> {{$a++}} </td>
                    <td> {{$list->title}}</td>
                    <td>{{$list->price}} </td>
                    <td>{{$list->pos_number}} </td>
                    <td> free </td>
                    <td>{{$list->created_at}} </td>
                    <td><a href="{{ url('editads/' . $list->ads_id) }}" class="nav-link"><i class="mdi mdi-pen"></i> </a></td>
                    <td><a href="{{ url('productview/' . $list->ads_id) }}" class="nav-link"><i class="mdi mdi-eye"></i> </a></td>

                </tr>
                @endforeach
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="mt-3 text-white">
            {{ $ads->links() }}
        </div>
    </div>
</div>

@endsection
