@php
    $action = isset($blog) ? route('admin.blog.update', $blog->id) : route('admin.blog.store');
@endphp


@extends('admin.layouts.include.master')


<x-layout.create title="Blog" :data="$blog??null" :action="$action" :backroute="route('admin.blog.index')">
    @isset($blog)
        @method('PATCH')
    @endisset
    <x-form.input name="slug" lable="Slug Url *" :value="$blog->slug??__(old('slug'))"/>

    <x-form.input name="title" lable="Title *" :value="$blog->title??__(old('title'))"/>

    <div class="form-group row">
        <label class="col-form-label col-lg-2 col-sm-12">Category: </label>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <select class="form-control select" name="category_id[]" multiple>
                @foreach($categoryes as $key=>$cat)
                    @if(!empty(old('category_id')) && in_array($cat->id, old('category_id')))
                        <option selected value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @else
                        <option {{ (isset($blog) && in_array($cat->id,blogCategoryIds($blog->id))) ? "selected" : "" }} value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <x-form.input type="date" name="publish_date" lable="Publish Date *" :value="$blog->publish_date??__(old('publish_date'))"/>

    <x-form.input name="publish_by" lable="Publish By *" :value="$blog->publish_by??__(old('publish_by'))"/>

    <x-form.input name="meta_title" lable="Meta Title *" :value="$blog->meta_title??__(old('meta_title'))"/>

    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="$blog->meta_keyword??__(old('meta_keyword'))"/>

    <x-form.input name="meta_description" lable="Meta Description *" :value="$blog->meta_description??__(old('meta_description'))"/>

    <x-form.input name="meta_robots" lable="Meta Robots *" :value="$blog->meta_robots??__(old('meta_robots'))"/>

    <x-form.textarea name="description" lable="Description" :value="$blog->description?? null"/>

    <x-form.input type="file" name="front_image" :defaultImage="isset($blog->front_image)?getImage($blog->front_image):null" lable="Front Image"
                  accept="image/*"/>

    <x-form.input name="front_image_title" lable="Front Image Title *" :value="$blog->front_image_title??__(old('front_image_title'))"/>

    <x-form.input name="front_image_alt" lable="Front Image Alt *" :value="$blog->front_image_alt??__(old('front_image_alt'))"/>

    <x-form.input type="file" :defaultImage="isset($blog->image)?getImage($blog->image):null" name="image" lable="Image"
                      accept="image/*"/>

    <x-form.input name="image_title" lable="Image Title *" :value="$blog->image_title??__(old('image_title'))"/>

    <x-form.input name="image_alt" lable="Image Alt *" :value="$blog->image_alt??__(old('image_alt'))"/>


    <!-- <x-form.select id="courses_listbox" lable="Category *" name="category_id[]" :options="$categoryes"
                    :selectedOptions="$blog->meta_title??null" multiple="multiple"></x-form.select> -->

</x-layout.create>

@section('script')
    <script src="{{ asset('admin/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/blog.js') }}" type="text/javascript" ></script>
@endsection
