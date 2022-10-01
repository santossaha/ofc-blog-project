@extends('admin.layouts.include.master')
<x-layout.index title="Blog" :route="route('admin.blog.create')">
    <th> # </th>
    <th>Title</th>
    <th>Category</th>
    <th>Created At</th>
    <th>Status</th>
    <th>Action </th>
</x-layout.index>
@section('script')
    <script src="{{ asset('admin/assets/vendors/custom/datatables/datatables.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/blog.js') }}" type="text/javascript" ></script>
@endsection
