@extends('admin.layouts.include.master')
<x-layout.index title="Solution" :route="route('admin.solution.create')">
    <th> # </th>
    <th>Title</th>
    <th>Created At</th>
    <th>Status </th>
    <th>Action </th>
</x-layout.index>
@section('script')
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/custom/datatables/datatables.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/solution.js') }}" type="text/javascript" ></script>
@endsection
