{{-- @if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
    {{ Session::get('error') }}
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
    {{ Session::get('success') }}
</div>
@endif --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>
<script>
    toastr.options = {
        "positionClass": "toast-bottom-right",
        "progressBar": true,
        "closeButton": true,
    };
    // toastr.options = {
    //     "closeButton": false,
    //     "debug": false,
    //     "newestOnTop": false,
    //     "progressBar": false,
    //     "positionClass": "toast-top-right",
    //     "preventDuplicates": false,
    //     "onclick": null,
    //     "showDuration": "300",
    //     "hideDuration": "1000",
    //     "timeOut": "5000",
    //     "extendedTimeOut": "1000",
    //     "showEasing": "swing",
    //     "hideEasing": "linear",
    //     "showMethod": "fadeIn",
    //     "hideMethod": "fadeOut"
    // };

    // toastr.success("dffddfddddfdf", "fsgafsfgsf");
</script>

<!-- <script src="{{asset('assets/libs/toastr/build/toastr.min.js')}}"></script> -->
@if (!empty($errors->any()))
@foreach($errors->all() as $errors)
<script>
    toastr.error(`{{$errors}}`);
</script>
@endforeach
@endif
@if(Session::has('success'))
<script>
    toastr.success(`{{Session::get('success')}}`);
</script>
@endif
@if(Session::has('error'))
<script>
    toastr.error(`{{Session::get('error')}}`);
</script>
@endif
