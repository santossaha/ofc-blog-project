@php
    $action = route('admin.technology.update', $technology->id);
@endphp

@extends('admin.layouts.include.master')

<x-layout.create title="Edit Technology" :data="$technology" :action="$action" :backroute="route('admin.technology.index')">
    <x-form.input name="title" lable="Title *" :value="($technology->title?? '')"/>

    <x-form.input name="slug" lable="Slug" :value="($technology->slug?? '')"/>

    <x-form.input name="short_title" lable="Short Title" :value="($technology->short_title?? '')"/>

    <x-form.input name="short_description" lable="Short Description " :value="($technology->short_description?? '')"/>

    <x-form.input name="meta_title" lable="Meta Title" :value="($technology->meta_title?? '')"/>

    <x-form.input name="meta_keyword" lable="Meta Keywords" :value="($technology->meta_keyword?? '')"/>

    <x-form.input name="meta_description" lable="Meta Description" :value="($technology->meta_description?? '')"/>

    <x-form.input name="meta_robots" lable="Meta Robots" :value="($technology->meta_robots?? '')"/>

    <x-form.input type="file" name="image"  lable="Image" :defaultImage="isset($technology->image)?getImage($technology->image):null" accept="image/png,image/webp,image/jpeg"/>

    <x-form.input name="about_title" lable="About Title" :value="($technology->about_title?? '')"/>

    <x-form.input type="file" name="about_image"  lable="About Image" :defaultImage="isset($technology->about_image)?getImage($technology->about_image):null" accept="image/png,image/webp,image/jpeg"/>

    <x-form.textarea name="about_description" :value="($technology->about_description?? '')" lable="About Description"/>

    {{--Service Point Start--}}
    <hr/>
    <h4>Service Point</h4>
    @foreach($technology->service_point as  $service)
        <div class="hide_service_div" style="with:100%;">
            <div class="clone delete_service">
                <div class="form-group row" style="margin-bottom: 0px;">
                    <label class="col-form-label col-lg-2 col-sm-12"></label>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <input type="hidden" name="service_id[{{ $loop->index }}]" value="{{ $service->id }}">
                        <input type="file" class="form-control" data-default-file="{{getImage($service->image ?? '')}}"
                               name="s_image[{{$loop->index}}]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <input type="text" class="form-control " value="{{$service->title ?? ''}}" name="s_title[]"  placeholder="Title" />
                    </div>
                </div>
                <br/>
                <x-form.textarea name="s_description[]" :value="($service->description ?? '')" lable="Enter Description"/>
                @if(!$loop->first)
                    <x-form.remove removebutton="service-btn-delete"/>
                @endif
            </div>
        </div>
    @endforeach
    <div class="service_row_div"></div>
    <x-form.add-more addbutton="btn-add-service-more"/>
    {{--Solution Point End--}}

    {{--App Development Point Start--}}

    <hr/>
    <x-form.input name="app_dev_title" lable="App Development Title" :value="($technology->app_dev_title?? '')"/>
    <h4>App Development Point</h4>
    @foreach($technology->app_development as  $develop)
        <div class="hide_app-development_div" style="with:100%;">
            <div class="clone delete_app_development">
                <div class="form-group row" style="margin-bottom: 0px;">
                    <label class="col-form-label col-lg-2 col-sm-12"></label>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <input type="hidden" name="app_development_id[{{ $loop->index }}]" value="{{ $develop->id }}">
                        <input type="file" class="form-control"  data-default-file="{{getImage($develop->image ?? '')}}"
                               name="a_image[{{$loop->index}}]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <input type="text" class="form-control " value="{{$develop->title}}" name="a_title[]"  placeholder="Title" />
                    </div>
                </div>
                <br/>
                <x-form.textarea name="a_description[]" :value="$develop->description" lable="Enter Description"/>
                @if(!$loop->first)
                    <x-form.remove removebutton="app-development-btn-delete"/>
                @endif
            </div>
        </div>
    @endforeach
    <div class="app_development_row_div"></div>
    <x-form.add-more addbutton="btn-add-app-development-more"/>


    {{--App Development Point End--}}

    {{-- Frequently Asked Questions Start--}}
    <h4> Frequently Asked Questions </h4>
    @if($technology->faq)
        @foreach($technology->faq as $faq)
            <div class="hide_faq_div" style="width: 100%">
                <div class="clone delete_faq">
                    <div class="form-group row" style="margin-bottom: 0px;">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <input type="hidden" name="faqs_id[{{ $loop->index }}]" value="{{ $faq->id }}">
                            <x-form.input name="faq_title[]" lable="Question " :value="$faq->question ?? ''" />
                        </div>
                        <div class="col-lg-2 col-md-2">
                        </div>
                    </div>
                    <x-form.input name="faq_description[]" lable="Answer " :value="$faq->answer??' ' " />
                    @if(!$loop->first)
                        <x-form.remove removebutton="faq-btn-delete"/>
                    @endif
                </div>
            </div>
        @endforeach
    @endif
    <div class="faq_row_div"></div>
    <x-form.add-more addbutton="btn-add-faq-more" />
    {{-- Frequently Asked Questions End--}}

    {{--Expertise Start--}}
    <hr/>
    <h4>Expertise</h4>
    @foreach($technology->expertise as $expertise)
    <div class="hide_expertise_div" style="width: 100%">
        <div class="clone delete_expertise">
            <div class="form-group row" style="margin-bottom: 0px;">
                <label class="col-form-label col-lg-2 col-sm-12"></label>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <input type="hidden" name="expertise_id[{{ $loop->index }}]" value="{{ $expertise->id }}">
                    <input type="file" class="form-control" value="" name="e_image[]" data-default-file="{{getImage($expertise->image ?? '')}}" accept="image/png,image/webp,image/jpeg" placeholder="Enter" />
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <input type="text" class="form-control " value="{{$expertise->title}}" name="e_title[]"  placeholder="Title" />
                </div>
            </div>
            <br/>
            @if(!$loop->first)
                <x-form.remove removebutton="expertise-btn-delete"/>
            @endif
        </div>
    </div>
    @endforeach
    <div class="expertise_row_div"></div>
    <x-form.add-more addbutton="btn-add-expertise-more"/>
    {{--Expertise End--}}
    <hr>
    <x-form.input name="hire_us_title" lable="Hire Us Title" :value="($technology->hire_us_title?? '')"/>
    <x-form.input name="stories_title" lable="Success Stories Title" :value="($technology->stories_title?? '')"/>
    <x-form.input name="customer_title" lable="Customer Says Title" :value="($technology->customer_title?? '')"/>
    <x-form.input name="insight_title" lable="Insight Title" :value="($technology->insight_title?? '')"/>

