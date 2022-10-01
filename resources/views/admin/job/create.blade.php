@php
    $action = isset($jobManagement) ? route('admin.job-management.update', $jobManagement->id) : route('admin.job-management.store');
if(!empty($jobManagement)){
    $data = $jobManagement;
}else{
    $data = null;
}

@endphp
@extends('admin.layouts.include.master')
<x-layout.create title="Job Management" :data="$data"  :action="$action" :backroute="route('admin.testimonial.index')">
    <x-form.input :name="__('name')" :lable="_('Title *')" :value="__($jobManagement['name'] ?? old('name'))"/>
    <x-form.input type="number" :name="__('opening')" :lable="_('opening *')" :value="__($jobManagement['opening'] ?? old('opening'))"/>
    <x-form.input :name="__('experience')" :lable="_('Experience *')" :value="__($jobManagement['experience'] ?? old('experience'))"/>
    <x-form.textarea name="skill" :value="__($jobManagement['skill'] ?? old('skill'))" lable="Skill *"/>
</x-layout.create>

@section('script')
    <script src="{{ asset('admin/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/job.js') }}" type="text/javascript" ></script>
@endsection
