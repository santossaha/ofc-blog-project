@php
$action = isset($industri) ? route('admin.industri.update',$industri->id) : route('admin.industri.store');
@endphp
@extends('admin.layouts.include.auth')
<x-layout.create title="Industry" :data="isset($industri)?$industri:null" :action="$action" :backroute="route('admin.industri.index')">
    <x-form.input name="title" lable="Title *" :value="($industri->title??old('title'))" />
    <x-form.input name="slug" lable="Slug *" :value="($industri->slug??old('slug'))" />
    <x-form.input name="meta_title" lable="Meta Title *" :value="($industri->meta_title??old('meta_title'))" />
    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="($industri->meta_keyword??old('meta_keyword'))" />
    <x-form.input name="meta_description" lable="Meta Description *" :value="($industri->meta_description??old('meta_description'))" />
    <x-form.input name="meta_robots" lable="Meta Robots *" :value="($industri->meta_robots??old('meta_robots'))" />
    <x-form.input type="file" name="image" lable="Image" :defaultImage="isset($industri->image)?getImage($industri->image):null" accept="image/*" />
    <x-form.textarea name="description" lable="Description" :value="($industri->description??old('description'))" />
    <x-form.input type="file" name="icon" lable="Icon" :defaultImage="isset($industri->icon)?getImage($industri->icon):null" accept="image/*" />
    <x-form.input name="short_description" lable="Short Description *" :value="($industri->short_description??old('short_description'))"/>
</x-layout.create>
@section('script')
    <script src="{{ asset('admin/assets/js/demo1/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/industri.js') }}" type="text/javascript" ></script>
@endsection
