@php
$action = isset($category) ? route('admin.portfolio-category.update',$category->id) : route('admin.portfolio-category.store');
@endphp
@extends('admin.layouts.include.master')
 <x-layout.create title="Portfolio Category" :data="$category??null" :action="$action" :backroute="route('admin.portfolio-category.index')">
    <x-form.input :name="__('name')" :lable="_('Name *')" :value="__( $category->name??old('name') )"/>
    <x-form.input :name="__('sort_name')" :lable="_('Sort Name *')" :value="__( $category->sort_name??old('sort_name'))"/>
    <x-form.input :name="__('slug')" :lable="_('Slug *')" :value="__( $category->slug??old('slug'))"/>
</x-layout.create>
@section('script')
<script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/portfolio-category.js') }}" type="text/javascript" ></script>
@endsection

