@php
     $action = isset($testimonial) ? route('admin.testimonial.update', $testimonial->id) : route('admin.testimonial.store');
        if(isset($testimonial['image'])){
            $img = getImage($testimonial->image);
        }else{
            $img = '';
        }
        //only use for condition 
        if($testimonial){
            $data = $testimonial;
        }else{
            $data = '';
        }
@endphp
@extends('admin.layouts.include.master')
<x-layout.create title="Testimonial" :data="$data"  :action="$action" :backroute="route('admin.testimonial.index')">
    <x-form.input :name="__('name')" :lable="_('Name *')" :value="__($testimonial->name ?? old('name'))"/>
    <x-form.input :name="__('short_title')" :lable="_('Short Title *')" :value="__($testimonial->short_title ?? old('short_title'))"/>
    <x-form.input type="file" name="image" :defaultImage="$img" lable="Image" accept="image/*"  />
    <x-form.textarea name="description" :value="__($testimonial->description ?? old('description'))" lable="description"/>
</x-layout.create>

@section('script')
    <script src="{{ asset('admin/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/testimonial.js') }}" type="text/javascript" ></script>
@endsection
