@php
$action = isset($hire) ? route('admin.hire.update',$hire->id) : route('admin.hire.store');
@endphp
@extends('admin.layouts.include.auth')
<x-layout.create title="Hire" :data="$hire??null" :action="$action" :backroute="route('admin.hire.index')">
    <x-form.input name="title" lable="Title *" :value="($hire->title??old('title'))" />
    <x-form.input name="slug" lable="Slug *" :value="($hire->slug??old('slug'))" />
    <x-form.input name="meta_title" lable="Meta Title *" :value="($hire->meta_title??old('meta_title'))" />
    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="($hire->meta_keyword??old('meta_keyword'))" />
    <x-form.input name="meta_description" lable="Meta Description *" :value="($hire->meta_description??old('meta_description'))" />
    <x-form.input name="meta_robots" lable="Meta Robots *" :value="($hire->meta_robots??old('meta_robots'))" />

    <x-form.input type="file" name="image" lable="Image *" :defaultImage="isset($hire->image)?getImage($hire->image):null" accept="image/*" />
    <x-form.input type="file" name="image2" lable="Image 2 *" :defaultImage="isset($hire->image2)?getImage($hire->image2):null" accept="image/*" />
    <x-form.input type="file" name="icon" lable="Icon *" :defaultImage="isset($hire->icon)?getImage($hire->icon):null" accept="image/*" />

    <x-form.textarea name="description" lable="Description *" :value="($hire->description??null)" />

    <x-form.input name="about_title" lable="About Title *" :value="__($service->about_title ?? old('about_title'))" />
    <x-form.input type="file" name="about_image" lable="About Image" :value="($service->about_image ?? old('about_image'))" accept="image/*" />
    <x-form.textarea name="about_description" lable="About Description" :value="$service->about_description ?? null" />

    <hr>
    <h4>Process Title</h4>
    <x-form.input name="process_title" lable="" :value="__(old('process_title'))"/>  

    <hr>
    <h4>Feture</h4>
    <x-form.input name="hf_title[]" lable="Title *" :value="__(old('hf_title[]'))"/>        
    <x-form.textarea  name="hf_description[]" lable="Description" :value="__(old('hf_description[]'))" />
    <div class="feature_row_div"></div>
    <x-form.add-more addbutton="btn-add-feature-more"/>

    <hr>
    <h4>Schedule</h4>
    <x-form.input name="schedule_head_title" lable="Schedule Head Title " :value="__(old('schedule_head_title'))"/> 
    <x-form.input name="schedule_head_description" lable="Schedule Head Description" :value="__(old('schedule_head_description'))"/> 
    <div class="form-group row" style="margin-bottom: 0px;">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input name="s_title[]" lable="Title *" :value="__(old('s_title[]'))"/>        
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input type="file" name="s_image[]" lable="Image" :value="__(old('s_image[]'))" accept="image/png,image/webp,image/jpeg" />
        </div>
    </div>
    <x-form.input  name="s_description[]" lable="Description" :value="__(old('s_description[]'))" />
    <div class="schedule_row_div"></div>
    <x-form.add-more addbutton="btn-add-schedule-more"/>
    
    <hr>
    <h4> Faq </h4>
    <x-form.input name="faq_title" lable="FAQ Head Title" :value="__(old('faq_title'))"/> 
    <x-form.input name="faq_question[]" lable="Question *" :value="__($service->faq_question ?? old('faq_question'))" />
    <x-form.input name="faq_answer[]" lable="Answer *" :value="__($service->faq_answer ?? old('faq_answer'))" />
    <div class="faq_row_div"></div>
    <x-form.add-more addbutton="btn-add-faq-more" />

    <hr>
    <h4> Call to Action (CTA) </h4>
    <x-form.input name="cta_title" lable="Head Title" :value="__(old('cta_title'))"/> 
    <x-form.input name="cta_description" lable="Head Description" :value="__(old('cta_description'))"/> 

</x-layout.create>
@section('script')
    <script src="{{ asset('admin/assets/js/demo1/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/hire.js') }}" type="text/javascript" ></script>
    <script>
        $(".btn-add-schedule-more").click(function() {
            var html =`<div class="hide_schedule_div" style="width: 100%;">
                <div class=" clone hide_schedule">
                    <div class=" form-group row"  style="margin-bottom: 0px;">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                    <x-form.input name="s_title[]" lable="Title *" :value="__($schedule->title ?? old('s_title[]'))"/>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                    <x-form.input type="file" name="s_image[]" lable="Image" :value="__(old('s_image[]'))" accept="image/png,image/webp,image/jpeg" /></div>
                    </div>
                    <x-form.input  name="s_description[]" lable="Description" :value="__($schedule->description ?? old('s_description[]'))"
                        />
                    <x-form.remove removebutton="schedule-btn-remove"/>
                </div>
            </div>`;
            
            // var html = $(".hide_schedule_div").html();
            $(".schedule_row_div").append(html);
            $('[type="file"]').dropify();
        });


        $(".btn-add-feature-more").click(function() {
            var html =`<div class="hide_feature_div" style="width: 100%;">
                <div class=" clone hide_feature">
                    <x-form.input name="hf_title[]" lable="Title *" :value="__($feature->about_title ?? old('hf_title[]'))"/>
                    <x-form.textarea  name="hf_description[]" lable="Description" :value="__($feature->app_process_image ?? old('hf_description[]'))"    />
                    <x-form.remove removebutton="feature-btn-remove"/>
                </div>
            </div>`;
            
            $(".feature_row_div").append(html);
            $('textarea.summernote').summernote({height: 150});
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
