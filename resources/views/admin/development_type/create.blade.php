@php
    $action = isset($devType) ? route('admin.development-type.update', $devType->id) : route('admin.development-type.store');
if(!empty($devType)){
    $data = $devType;
}else{
    $data = null;
}

@endphp
@extends('admin.layouts.include.master')
<x-layout.create title="Development type" :data="$data"  :action="$action" :backroute="route('admin.development-type.index')">
    <x-form.input :name="__('name')" :lable="_('Title *')" :value="__($devType['name'] ?? old('name'))"/>
</x-layout.create>

@section('script')
    <script src="{{ asset('admin/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/development_type.js') }}" type="text/javascript" ></script>
@endsection
