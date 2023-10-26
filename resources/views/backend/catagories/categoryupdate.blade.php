<div class="container">
    <form class="forms-sample mt-3" id="from">
        @csrf
        <div id="msg" class="text-danger mb-3"></div>
        <div class="form-group">
            <label for="exampleInputUsername1">Category Name</label>
            <input type="text" class="form-control" id="cata_name" placeholder="Category Name" name="cata_name"
                value="{{$cata->cata_name}}">
            <input type="hidden" class="form-control" id="id" placeholder="Category Name" name="cata_id"
                value="{{$cata->cata_id}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category Icon Name</label>
            <input type="text" class="form-control" id="cata_icon" placeholder="Category Icon" name="cata_icon"
                value="{{$cata->cata_icon}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Category Username</label>
            <input type="text" class="form-control" id="cata_username" placeholder="Category Username"
                name="cata_username" value="{{$cata->cata_username}}">
        </div>
        <button type="submit" class="btn btn-gradient-primary me-2" id="sub">Submit</button>
    </form>
</div>
<script>
    $(document).ready(function () {
        $("#sub").click(function (e) {
            e.preventDefault();
            var form = $("#from")[0];
            var formData = new FormData(form);

            let cata_id = $('#id').val()

            var name = $("#cata_name").val();
            var icon = $("#cata_icon").val();
            var username = $("#cata_username").val();

            if (name === '' || icon === '' || username === '') {
                $('#msg').html('All Fields Are Required');
                return;
            } else {
                $('#msg').html('');
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: 'category/' + cata_id,
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('.table').load(location.href + ' .table')
                    $('#exampleModal').modal('hide')
                    $('#from')[0].reset();
                }
            });
        });


    });

</script>
