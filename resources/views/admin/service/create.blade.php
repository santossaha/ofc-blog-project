@php
$action = isset($service) ? route('admin.service.update', $service->id) : route('admin.service.store');
@endphp
@extends('admin.layouts.include.master')
<style type="text/css">
    .clone{
        margin-bottom: 20px;
    }
    //.ck-editor__editable {min-height: 200px;}
</style>

<x-layout.create title="Service" :data="$service ?? null" :action="$action" :backroute="route('admin.service.index')">

    <x-form.input name="title" lable="Title *" :value="__($service->title ?? old('title'))" />

    <x-form.input name="slug" lable="Slug *" :value="__($service->slug ?? old('slug'))" />

    <x-form.input name="meta_title" lable="Meta Title *" :value="__($service->meta_title ?? old('meta_title'))" />

    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="__($service->meta_keyword ?? old('meta_keyword'))" />

    <x-form.input name="meta_description" lable="Meta Description *" :value="__($service->meta_description ?? old('meta_description'))" />

    <x-form.input name="meta_robots" lable="Meta Robots *" :value="__($service->meta_robots ?? old('meta_robots'))" />

    <x-form.input name="home_description" lable="Menu Name  *" :value="__($service->home_description ?? old('home_description'))" />

    <x-form.input type="file" name="icon" lable="Icon" :value="($service->icon ?? old('icon'))" accept="image/*" />

    <x-form.input name="icon_alt_tag" lable="Icon Alt Tag" :value="($service->icon_alt_tag ?? old('icon_alt_tag'))" />

    <x-form.input name="short_description" lable="Short Description *" :value="__($service->short_description ?? old('short_description'))" />

    <div class="form-group row" style="margin-bottom: 0px;">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input type="file" name="app_process_image" lable="Image" :value="__($service->app_process_image ?? old('app_process_image'))" accept="image/*" />
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input type="file" name="about_image" lable="Image 2" :value="($service->about_image ?? old('about_image'))" accept="image/*" />
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

    <x-form.input name="about_title" lable="About USP Title *" :value="__($service->about_title ?? old('about_title'))" />

    <x-form.textarea name="about_description" lable="About USP Description *" :value="$service->about_description ?? null" />

    <hr>
    <h4> Schedule a Free Session <!--Benefit--> </h4>
    <x-form.input name="benefit_head_title" lable="Main Title *" :value="__($service->benefit_head_title ?? old('benefit_head_title'))" />
    <x-form.input name="benefit_head_description" lable="Main Description *" :value="__($service->benefit_head_description ?? old('benefit_head_description'))" />
    <x-form.input name="sb_title[]" lable="Title *" :value="__(old('sb_title'))" />
    <x-form.input name="sb_description[]" lable="Description *" :value="__(old('sb_description'))" />
    <x-form.add-more addbutton="btn-add-benefit-more" />
    <div class="benefit_row_div"></div>

    <hr>
    <h4>Why Choose Us? <!-- Future --></h4>
    <x-form.input name="feature_head_title" lable="Main Title *" :value="__($service->feature_head_title ?? old('feature_head_title'))" />
    <div class="form-group row" style="margin-bottom: 0px;">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input name="sf_title[]" lable="Title *" :value="__(old('sf_title[]'))"/>
        <br/>
        <x-form.input name="sf_alt_image[]" lable="Alt Tag" :value="__(old('sf_alt_image[]'))" />
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input type="file" name="sf_image[]" lable="Image" :value="__(old('sf_image[]'))" accept="image/png,image/webp,image/jpeg" />
        </div>
    </div>
    <x-form.input  name="sf_description[]" lable="Description" :value="__(old('sf_description[]'))" />
    <div class="feature_row_div"></div>
    <x-form.add-more addbutton="btn-add-feature-more"/>

    <hr>
    <h4>Expertise</h4>
    <div class="form-group row" style="margin-bottom: 0px;">
        <div class="col-lg-1 col-md-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input name="se_title[]" lable="Title *" :value="__(old('se_title[]'))"/>
        <br/>
        <x-form.input name="se_alt_image[]" lable="Alt Tag" :value="__(old('se_alt_image[]'))" />
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
        <x-form.input type="file" name="se_image[]" lable="Screen shot" :value="__(old('se_image[]'))" accept="image/png,image/webp,image/jpeg" />
        </div>
    </div>
    <x-form.textarea  name="se_description[]" lable="Description" :value="__(old('se_description[]'))" />
    <div class="expertise_row_div"></div>
    <x-form.add-more addbutton="btn-add-expertise-more"/>

    <hr>
    <h4> Services We Offer </h4>
    <x-form.input name="s_short_title[]" lable="Service Short Title *" :value="__(old('s_short_title[]') ?? null)" />
    <x-form.input name="s_title[]" lable="Service Title *" :value="__(old('s_title[]') ?? null)" />
    <x-form.input type="file" name="s_image[]" lable="Image" :value="__(old('s_title[]') ?? null)" accept="image/*" />
    <x-form.input name="s_alt_image[]" lable="Alt Tag" :value="__(old('s_alt_image[]'))" />
    <x-form.textarea name="s_description[]" lable="Description" :value="__(old('s_description[]') ?? null)" />
    <div class="service_row_div"></div>
    <x-form.add-more addbutton="btn-add-service-more" />

    <hr>
    <h4> Hire Section </h4>
    <x-form.input name="hire_head_title" lable="Hire Main Title *" :value="__(old('hire_head_title'))" />
    <x-form.input name="hire_head_description" lable="Hire Main Description *" :value="__(old('hire_head_description'))" />


    <hr>
    <h4> Faq </h4>
    <x-form.input name="faq_question[]" lable="Question *" :value="__($service->faq_question ?? old('faq_question'))" />
    <x-form.input name="faq_answer[]" lable="Answer *" :value="__($service->faq_answer ?? old('faq_answer'))" />
    <div class="faq_row_div"></div>
    <x-form.add-more addbutton="btn-add-faq-more" />

    <!-- Add More Image upload field  -->

    <!-- End -->
