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
    toastr.success("{{Session::get('success')}}");
</script>
@endif
@if(Session::has('error'))
<script>
    toastr.error("{{Session::get('error')}}");
</script>
@endif
