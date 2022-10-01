@extends('admin.layouts.include.master')
<style type="text/css">
    .ck-editor__editable {min-height: 200px;}
</style>
<x-layout.edit title="Service" :action="route('admin.service.update', $service->id)" :backroute="route('admin.service.index')">
    <x-form.input name="title" lable="Title *" :value="$service->title"/>
    <x-form.input name="slug" lable="Slug *" :value="$service->slug"/>
    <x-form.input name="meta_title" lable="Meta Title *" :value="$service->meta_title"/>
    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="$service->meta_keyword"/>
    <x-form.input name="meta_description" lable="Meta Description *" :value="$service->meta_description"/>
    <x-form.input name="meta_robots" lable="Meta Robots *" :value="$service->meta_robots"/>
    <x-form.input name="home_description" lable="Menu Name *" :value="$service->home_description"/>

    <x-form.input type="file" name="icon" lable="Icon" :defaultImage="isset($service->icon)?getImage($service->icon):null" :value="$service->icon"
        accept="image/*"/>

    <x-form.input name="icon_alt_tag" lable="Icon Alt Tag" :value="($service->icon_alt_tag ?? old('icon_alt_tag'))" />

    <x-form.input name="short_description" lable="Short Description *" :value="$service->short_description"/>

    <div class="form-group row" style="margin-bottom: 0px;">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <x-form.input type="file" :defaultImage="isset($service->app_process_image)?getImage($service->app_process_image):null" name="app_process_image" lable="Image"
        :value="$service->app_process_image" accept="image/*"/>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input type="file" name="about_image" :defaultImage="isset($service->about_image)?getImage($service->about_image):null" lable="Image 2" :value="$service->about_image" accept="image/*"/>
        </div>
    </div>

    <div class="form-group row" style="margin-bottom: 0px;">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input name="image_alt_tag" lable="Image Alt Tag" :value="($service->image_alt_tag ?? old('image_alt_tag'))" />
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input name="image2_alt_tag" lable="Image 2 Alt Tag" :value="($service->image2_alt_tag ?? old('image2_alt_tag'))" />
        </div>
    </div>

    <x-form.input name="about_title" lable="About USP Title *" :value="$service->about_title"/>

    <x-form.textarea name="about_description" lable="About USP Description" :value="$service->about_description"/>

    <hr>
    <h4> Schedule a Free Session <!--Benefit--> </h4>
    <x-form.input name="benefit_head_title" lable="Main Title *" :value="$service->benefit_head_title" />
    <x-form.input name="benefit_head_description" lable="Main Description *" :value="$service->benefit_head_description" />
    @foreach ($service->serviceBenefits as $benefit)
    <div class="hide_benefit_div" style="width: 100%;">
        <div class=" clone hide_benefit">
            <div class=" form-group row"  style="margin-bottom: 0px;">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <input type="hidden" name="benefit_id[{{ $loop->index }}]" value="{{ $benefit->id }}">
            <x-form.input name="sb_title[{{ $loop->index }}]" lable="Title *" :value="$benefit->title"/>
            </div>
            @if (!$loop->first)
                <x-form.remove removebutton="benefit-btn-remove" />
            @endif
            </div>
            <x-form.input name="sb_description[{{ $loop->index }}]" lable="Description *" :value="$benefit->description"/>
        </div>
    </div>
    @endforeach
    <div class="benefit_row_div"></div>
    <x-form.add-more addbutton="btn-add-benefit-more"/>

    <hr>
    <h4>Why Choose Us? <!-- Future --></h4>
    <x-form.input name="feature_head_title" lable="Main Title *" :value="$service->feature_head_title" />
    @foreach($service->serviceFeatures as $feature)
    <div class="hide_feature_div" style="width: 100%;">
        <div class=" clone delete_feature">
        <div class="form-group row" style="margin-bottom: 0px;">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <input type="hidden" name="feature_id[{{ $loop->index }}]" value="{{ $feature->id }}">
                <x-form.input name="sf_title[{{ $loop->index }}]" lable="Title *" :value="__($feature->title ?? old('sf_title[]'))"/>
                <br/>
                <x-form.input name="sf_alt_image[{{ $loop->index }}]" lable="Alt Tag" :value="__($feature->alt_image??old('sf_alt_image[]'))" />
                </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
            <x-form.input type="file" name="sf_image[{{ $loop->index }}]" :defaultImage="$feature->image?getImage($feature->image):''" :value="$feature->image" lable="Screen shot" :value="__(old('sf_image[]'))" accept="image/png,image/webp,image/jpeg" />
            </div>
        </div>
        <x-form.input  name="sf_description[{{ $loop->index }}]" lable="Description" :value="__($feature->description ?? old('sf_description[]'))"/>
            @if(!$loop->first)
            <x-form.remove removebutton="feature-btn-delete"/>
            @endif
        </div>
    </div>
    @endforeach
    <div class="feature_row_div"></div>
    <x-form.add-more addbutton="btn-add-feature-more"/>
    <hr>


    <h4>Expertise</h4>
    @foreach($service->serviceExpertises as $expertise)
    <div class="hide_expertise_div" style="width: 100%;">
        <div class=" clone delete_expertise">
        <div class="form-group row" style="margin-bottom: 0px;">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <input type="hidden" name="expertise_id[{{ $loop->index }}]" value="{{ $expertise->id }}">
                <x-form.input name="se_title[{{ $loop->index }}]" lable="Title *" :value="__($expertise->title ?? old('se_title[]'))"/>
                <br/>
                <x-form.input name="se_alt_image[{{ $loop->index }}]" lable="Alt Tag" :value="__($expertise->alt_image??old('se_alt_image[]'))" />
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
            <x-form.input type="file" name="se_image[{{ $loop->index }}]" :defaultImage="$expertise->image?getImage($expertise->image):''" :value="$expertise->image" lable="Screen shot" :value="__(old('se_image[]'))" accept="image/png,image/webp,image/jpeg" />
            </div>
        </div>
        <x-form.textarea  name="se_description[{{ $loop->index }}]" lable="Description" :value="__($expertise->description ?? old('se_description[]'))"/>
            @if(!$loop->first)
            <x-form.remove removebutton="expertise-btn-delete"/>
            @endif
        </div>
    </div>
    @endforeach

    <div class="expertise_row_div"></div>
    <x-form.add-more addbutton="btn-add-expertise-more"/>


    <hr>
    <h4> Services We Offer </h4>
    @foreach ($service->serviceAppes as $app)
    <div class="hide_service">
        <x-form.input name="s_short_title[{{ $loop->index }}]" lable="Service Short Title *" :value="$app->short_title" />
        <div class="form-group row" style="margin-bottom: 0px;">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <input type="hidden" name="service_app_id[{{ $loop->index }}]" value="{{ $app->id }}">
                <x-form.input name="s_title[{{ $loop->index }}]" lable="service Title *" :value="$app->title"/>
                <br/>
                <x-form.input name="s_alt_image[{{ $loop->index }}]" lable="Alt Tag" :value="__($app->alt_image??old('s_alt_image[]'))" />
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
            <x-form.input type="file" :defaultImage="isset($app->image)?getImage($app->image):null" name="s_image[{{ $loop->index }}]" lable="Image" :value="$app->image"  accept="image/*"/>
            </div>
        </div>
        <x-form.textarea name="s_description[{{ $loop->index }}]" lable="Description" :value="$app->description"/>
        @if(!$loop->first)
        <x-form.remove removebutton="service-btn-remove"/>
        @endif
    </div>
    @endforeach
    <div class="service_row_div"> </div>
    <x-form.add-more addbutton="btn-add-service-more"/>

    <hr>
    <h4> Hire Section </h4>
    <x-form.input name="hire_head_title" lable="Hire Main Title *" :value="$service->hire_head_title" />
    <x-form.input name="hire_head_description" lable="Hire Main Description *" :value="$service->hire_head_description" />

    <hr>
    <h4> Faq </h4>
    @foreach ($service->faqs as $faq)
    <div class="hide_faq_div" style="width: 100%;">
        <div class=" clone hide_faq">
            <div class=" form-group row"  style="margin-bottom: 0px;">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <x-form.input name="faq_question[{{ $loop->index }}]" lable="Question *" :value="$faq->question"/>
            <input type="hidden" name="faq_id[{{ $loop->index }}]" value="{{ $faq->id }}">
            </div>

            @if (!$loop->first)
                <x-form.remove removebutton="faq-btn-remove" />
            @endif
            </div>
            <x-form.input name="faq_answer[{{ $loop->index }}]" lable="Answer *" :value="$faq->answer"/>
        </div>
    </div>
    @endforeach
    <div class="faq_row_div"></div>
    <x-form.add-more addbutton="btn-add-faq-more"/>

