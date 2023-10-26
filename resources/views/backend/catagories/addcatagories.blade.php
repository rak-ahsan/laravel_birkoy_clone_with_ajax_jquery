@extends('backend.layout.header')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @include('backend.layout.sidebar')
        </div>
        <div class="col-md-8">r</div>
    </div>
</div>
@include('Frontend/layout/footer');
@endsection