</x-layout.create>
@section('script')
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
   <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/pages/service.js') }}" type="text/javascript" ></script>


    <script type="text/javascript">

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
                    <div class="col-lg-5 col-md-5 col-sm-12">
                    <x-form.input name="sf_title[]" lable="Title *" :value="__(old('sf_title[]'))"/>
                    <br/>
                    <x-form.input name="sf_alt_image[]" lable="Alt Tag" :value="__(old('sf_alt_image[]'))" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12"><x-form.input type="file" name="sf_image[]" lable="Screen shot" :value="__(old('sf_image[]'))" accept="image/png,image/webp,image/jpeg" /></div>
                    </div>
                    <x-form.input  name="sf_description[]" lable="Description" :value="__(old('sf_description[]'))"
                        />
                    <x-form.remove removebutton="feature-btn-remove"/>
                </div>
            </div>`;

            // var html = $(".hide_feature_div").html();
            $(".feature_row_div").append(html);
            $('[type="file"]').dropify();
        });

        $(".btn-add-expertise-more").click(function() {
            var html =`<div class="hide_expertise_div" style="width: 100%;">
                <div class=" clone hide_expertise">
                    <div class=" form-group row"  style="margin-bottom: 0px;">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                    <x-form.input name="se_title[]" lable="Title *" :value="__(old('se_title[]'))"/>
                    <br/>
                    <x-form.input name="se_alt_image[]" lable="Alt Tag" :value="__(old('se_alt_image[]'))" />
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12"><x-form.input type="file" name="se_image[]" lable="Screen shot" :value="__(old('se_image[]'))" accept="image/png,image/webp,image/jpeg" /></div>
                    </div>
                    <x-form.textarea  name="se_description[]" lable="Description" :value="__(old('se_description[]'))"
                        />
                    <x-form.remove removebutton="expertise-btn-remove"/>
                </div>
            </div>`;

            // var html = $(".hide_expertise_div").html();
            $(".expertise_row_div").append(html);
            $('[type="file"]').dropify();
            CKEditInit();
        });

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

        $(".btn-add-faq-more").click(function() {

            var html = `<div class="hide_faq_div" style="width: 100%;">
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
            $(".faq_row_div").append(html);

        });

    </script>
@endsection
