@extends('admin.layouts.include.auth')
<x-layout.index title="Hire" :route="route('admin.hire.create')">
    <th> # </th>
    <th>Title</th>
    <th>Created At</th>
    <th>Status </th>
    <th>Action </th>
</x-layout.index>
@section('script')
    <script src="{{ asset('admin/assets/vendors/custom/datatables/datatables.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/hire.js') }}" type="text/javascript" ></script>
@endsection
