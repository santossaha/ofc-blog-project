@php

    $action = route('admin.solution.store');
@endphp


@extends('admin.layouts.include.master')

<x-layout.create title="Solution" :action="$action" :backroute="route('admin.solution.index')">
    <x-form.input name="title" lable="Title *" :value="__(old('title'))"/>

    <x-form.input name="meta_title" lable="New Title *" :value="__(old('meta_title'))"/>

    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="__(old('meta_keyword'))"/>

    <x-form.input name="meta_description" lable="Enter Meta Description *" :value="__(old('meta_description'))"/>

    <x-form.input name="meta_robots" lable="Meta Robots *" :value="__(old('meta_robots'))"/>

    <x-form.input name="sub_title" lable="Sub Title: *" :value="__(old('sub_title'))"/>

    <div class="form-group row">
        <label class="col-form-label col-lg-2 col-sm-12">Technology Type * </label>
        <div class="col-lg-9 col-md-9 col-sm-12">
            <select class="form-control select" name="tech_type[]" multiple>
                @foreach($technologyTypeList as $key=>$techType)
                    @if(!empty(old('tech_type[]')) && in_array($techType->id, old('tech_type[]')))
                        <option selected value="{{ $techType->id }}">{{ $techType->name }}</option>
                    @endif
                        <option @if($key == 0) selected @endif value="{{ $techType->id }}">{{ $techType->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <x-form.input name="video" lable="Video URL *" :value="__(old('video'))"/>


    <x-form.input type="file" name="image"  lable="Icon" accept="image/png,image/webp,image/jpeg"/>

    <x-form.input type="file" name="about_image"  lable="About Image" accept="image/png,image/webp,image/jpeg"/>

    <x-form.textarea name="about_description" :value="__(old('about_description'))" lable="About Description"/>

    <x-form.input name="second_title" lable="Second Title *" :value="__(old('second_title'))"/>

    <x-form.textarea name="second_description" :value="__(old('second_description'))" lable="Second Description"/>

    {{--Solution Start--}}
    <hr/>
    <h4>Solution</h4>
        <div class="form-group row" style="margin-bottom: 0px;">
            <label class="col-form-label col-lg-2 col-sm-12"></label>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <input type="file" class="form-control" data-default-file=""
                       name="q_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <input type="text" class="form-control " value=" " name="q_title[]"  placeholder="Title" />
            </div>
        </div>
        <br/>
        <x-form.input name="q_description[]" lable="Enter Description" />
    <div class="solution_row_div"></div>
    <x-form.add-more addbutton="btn-add-solution-more"/>
    {{--Solution End--}}

    {{--Feature List Start--}}

    <hr/>
    <x-form.input name="feature_title" lable="Feature Title" :value="__(old('feature_title'))"/>
    <h4>Feature List</h4>
    <div class="form-group row" style="margin-bottom: 0px;">
        <label class="col-form-label col-lg-2 col-sm-12"></label>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <input type="file" class="form-control @error('f_image[]') is-invalid @enderror" value="" name="f_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control @error('f_title[]') is-invalid @enderror" value="" name="f_title[]"  placeholder="Title" />
        </div>
    </div>
    <br/>
    <x-form.input name="f_description[]" lable="Enter Description" :value="__(old('f_description[]'))"/>
    <div class="feature_list_row_div"></div>
    <x-form.add-more addbutton="btn-add-feature-list-more"/>
    {{--Feature List End--}}

    {{--Screenshort Start--}}
    <hr/>
    <h4>Screenshot</h4>
    <div class="form-group row" style="margin-bottom: 0px;">
        <label class="col-form-label col-lg-2 col-sm-12"></label>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <input type="file" class="form-control @error('s_image[]') is-invalid @enderror" value="" name="s_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control @error('s_title[]') is-invalid @enderror" value="" name="s_title[]"  placeholder="Title" />
        </div>
    </div>
    <br/>
    <x-form.input name="s_description[]" lable="Enter Description" :value="__(old('s_description[]'))"/>
    <div class="screenshot_row_div"></div>
    <x-form.add-more addbutton="btn-add-screenshot-list-more"/>
    {{--Screenshot End--}}
    <hr>

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
    <x-form.input name="customer_title" lable="Customer Title" :value="__(old('customer_title'))"/>
    <x-form.input name="solution_list_title" lable="Solution List Title" :value="__(old('solution_list_title'))"/>

</x-layout.create>

@section('script')
    <script src="{{ asset('admin/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/solution.js') }}" type="text/javascript" ></script>

    <script type="text/javascript">

        $(".btn-add-solution-more").click(function() {
            var html =`<div class="hide_solution_div" style="width: 100%;">
                <div class=" clone hide_solution">
                     <div class="form-group row" style="margin-bottom: 0px;">
                        <label class="col-form-label col-lg-2 col-sm-12"></label>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <input type="file" class="form-control @error('q_image[]') is-invalid @enderror" value="" name="q_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input type="text" class="form-control @error('q_title[]') is-invalid @enderror" value="" name="q_title[]"  placeholder="Title" />
                            </div>
                </div>
                <br/>
                    <x-form.input name="q_description[]" lable="Enter Description" :value="__(old('q_description[]'))"/>
                    <x-form.remove removebutton="solution-btn-remove"/>
                </div>
            </div>`;

            $(".solution_row_div").append(html);
            $('[type="file"]').dropify();
        });

        $(".btn-add-feature-list-more").click(function() {
            var html =`<div class="hide_feature_list_div" style="width: 100%;">
                <div class=" clone hide_feature_list">
                    <div class="form-group row" style="margin-bottom: 0px;">
                    <label class="col-form-label col-lg-2 col-sm-12"></label>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <input type="file" class="form-control @error('f_image[]') is-invalid @enderror" value="" name="f_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <input type="text" class="form-control @error('f_title[]') is-invalid @enderror" value="" name="f_title[]"  placeholder="Title" />
                        </div>
                    </div>
                    <br/>
                    <x-form.input name="f_description[]" lable="Enter Description" :value="__(old('f_description[]'))"/>
                    <x-form.remove removebutton="feature-list-btn-remove"/>
                </div>
            </div>`;
            $(".feature_list_row_div").append(html);
            $('[type="file"]').dropify();
        });

        $(".btn-add-screenshot-list-more").click(function() {
            var html =`<div class="hide_screenshot_div" style="width: 100%;">
                <div class=" clone hide_screenshot">
                     <div class="form-group row" style="margin-bottom: 0px;">
                        <label class="col-form-label col-lg-2 col-sm-12"></label>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <input type="file" class="form-control @error('s_image[]') is-invalid @enderror" value="" name="s_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input type="text" class="form-control @error('s_title[]') is-invalid @enderror" value="" name="s_title[]"  placeholder="Title" />
                            </div>
                    </div>
                    <br/>
                    <x-form.input name="s_description[]" lable="Enter Description" :value="__(old('s_description[]'))"/>
                    <x-form.remove removebutton="screenshot-btn-remove"/>
                </div>
            </div>`;

            $(".screenshot_row_div").append(html);
            $('[type="file"]').dropify();
        });

        $(".btn-add-faq-more").click(function() {
            var html =`<div class="hide_faq_div" style="width: 100%;">
                        <div class="clone hide_faq">
                        <div class="form-group row" style="margin-bottom: 0px;">
                            <div class="col-lg-1 col-md-1"></div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                            <x-form.input name="faq_question[]" lable="Question *" :value="old('faq_question')" />
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12">
                            <x-form.remove removebutton="faq-btn-remove" />
                            </div>
                        </div>
                        <x-form.input name="faq_answer[]" lable="Answer *" :value="old('faq_answer')" />
                        </div>
                    </div>`;
            $(".faq_row_div").append(html);
        });
    </script>
@endsection
