@extends('admin.layouts.include.master')
{{--@section('style')
    <link href="{{ asset('admin/assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
@endsection--}}
<x-layout.index title="Blog Category" :route="route('admin.blog-category.create')">
    <th> # </th>
    <th>Name </th>
    <th>Status </th>
    <th>Action </th>
</x-layout.index>
@section('url')
    url: "{{ url('admin/blog-category') }}/" + id,
@endsection
@section('script')
    <script src="{{ asset('admin/assets/vendors/custom/datatables/datatables.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/blog-category.js') }}" type="text/javascript" ></script>
@endsection
