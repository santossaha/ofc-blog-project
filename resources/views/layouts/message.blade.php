<script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

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
@if(Session::has('message'))
<script>
    toastr.success(`{{Session::get('message')}}`);
</script>
@endif
@if(Session::has('error'))
<script>
    toastr.error(`{{Session::get('error')}}`);
</script>
@endif
