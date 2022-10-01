@php
    $action = route('admin.portfolio.store');
@endphp

@extends('admin.layouts.include.master')
<x-layout.create title="Portfolio"  :action="$action" :backroute="route('admin.portfolio.index')">

    <x-form.input name="title" lable="Title *" :value="__(old('title'))"/>

    <x-form.input name="slug" lable="Slug *" :value="__(old('slug'))"/>

    <x-form.input name="meta_title" lable="Meta Title *" :value="__(old('meta_title'))"/>

    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="__(old('meta_keyword'))"/>

    <x-form.input name="meta_description" lable="Meta Description *" :value="__(old('meta_description'))"/>

    <x-form.input name="meta_robots" lable="Meta Robots *" :value="__(old('meta_robots'))"/>

    <div class="form-group row">
      <label class="col-form-label col-lg-2 col-sm-12">Platform: </label>
      <div class="col-lg-3 col-md-3 col-sm-12">
          <input type="text" class="form-control @error('platform') is-invalid @enderror"  name="platform" accept="" placeholder="Enter platform" >
      </div>

      <label class="col-form-label col-lg-2 col-sm-12">Programming Language: </label>
      <div class="col-lg-4 col-md-4 col-sm-12">
          <input type="text" class="form-control @error('language') is-invalid @enderror" value="" name="language" accept="" placeholder="Enter" >
      </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-2 col-sm-12">Database: </label>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <input type="text" class="form-control @error('db') is-invalid @enderror" value=""  name="db"  placeholder="Enter" >
        </div>

        <label class="col-form-label col-lg-2 col-sm-12">Tools: </label>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control @error('tools') is-invalid @enderror" value="" name="tools"  placeholder="Enter" >
        </div>
    </div>



    <x-form.input type="file" :defaultImage="null" name="image" lable="Image" accept="image/png,image/webp,image/jpeg" />

    <x-form.input name="alt_tag" lable="Image Alt *" :value="__(old('alt_tag'))"/>

    <x-form.select name="portfolio_category_id" lable="Category *" :options="$categoryes" :selectedOptions="1"/>

    <x-form.input type="file" :defaultImage="null" name="about_image" lable="About Image:" accept="image/png,image/webp,image/jpeg"/>

    <x-form.textarea name="about_description" lable="About Description:"/>

    <x-form.textarea name="challenges_description" lable="Challenges Description:"/>

    <hr>
    <h4>Solution</h4>
    <div class="form-group solution"  style="margin-bottom: 0px;">
        <div class="col-lg-1 col-md-1"></div>
        <x-form.input name="q_title[]" lable="Title *" :value="__(old('q_title[]'))" :size="7"/>
        <x-form.input name="q_description[]" lable="Description *" :value="__(old('q_description[]'))"/>
    </div>
    <div class="solution_row_div"></div>
    <x-form.add-more addbutton="btn-add-solution-more"/>
    <hr>
    <x-form.input type="file" :defaultImage="null" atrMultiple="multiple" name="screenshot[]" lable="Image" accept="image/png,image/webp,image/jpeg"  />

</x-layout.create>

@section('script')
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/js/pages/portfolio.js') }}" type="text/javascript" ></script>

    <script type="text/javascript">
        $(".btn-add-solution-more").click(function() {
            var html =`<div class="hide_solution_div" style="width: 100%;">
                <div class=" clone hide_solution">
                     <div class="form-group solution"  style="margin-bottom: 0px;">
                     <div class="col-lg-1 col-md-1"></div>
                            <x-form.input name="q_title[]" lable="Title *" :value="__(old('q_title'))" :size="7"/>
                            <x-form.input name="q_description[]" lable="Description *" :value="__(old('q_description'))"/>
                    </div>
                    <x-form.remove removebutton="solution-btn-remove"/>
                    </div>
                </div>
            </div>`;

            $(".solution_row_div").append(html);
            $('[type="file"]').dropify();
        });
    </script>

    <script>
        CKEditorInit();
        function CKEditorInit() {
            $('.summernote').each(function (i, el) {
                ClassicEditor.create(el, {
                    heading: {

                    },

                    toolbar: {
                        items: ['undo','redo','|',
                            'heading','|',
                            'blockQuote','bold','italic','underline','|',
                            'fontSize','bulletedList','numberedList','alignment','outdent','indent','|',
                            'strikethrough','superscript','subscript','|',
                            'fontBackgroundColor','fontColor','|',
                            'link','insertTable','horizontalLine','|',
                            'code','|',
                            'imageUpload',
                            'mediaEmbed' ]
                    },
                    language: 'en',
                    image: {
                        toolbar: [
                            'imageTextAlternative',
                            'imageStyle:inline',
                            'imageStyle:block',
                            'imageStyle:side'
                        ]
                    },
                    table: {
                        contentToolbar: [
                            'tableColumn',
                            'tableRow',
                            'mergeTableCells'
                        ]
                    },
                    licenseKey: '',
                }).then( editor => {
                    editor.ui.view.editable.element.style.height = '200px';
                } )
                    .catch( error => {
                        console.error( error );
                    } );
            })
        }
    </script>
@endsection
