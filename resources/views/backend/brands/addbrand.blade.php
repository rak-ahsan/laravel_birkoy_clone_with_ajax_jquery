  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Brand</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         
            <div class="container">
                <form class="forms-sample mt-3" id="from">
                    @csrf
                    <div id="msg" class="text-danger mb-3"></div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Brand Name</label>
                        <input type="text" class="form-control" id="brand_name"
                            placeholder="Category Name" name="cata_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Icon Name</label>
                        <input type="email" class="form-control" id="cata_icon" placeholder="Category Icon"
                            name="cata_icon">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Username</label>
                        <input type="email" class="form-control" id="cata_username"
                            placeholder="Category Username" name="cata_username">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary me-2" id="sub">Submit</button>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        $(document).ready(function () {
            $("#sub").click(function (e) {
                e.preventDefault();
                var form = $("#from")[0];
                var formData = new FormData(form);
                var name = $("#cata_name").val();
                var icon = $("#cata_icon").val();
                var username = $("#cata_username").val();

                if (name === '' || icon === ''|| username === '' ) {
                    $('#msg').html('All Fields Are Required');
                    return;
                } else {
                    $('#msg').html('');
                }

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: 'category',
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
