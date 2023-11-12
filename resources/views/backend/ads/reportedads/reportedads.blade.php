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
                        <th> reports Details </th>
                        <th> Ads Title </th>
                        <th> Status </th>
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
                    <td> {{$list->reports}}</td>
                    <td>{{$list->title}} </td>
                    @if ($list->status==0)
                    <td> Pending </td>
                    @else
                    <td> Resolved </td>
                    @endif
                    <td>{{$list->created_at}} </td>
                    <td><a href="{{ url('productview/' . $list->ads_id) }}" class="nav-link"><i class="mdi mdi-eye"></i> </a></td>
                    <td><a href="{{ url('productview/' . $list->ads_id) }}" class="nav-link"><i class="mdi mdi-delete"></i> </a></td>
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
