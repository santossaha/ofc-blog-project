@extends('admin.layouts.include.master')
@php
    $action = route('admin.service.update', $service->id);
@endphp


<style type="text/css">
    .ck-editor__editable {min-height: 200px;}
</style>


<x-layout.edit title="Service" :action="route('admin.service.update', $service->id)" :backroute="route('admin.service.index')">
    <x-form.input name="title" lable="Title *" :value="$service['title']"/>

    <x-form.input name="slug" lable="Slug *" :value="$service['slug']"/>

    <x-form.input name="short_description" lable="Short Description" :value="$service['short_description']"/>

    <x-form.input name="meta_title" lable="Meta Title" :value="$service['meta_title']"/>

    <x-form.input name="meta_keyword" lable="Meta Keywords" :value="$service['meta_keyword']"/>

    <x-form.input name="meta_description" lable="Meta Description" :value="$service['meta_description']"/>

    <x-form.input name="meta_robots" lable="Meta Robots" :value="$service['meta_robots']"/>

    <x-form.input name="about_title" lable="About Title" :value="$service['about_title']"/>

    <x-form.textarea name="about_description" :value="$service['about_description']" lable="Description:"/>

    <x-form.input type="file" name="image" :defaultImage="getImage($service['about_image'])"  lable="Image" accept="image/png,image/webp,image/jpeg"/>

    {{--Service Point Start--}}
    <hr/>
    <h4>Service Point</h4>
    @foreach($service->servicePoint as  $serv)
        <div class="hide_service_div" style="with:100%;">
            <div class="clone delete_service">
                <div class="form-group row" style="margin-bottom: 0px;">
                    <label class="col-form-label col-lg-2 col-sm-12"></label>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <input type="hidden" name="service_id[{{ $loop->index }}]" value="{{ $serv->id }}">
                        <input type="file" class="form-control" data-default-file="{{getImage($serv->image ?? '')}}"
                               name="s_image[{{$loop->index}}]" accept="image/png,image/webp,image/jpeg" placeholder="Enter" />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <input type="text" class="form-control " value="{{$serv->title ?? ''}}" name="s_title[]"  placeholder="Title" />
                    </div>
                </div>
                <br/>
                <x-form.textarea name="s_description[]" :value="($serv->description ?? '')" lable="Enter Description"/>
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
    <x-form.input name="app_dev_title" lable="App Development Title" :value="($service['app_dev_title']?? '')"/>
    <h4>App Development Point</h4>
    @foreach($service->devPoint as  $develop)
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
    @if($service->faqs)
        @foreach($service->faqs as $faq)
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
    <x-form.input type="file" name="app_process_image" :defaultImage="getImage($service['app_process_image'])"  lable="App Process Image" accept="image/png,image/webp,image/jpeg"/>
    <div class="form-group row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
            <label class="">Is show in Home and Service page?</label>
            <div class="kt-radio-inline">
                <label class="kt-radio kt-radio--solid">
                    <input type="radio" name="is_show" @if(isset($service) && $service['is_show'] == '1') checked @endif value="1"> Yes
                    <span></span>
                </label>
                <label class="kt-radio kt-radio--solid">
                    <input type="radio" name="is_show" @if(isset($service) && $service['is_show'] == '0') checked @endif value="0" > No
                    <span></span>
                </label>
            </div>
        </div>
    </div>

</x-layout.edit>
@section('script')
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/pages/service.js') }}" type="text/javascript" ></script>
    <script>
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