</x-layout.create>

@section('script')
    <script src="{{ asset('admin/assets/vendors/general/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/technology.js') }}" type="text/javascript" ></script>

    <script type="text/javascript">

        $(".btn-add-service-more").click(function() {
            var html =`<div class="hide_service_div" style="width: 100%;">
                <div class=" clone hide_service">
                     <div class="form-group row" style="margin-bottom: 0px;">
                        <label class="col-form-label col-lg-2 col-sm-12"></label>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <input type="file" class="form-control" value="" name="q_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input type="text" class="form-control " value="" name="q_title[]"  placeholder="Title" />
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

        $(".btn-add-expertise-more").click(function() {
            var html =`<div class="hide_expertise_div" style="width: 100%;">
                <div class=" clone hide_expertise">
                     <div class="form-group row" style="margin-bottom: 0px;">
                        <label class="col-form-label col-lg-2 col-sm-12"></label>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <input type="file" class="form-control" value="" name="e_image[]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" data-default-file=""/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input type="text" class="form-control" value="" name="e_title[]"  placeholder="Title" />
                            </div>
                    </div>
                    <br/>
                    <x-form.remove removebutton="expertise-btn-remove"/>
                </div>
            </div>`;

            $(".expertise_row_div").append(html);
            $('[type="file"]').dropify();
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
