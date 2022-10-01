@extends('admin.layouts.include.master')
@section('title')
     Site Setting
@endsection
@section('style')
<link rel="stylesheet" href="{{ asset('admin/assets/css/demo1/dropify.min.css') }}" />
@endsection
@section('content')
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Site Setting </h3>
                        </div>

                    </div>
                    <form class="kt-form kt-form--label-right" action="{{ route('admin.setting.update') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($setting)
                            @method('PATCH')
                        @endif
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6" >

                                            <x-form.input :name="__('website_name')" :lable="_('Website Name *')" :value="__($setting->website_name ?? old('website_name'))"/>

                                            <x-form.input type="file" :defaultImage="isset($setting->logo)?getImage($setting->logo):null" name="logo" lable="logo" accept="image/*"/>

                                            <x-form.input type="file" :defaultImage="isset($setting->light_logo)?getImage($setting->light_logo):null" name="light_logo" lable="Light Logo" accept="image/*"/>

                                            <x-form.input type="file" :defaultImage="isset($setting->favicon_icon)?getImage($setting->favicon_icon):null" name="favicon_icon" lable="Favicon Icon" accept="image/*"/>

                                            <div class="col-lg-10 col-xl-10">
                                                <button type="submit" class="btn btn-brand btn-bold float-right">{{  $setting ? 'Update' : 'Submit' }}</button>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-xl-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script>
         $(document).ready(function() {
                    // image uplade file
            $('[type="file"]').dropify();
         });
    </script>
@endsection
