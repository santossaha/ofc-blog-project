@php

    $action = route('admin.service.store');
@endphp


@extends('admin.layouts.include.master')

<x-layout.create title="Solution" :action="$action" :backroute="route('admin.service.index')">
    <x-form.input name="title" lable="Title *" :value="__(old('title'))"/>

    <x-form.input name="slug" lable="Slug *" :value="__(old('slug'))"/>

    <x-form.input name="short_description" lable="Short Description" :value="__(old('short_description'))"/>

    <x-form.input name="meta_title" lable="Meta Title" :value="__(old('meta_title'))"/>

    <x-form.input name="meta_keyword" lable="Meta Keywords" :value="__(old('meta_keyword'))"/>

    <x-form.input name="meta_description" lable="Meta Description" :value="__(old('meta_description'))"/>

    <x-form.input name="meta_robots" lable="Meta Robots" :value="__(old('meta_robots'))"/>

    <x-form.input name="about_title" lable="About Title" :value="__(old('about_title'))"/>

    <x-form.textarea name="about_description" :value="__(old('about_description'))" lable="Description:"/>

    <x-form.input type="file" name="image"  lable="Image" accept="image/png,image/webp,image/jpeg"/>

    {{--Service Point Start--}}
    <hr/>
    <h4>Service Point</h4>
    <div class="form-group row" style="margin-bottom: 0px;">
        <label class="col-form-label col-lg-2 col-sm-12"></label>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <input type="file" class="form-control" data-default-file=""
                   name="s_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" />
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control " value=" " name="s_title[]"  placeholder="Title" />
        </div>
    </div>
    <br/>
    <x-form.textarea name="s_description[]" :value="__(old('s_description[]'))" lable="Enter Description"/>
    <div class="service_row_div"></div>
    <x-form.add-more addbutton="btn-add-service-more"/>
    {{--Solution Point End--}}

    {{--App Development Point Start--}}

    <hr/>
    <x-form.input name="app_dev_title" lable="App Development Title" :value="__(old('app_dev_title'))"/>
    <h4>App Development Point</h4>
    <div class="form-group row" style="margin-bottom: 0px;">
        <label class="col-form-label col-lg-2 col-sm-12"></label>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <input type="file" class="form-control" value="" name="a_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control" value="" name="a_title[]"  placeholder="Title" />
        </div>
    </div>
    <br/>
    <x-form.textarea name="a_description[]" :value="__(old('a_description[]'))" lable="Enter Description"/>
    <div class="app_development_row_div"></div>
    <x-form.add-more addbutton="btn-add-app-development-more"/>
    {{--App Development Point End--}}

    {{-- Frequently Asked Questions Start--}}
    <h4> Frequently Asked Questions </h4>
    <div class="form-group row" style="margin-bottom: 0px;">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <x-form.input name="faq_title[]" lable="Question *" :value="old('faq_title[]')" />
        </div>
        <div class="col-lg-2 col-md-2">
        </div>
    </div>
    <x-form.input name="faq_description[]" lable="Answer *" :value="old('faq_description[]')" />

    <div class="faq_row_div"></div>
    <x-form.add-more addbutton="btn-add-faq-more" />

    {{-- Frequently Asked Questions End--}}
    <x-form.input type="file" name="app_process_image"  lable="App Process Image" accept="image/png,image/webp,image/jpeg"/>
    <div class="form-group row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
            <label class="">Is show in Home and Service page?</label>
            <div class="kt-radio-inline">
                <label class="kt-radio kt-radio--solid">
                    <input type="radio" name="is_show" checked value="1"> Yes
                    <span></span>
                </label>
                <label class="kt-radio kt-radio--solid">
                    <input type="radio" name="is_show" value="0" > No
                    <span></span>
                </label>
            </div>
        </div>
    </div>
</x-layout.create>

@section('script')
    <script src="{{ asset('admin/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/service.js') }}" type="text/javascript" ></script>

    <script type="text/javascript">

        $(".btn-add-service-more").click(function() {
            var html =`<div class="hide_service_div" style="width: 100%;">
                <div class=" clone hide_service">
                     <div class="form-group row" style="margin-bottom: 0px;">
                        <label class="col-form-label col-lg-2 col-sm-12"></label>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <input type="file" class="form-control" value="" name="s_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input type="text" class="form-control " value="" name="s_title[]"  placeholder="Title" />
                            </div>
                </div>
                <br/>
                    <x-form.textarea name="s_description[]" :value="__(old('s_description[]'))" lable="Enter Description"/>
                    <x-form.remove removebutton="service-btn-remove"/>
                </div>
            </div>`;

            $(".service_row_div").append(html);
            $('[type="file"]').dropify();
            CKEditInit();
        });

        $(".btn-add-app-development-more").click(function() {
            var html =`<div class="hide_app_development_div" style="width: 100%;">
                <div class=" clone hide_app_development">
                    <div class="form-group row" style="margin-bottom: 0px;">
                    <label class="col-form-label col-lg-2 col-sm-12"></label>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <input type="file" class="form-control" value="" name="a_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input type="text" class="form-control" value="" name="a_title[]"  placeholder="Title" />
                        </div>
                    </div>
                    <br/>
                   <x-form.textarea name="a_description[]" :value="__(old('a_description[]'))" lable="Enter Description"/>
                    <x-form.remove removebutton="app-development-btn-remove"/>
                </div>
            </div>`;
            $(".app_development_row_div").append(html);
            $('[type="file"]').dropify();
            CKEditInit();
        });

        $(".btn-add-faq-more").click(function() {
            var html =`<div class="hide_faq_div" style="width: 100%;">
                        <div class="clone hide_faq">
                        <div class="form-group row" style="margin-bottom: 0px;">
                            <div class="col-lg-1 col-md-1"></div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                            <x-form.input name="faq_title[]" lable="Question *" :value="old('faq_title[]')" />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                            <x-form.remove removebutton="faq-btn-remove" />
                            </div>
                        </div>
                        <x-form.input name="faq_description[]" lable="Answer *" :value="old('faq_description[]')" />
                        </div>
                    </div>`;
            $(".faq_row_div").append(html);
        });
    </script>
@endsection
