@extends('admin.layouts.include.master')
<x-layout.edit title="Portfolio" :action="route('admin.portfolio.update', $portfolio->id)" :backroute="route('admin.portfolio.index')">

    <x-form.input name="title" lable="Title *" :value="$portfolio->title"/>

    <x-form.input name="slug" lable="Slug *" :value="$portfolio->slug"/>

    <x-form.input name="meta_title" lable="Meta Title *" :value="$portfolio->meta_title"/>

    <x-form.input name="meta_keyword" lable="Meta Keyword *" :value="$portfolio->meta_keyword"/>

    <x-form.input name="meta_description" lable="Meta Description *" :value="$portfolio->meta_description"/>

    <x-form.input name="meta_robots" lable="Meta Robots *" :value="$portfolio->meta_robots"/>

  {{--  <x-form.input name="alt_tag" lable="Alt Tag *" :value="$portfolio->alt_tag"/>--}}
    <div class="form-group row">
        <label class="col-form-label col-lg-2 col-sm-12">Platform: </label>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <input type="text" class="form-control @error('platform') is-invalid @enderror" value="{{$portfolio->platform ?? ''}}"  name="platform" accept="" placeholder="Enter platform" >
        </div>

        <label class="col-form-label col-lg-2 col-sm-12">Programming Language: </label>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control @error('language') is-invalid @enderror" value="{{$portfolio->language ?? ''}}" name="language" accept="" placeholder="Enter" >
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-2 col-sm-12">Database: </label>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <input type="text" class="form-control @error('db') is-invalid @enderror" value="{{$portfolio->db ?? ''}}"  name="db"  placeholder="Enter" >
        </div>

        <label class="col-form-label col-lg-2 col-sm-12">Tools: </label>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <input type="text" class="form-control @error('tools') is-invalid @enderror" value="{{$portfolio->tools ?? ''}}" name="tools"  placeholder="Enter" >
        </div>
    </div>

    <x-form.input type="file" :defaultImage="getImage($portfolio->image)" name="image" lable="Image" accept="image/png,image/webp,image/jpeg" />

    <x-form.input name="alt_tag" lable="Image Alt *" :value="$portfolio->alt_tag"/>

    <x-form.select name="portfolio_category_id" lable="Category *" :options="$categoryes" :selectedOptions="$portfolio->portfolio_category_id"/>

    <x-form.input type="file" :defaultImage="getImage($portfolio->about_image)" name="about_image" lable="About Image:" :value="$portfolio->about_image" accept="image/png,image/webp,image/jpeg"/>

    <x-form.textarea name="about_description" :value="$portfolio->about_description" lable="About Description:"/>

    <x-form.textarea name="challenges_description" :value="$portfolio->challenges_description" lable="Challenges Description:"/>

    <hr>

    <hr>
    <h4>Solution</h4>
    @foreach($portfolio->solutions as $solve)
    <div class="hide_solution_div" style="width: 100%">
        <div class="hide_solution">
            <div class="form-group solution"  style="margin-bottom: 0px;">
                <div class="col-lg-1 col-md-1"></div>
                <input type="hidden" name="sloution_id[{{ $loop->index }}]" value="{{ $solve->id }}">
                <x-form.input name="q_title[]" lable="Title *" :value="__($solve->title ?? old('q_title[]'))" :size="7"/>
                <x-form.input name="q_description[]" lable="Description *" :value="__($solve->description ?? old('q_description[]'))"/>
            </div>
            @if(!$loop->first)
                <x-form.remove removebutton="solution-btn-remove"/>
            @endif
            </div>
        </div>
    @endforeach
    <div class="solution_row_div"></div>
    <x-form.add-more addbutton="btn-add-solution-more"/>

    <div class="form-group row">
        <div class="col-lg-12">
            <x-form.input type="file" :defaultImage="null" atrMultiple="multiple" name="screenshot[]" lable="Image" accept="image/png,image/webp,image/jpeg"  />
        </div>


        @foreach ($portfolio->screenshots as $key)
            <div class="col-lg-2 mt-5">
                <div class="delete-image-div{{ $key->id }}">
                    <img src="{{getImage($key->image)}}"
                         class="mr-4 delete-image-div{{ $key->id }}" width="100" height="100">
                    <br>
                    <a href="javascript:" class="delete_screenshot"
                       data-id="{{ route('admin.portfolio.removescreenshot', $key->id) }}"
                       data-class="delete-image-div{{ $key->id }}">Delete</a>
                </div>
            </div>
        @endforeach

    </div>

</x-layout.edit>
@section('script')
    <script src="{{ asset('admin/assets/js/demo1/ckeditor5/build/ckeditor.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('admin/assets/js/demo1/dropify.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
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
