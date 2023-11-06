@extends('backend.layout.header')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body table">
            <h4 class="card-title">All Members</h4>
            </p>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Number </th>
                        <th> Membership </th>
                        <th> Joining Date </th>
                        <th colspan="3"> Action </th>
                    </tr>
                </thead>
                @php
                $a=1
                @endphp
                @foreach ($user as $list )
                <tr>
                    <td> {{$a++}} </td>
                    <td> {{$list->name}}</td>
                    <td>{{$list->email}} </td>
                    <td>{{$list->number}} </td>
                    @if ($list->membership == 1)
                        <td>Free</td>
                    @else
                    <td>Paid</td>
                    @endif
                    <td>{{$list->created_at}} </td>
                    <td><a href="{{ url('/edit' , $list->username) }}" class="nav-link"><i
                        class="mdi mdi-pen"></i> </a></td>
                    <td><a href=" {{ route('userprofile',$list->username) }}" class="nav-link"><i
                                class="mdi mdi-eye"></i> </a></td>
                    <td><a href="{{ url('userdelete/' . $list->id) }}" class="nav-link"><i
                                class="mdi mdi-delete"></i> </a></td>
                </tr>
                @endforeach
                <tbody>

                </tbody>
            </table>
        </div>
        <div class="mt-3 text-white">
            {{ $user->links() }}
        </div>
    </div>
</div>

@endsection
