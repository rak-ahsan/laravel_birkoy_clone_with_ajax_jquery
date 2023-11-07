<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Membership Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @php
                $user = Auth::user()
            @endphp
            <div class="modal-body">
                <div class="container">
                    <form  id="from" method="POST">
                        @csrf
                        <span id="msg"></span>
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="mem_name" value="{{$user->name}}"
                                    name="mem_name">
                                    <input type="hidden" value="{{$user->username}}" name="user_name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="mem_email" value="{{$user->email}}"
                                    name="mem_email">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="number" class="col-sm-2 col-form-label">number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="mem_number" value="{{$user->number}}"
                                    name="mem_number">

                                <input type="hidden" class="form-control" id="user_id" value="{{$user->id}}"
                                    name="user_id">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="paymentMethod" class="col-sm-2 col-form-label">Payment</label>
                            <div class="my-3 col-sm-10">
                                <div class="form-check">
                                    <input id="credit" name="paymentMethod" type="radio" value="Credit card"
                                        class="form-check-input" checked required>
                                    <label class="form-check-label" for="credit">Credit card</label>
                                </div>
                                <div class="form-check">
                                    <input id="debit" name="paymentMethod" type="radio" value="Debit card"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="debit">Debit card</label>
                                </div>
                                <div class="form-check">
                                    <input id="paypal" name="paymentMethod" type="radio" value="PayPal"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="paypal">PayPal</label>
                                </div>
                                <div class="form-check">
                                    <input id="Bkash" name="paymentMethod" type="radio" value="Bkash"
                                        class="form-check-input" required>
                                    <label class="form-check-label" for="Bkash">Bkash</label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="btn" value="Buy Membership" id="sub" style="background-color: #ffc800">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function () {
        $("#sub").click(function (e) {
            e.preventDefault();
            var form = $("#from")[0];
            var formData = new FormData(form);
            var name = $("#name").val();
            var icon = $("#email").val();
            var username = $("#paymentMethod").val();
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
                url: '{{ route('memberequest') }}',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#exampleModal').modal('hide')
                        $('#from')[0].reset();
                    Swal.fire(
                'Member Request Recived',
                'Will Update Membership Soon!!',
                'success'
                )
                }
            });
        });


    });



</script>