</x-layout.edit>
@section('script')
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/pages/service.js') }}" type="text/javascript" ></script>
    <script>
        $(document).ready(function() {
              //  summer editer

            $('textarea.summernote').summernote();
            $("body").children('.summernote').summernote();
            // image uplade file
            $('[type="file"]').dropify();

            $(".btn-add-benefit-more").click(function() {
                var html =`<div class="hide_benefit_div" style="width: 100%;">
                    <div class=" clone hide_benefit">
                        <div class=" form-group row"  style="margin-bottom: 0px;">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <x-form.input name="sb_title[]" lable="Title *" :value="__(old('sb_title[]'))"/>
                        </div>
                        <x-form.remove removebutton="benefit-btn-remove"/>
                        </div>
                        <x-form.input  name="sb_description[]" lable="Description" :value="__(old('sb_description[]'))"
                            />
                    </div>
                </div>`;

                $(".benefit_row_div").append(html);
            });

            $(".btn-add-feature-more").click(function() {
                var html =`<div class="hide_feature_div" style="width: 100%;">
                    <div class=" clone hide_feature">
                        <div class=" form-group row"  style="margin-bottom: 0px;">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <x-form.input name="sf_title[]" lable="Title *"/>
                        <br/>
                        <x-form.input name="sf_alt_image[]" lable="Alt Tag" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"><x-form.input type="file" name="sf_image[]" lable="Screen shot"  accept="image/png,image/webp,image/jpeg" /></div>
                        </div>
                        <x-form.input  name="sf_description[]" lable="Description" />
                        <x-form.remove removebutton="feature-btn-remove"/>
                    </div>
                </div>`;

                $(".feature_row_div").append(html);
                $('[type="file"]').dropify();
            });

            $(".btn-add-expertise-more").click(function() {
                var html =`<div class="hide_expertise_div" style="width: 100%;">
                    <div class=" clone hide_expertise">
                        <div class=" form-group row"  style="margin-bottom: 0px;">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        <x-form.input name="se_title[]" lable="Title *"/>
                        <br/>
                        <x-form.input name="se_alt_image[]" lable="Alt Tag" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12"><x-form.input type="file" name="se_image[]" lable="Screen shot"  accept="image/png,image/webp,image/jpeg" /></div>
                        </div>
                        <x-form.textarea  name="se_description[]" lable="Description" />
                        <x-form.remove removebutton="expertise-btn-remove"/>
                    </div>
                </div>`;

                $(".expertise_row_div").append(html);
                $('[type="file"]').dropify();
                CKEditInit();
            });

            //  add  more service app input filed
            $(".btn-add-service-more").click(function() {
                var html =`<div class="hide_service_div" style="width: 100%;">
                    <div class=" clone hide_service">
                        <x-form.input name="s_short_title[]" lable="Service Short Title *"  />
                        <div class=" form-group row"  style="margin-bottom: 0px;">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
                        <x-form.input name="s_title[]" lable="Title *" :value="__(old('s_title[]'))"/>
                        <br/>
                        <x-form.input name="s_alt_image[]" lable="Alt Tag" :value="__(old('s_alt_image[]'))" />
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12"><x-form.input type="file" name="s_image[]" lable="Screen shot" :value="__(old('s_image[]'))" accept="image/png,image/webp,image/jpeg" /></div>
                        </div>
                        <x-form.textarea  name="s_description[]" lable="Description" :value="__(old('s_description[]'))"
                            />
                        <x-form.remove removebutton="service-btn-remove"/>
                    </div>
                </div>`;

                // var html = $(".hide_expertise_div").html();
                $(".service_row_div").append(html);
                $('[type="file"]').dropify();
                CKEditInit();
            });



             //  add more  faq input  filed
             $(".btn-add-faq-more").click(function() {

                var html = `<div class="hide_benefit_div" style="width: 100%;">
                                <div class=" clone hide_faq">
                                    <div class=" form-group row"  style="margin-bottom: 0px;">
                                    <div class="col-lg-1 col-md-1"></div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <x-form.input name="faq_question[]" lable="Question *" />
                        </div>
                        <x-form.remove removebutton="faq-btn-remove"/>
                        </div>
                        <x-form.input name="faq_answer[]" lable="Answer *" />
                    </div>
                </div>`;
                // var html = $(".hide_faq_div").html();
                $(".faq_row_div").append(html);

            });

        });
    </script>
@endsection
