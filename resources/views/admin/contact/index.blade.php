@extends('admin.layouts.include.master')
<x-layout.index title="Contact">
    <th> # </th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Company</th>
    <th>Created At</th>
    <th>Type</th>
    <th>Spam</th>
    <th>Action</th>
</x-layout.index>
@section('script')
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/custom/datatables/datatables.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/contact.js') }}" type="text/javascript" ></script>
@endsection
