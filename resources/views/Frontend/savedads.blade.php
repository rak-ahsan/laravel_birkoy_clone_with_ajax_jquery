@extends('Frontend.layout.profilesettings')
@section('profile')
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Ads Title </th>
                        <th> Ads Price </th>
                        <th> Number </th>
                        <th colspan="3"> Action </th>
                    </tr>
                </thead>
                <tbody>

                @php
                $a=1
                @endphp
                @foreach ($ads as $list )
                <tr>
                    @if(Auth::user()->id==$list->user_id)
                    <td> {{$a++}} </td>
                    <td> {{$list->title}}</td>
                    <td>{{$list->price}} </td>
                    <td>{{$list->pos_number}} </td>
                    <td><a href="{{ url('productview/' . $list->ads_id) }}" class="nav-link" title="View"><i class="fa-solid fa-eye"></i> </a></td>
                    <td><a href="{{url('remove/' . $list->ads_id)}}" class="nav-link"><i class="fa-solid fa-trash"></i></a></td>

                    @endif 
                </tr>
                @endforeach

                </tbody>
            </table>
        <div class="mt-3 text-white">
            {{ $ads->links() }}
        </div>
@endsection