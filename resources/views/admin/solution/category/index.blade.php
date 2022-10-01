@extends('admin.layouts.include.auth')
<x-layout.index title="Portfolio Category" :route="route('admin.portfolio-category.create')">
    <th> # </th>
    <th>Name </th>
    <th>Sort Name </th>  
    <!-- <th>Created At</th> -->
    <th>Status</th>
    <th>Action </th>
</x-layout.index>
@section('script')
    <script src="{{ asset('admin/assets/vendors/custom/datatables/datatables.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/portfolio-category.js') }}" type="text/javascript" ></script>
@endsection
