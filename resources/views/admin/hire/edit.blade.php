@extends('admin.layouts.include.auth')
<x-layout.edit title="Hire"  :action="route('admin.hire.update', $hire->id)" :backroute="route('admin.hire.index')">

    <x-form.input name="title" lable="Title *" :value="($hire->title??old('title'))" />
    <x-form.input name="slug" lable="Slug *" :value="($hire->slug??old('slug'))" />
    <x-form.input name="meta_title" lable="Meta Title *" :value="($hire->meta_title??old('meta_title'))" />
    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="($hire->meta_keyword??old('meta_keyword'))" />
    <x-form.input name="meta_description" lable="Meta Description *" :value="($hire->meta_description??old('meta_description'))" />
    <x-form.input name="meta_robots" lable="Meta Robots *" :value="($hire->meta_robots??old('meta_robots'))" />

    <x-form.input type="file" :defaultImage="isset($hire->image)?getImage($hire->image):null" name="image" lable="Image"
        :value="$hire->image" accept="image/*"/>
    <x-form.input type="file" :defaultImage="isset($hire->image2)?getImage($hire->image2):null" name="image2" lable="Image 2"
        :value="$hire->image2" accept="image/*"/>
    <x-form.input type="file" name="icon" lable="Icon" :defaultImage="isset($hire->icon)?getImage($hire->icon):null" :value="$hire->icon"
        accept="image/*"/>
    <x-form.textarea name="description" lable="Description" :value="$hire->description"/>

    <x-form.input name="about_title" lable="About Title *" :value="$hire->about_title"/>
    <x-form.input type="file" name="about_image" :defaultImage="isset($hire->about_image)?getImage($hire->about_image):null" lable="About Image" :value="$hire->about_image"
        accept="image/*"/>
    <x-form.textarea name="about_description" lable="About Description" :value="$hire->about_description"/>

    <hr>
    <h4>Process Title</h4>
    <x-form.input name="process_title" lable="" :value="$hire->process_title"/>  

    <hr>
    <h4>Feture</h4>
    @if(isset($hire->features))
    @foreach ($hire->features as $feature)
    <div class="hide_feature_div" style="width: 100%;">
        <div class=" clone hide_feature">
            <div class=" form-group row"  style="margin-bottom: 0px;">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            <x-form.input name="hf_title[{{ $loop->index }}]" lable="Title *" :value="$feature->title"/>
            <input type="hidden" name="feature_id[{{ $loop->index }}]" value="{{ $feature->id }}">
            </div>
            @if (!$loop->first)
                <x-form.remove removebutton="feature-btn-remove" />
            @endif
            </div>
            <x-form.textarea name="hf_description[{{ $loop->index }}]" lable="Description *" :value="$feature->description"/>
        </div>
    </div>
    @endforeach
    @endif
    <div class="feature_row_div"></div>
    <x-form.add-more addbutton="btn-add-feature-more"/>

    <hr>
    <h4>Schedule</h4>
    <x-form.input name="schedule_head_title" lable="Schedule Head Title " :value="$hire->schedule_head_title"/> 
    <x-form.input name="schedule_head_description" lable="Schedule Head Description" :value="$hire->schedule_head_description"/> 
    @if(isset($hire->sechdules))
    @foreach($hire->sechdules as $schedule)
    <div class="hide_schedule_div" style="width: 100%;">
        <div class=" clone delete_schedule">
        <div class="form-group row" style="margin-bottom: 0px;">
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <input type="hidden" name="schedule_id[{{ $loop->index }}]" value="{{ $schedule->id }}">
                <x-form.input name="s_title[{{ $loop->index }}]" lable="Title *" :value="__($schedule->title ?? old('s_title[]'))"/>
                </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
            <x-form.input type="file" name="s_image[{{ $loop->index }}]" :defaultImage="isset($schedule->image)?getImage($schedule->image):null" :value="$schedule->image" lable="Screen shot" :value="__(old('s_image[]'))" accept="image/png,image/webp,image/jpeg" />
            </div>
        </div>
        <x-form.input  name="s_description[{{ $loop->index }}]" lable="Description" :value="__($schedule->description ?? old('s_description[]'))"/>
            @if(!$loop->first)
            <x-form.remove removebutton="schedule-btn-delete"/>
            @endif
        </div>
    </div>
    @endforeach
    @endif
    <div class="schedule_row_div"></div>
    <x-form.add-more addbutton="btn-add-schedule-more"/>
    
    <hr>
    <h4> Faq </h4>
    <x-form.input name="faq_title" lable="FAQ Head Title" :value="$hire->faq_title"/> 
    @if(isset($hire->faqs))
    @foreach ($hire->faqs as $faq)
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
    @endif
    <div class="faq_row_div"></div>
    <x-form.add-more addbutton="btn-add-faq-more" />

  
    

</x-layout.edit>

@section('script')
    <script src="{{ asset('admin/assets/js/demo1/summernote.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/hire.js') }}" type="text/javascript" ></script>

    <script type="text/javascript">
        $(".btn-add-schedule-more").click(function() {
            var html =`<div class="hide_schedule_div" style="width: 100%;">
                <div class=" clone hide_schedule">
                    <div class=" form-group row"  style="margin-bottom: 0px;">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                    <x-form.input name="s_title[]" lable="Title *" :value="__(old('s_title[]'))"/>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12"><x-form.input type="file" name="s_image[]" lable="Image" :value="__(old('s_image[]'))" accept="image/png,image/webp,image/jpeg" /></div>
                    </div>
                    <x-form.input  name="s_description[]" lable="Description" :value="__(old('s_description[]'))"
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
            
            // var html = $(".hide_faq_div").html();
            $(".faq_row_div").append(html);
        });
    </script>
@endsection
