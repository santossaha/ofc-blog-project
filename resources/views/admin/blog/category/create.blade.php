@extends('admin.layouts.include.master')
@section('title')
    Blog  Category {{ isset($category) ? 'Update' : 'Create'}}
@endsection
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Blog Category
                </h3>
            </div>
        </div>
        <form action="{{ isset($category) ? route('admin.blog-category.update', $category->id) : route('admin.blog-category.store') }}"
            class="kt-form kt-form--label-right" id="kt_form_1" method="POST">
            @csrf
            @isset($category)
                @method('PATCH')
            @endisset
            <div class="kt-portlet__body">
                <x-form.input :name="__('name')" :lable="_('Name *')" :value="__( $category->name??old('name') )"/>
                <x-form.input :name="__('slug')" :lable="_('Slug *')" :value="__( $category->slug??old('slug'))"/>
                <x-form.input :name="__('meta_title')" :lable="_('Meta Title *')" :value="__( $category->meta_title??old('meta_title'))"/>
                <x-form.textarea :name="__('meta_description')" :lable="_('Meta Description *')" :value="__( $category->meta_description??old('meta_description'))"/>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit"
                                class="btn btn-brand btn-bold mr-2">{{ isset($category) ? 'Update' : 'Submit' }}</button>
                            <x-back-button :route="route('admin.blog-category.index')" class="btn-secondary" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
<script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/blog-category.js') }}" type="text/javascript" ></script>
@endsection

