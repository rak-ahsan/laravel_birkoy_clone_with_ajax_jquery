@extends('backend.layout.header')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="container">
        <form class="forms-sample mt-3" id="from" action="{{ route('reportups', $ads->report_id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="exampleInputUsername1">Report Details</label>
                <input type="text" class="form-control" id="cata_name" placeholder="Category Name" name="reports"
                    value="{{ $ads->reports }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select class="form-select" aria-label="Default select example" name="status" style="font-size: 0.8125rem">
                    <option selected>Open this select menu</option>
                    <option value="0"  {{ 0 == $ads->status ? 'selected' : '' }}>Pending</option>
                    <option value="1"  {{ 1 == $ads->status ? 'selected' : '' }}>Resolved</option>
                </select>
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2" id="sub">Submit</button>
        </form>
    </div>
</div>

@endsection
