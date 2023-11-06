@extends('Frontend.layout.profilesettings')
@section('profile')
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Ads Title </th>
                        <th> Ads Price </th>
                        <th> Number </th>
                        <th> Status </th>
                        <th> Posting Date </th>
                        <th colspan="3"> Action </th>
                    </tr>
                </thead>
                <tbody>

                @php
                $a=1
                @endphp
                @foreach ($ads as $list )
                <tr>
                    @if(Auth::user()->username==$list->user_name)
                    <td> {{$a++}} </td>
                    <td> {{$list->title}}</td>
                    <td>{{$list->price}} </td>
                    <td>{{$list->pos_number}} </td>
                    <td>{{$list->status_name}} </td>
                    <td>{{$list->created_at}} </td>
                    <td><a href="{{ url('edituserads/' . $list->ads_id) }}" class="nav-link">Edit </a></td>
                    <td><a href="{{ url('edituserads/' . $list->ads_id) }}" class="nav-link">Delete</a></td>

                    @endif
                </tr>
                @endforeach

                </tbody>
            </table>
        <div class="mt-3 text-white">
            {{ $ads->links() }}
        </div>
@endsection