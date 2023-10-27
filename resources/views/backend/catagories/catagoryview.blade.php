@extends('backend.layout.header')
@section('content')
<div class="card">
    <div class="card-body">
        <button type="button" class="btn btn-info btn-fw" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD
            Categories</button>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>Catagory Name</th>
                    <th>Catagory Icon</th>
                    <th>User Name</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            @if ($catagory->isNotEmpty())
            <tbody>
                @foreach ( $catagory as $row)
                <tr>
                    <td>{{$row->cata_name}}</td>
                    <td>{{$row->cata_icon}}</td>
                    <td>{{$row->cata_username}}</td>
                    <td> <a class="nav-link edit" data-id="{{$row->cata_id}}" data-bs-toggle="modal"
                            data-bs-target="#exampleModals"><i class="mdi mdi-lead-pencil
                        "></i></a></td>
                    <td><a class="nav-link" href="{{ route('category.destroy', $row->cata_id) }}"><i class="mdi mdi-delete

                        "></i></a></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6" class="text-center">
                        <h2>Sorry No Record Found</h2>
                    </td>
                </tr>
                @endif
            </tbody>
        </table>
        <div class="mt-3 text-white">
            {{ $catagory->links() }}
        </div>
    </div>
</div>

@include('backend.catagories.categorycreate')
{{-- @include('backend.catagories.categoryupdate') --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $(".edit").click(function (e) {
            e.preventDefault();
            var cata_id = $(this).attr("data-id");
            $.ajax({
                type: "GET",
                url: "category/" + cata_id + "/edit",
                data: {
                    cata_id: cata_id
                },
                success: function (response) {
                    $('.modal-body').html(response);
                    $('#exampleModal').modal('show');
                }
            });
        });
    });

</script>



@endsection
