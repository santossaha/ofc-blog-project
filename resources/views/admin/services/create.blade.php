@extends('admin.layouts.default')
@section('title', 'Service')
@section('content')

    @if (isset($_GET['layout']))
        @php $layout = $_GET['layout']; @endphp
    @elseif(isset($edit))
        @php $layout = $edit->layout; @endphp
    @else
        @php $layout = 1; @endphp
    @endif

    <link href="{{ asset('/theme/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />


    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    @if (isset($edit))
                        Edit
                    @else
                        Add New
                    @endif Service
                </h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="{{ route('admin.service.index') }}" class="btn btn-default btn-bold"><i class="fa fa-arrow-left"></i>
                    Back</a>
            </div>
        </div>
    </div>
    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.service.store') }}"
                    class="kt-form kt-form--label-right" _lpchecked="1">
                    @csrf
                    @if (isset($edit))
                        <input type="hidden" name="id" value="{{ $edit->id }}">
                    @endif
                    <div class="kt-portlet__body">
                        {{-- <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Layout:</label>
                            <div class="kt-radio-inline">
                                <label class="kt-radio kt-radio--solid">
                                    <input type="radio" name="layout" value="1" {{ ($layout == "1") ? "checked" : ""}}> First <a href="{{ asset('front/images/services_detail_layout1.png') }}" target="_blank" class="ml-2 badge badge-success">view</a>
                                    <span></span>
                                </label>
                                <label class="kt-radio kt-radio--solid">
                                    <input type="radio" name="layout" value="2" {{ ($layout == "2") ? "checked" : ""}}> Second <a href="{{ asset('front/images/services_detail_layout2.png') }}" target="_blank" class="ml-2 badge badge-success">view</a>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div> --}}
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Title:</label>
                                <input type="text" class="form-control" placeholder="Enter title" name="title"
                                    value="{{ isset($edit) ? $edit->title : old('title') }}">
                                @if ($errors->has('title'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Slug:</label>
                                <input type="text" class="form-control" placeholder="Enter slug" name="slug"
                                    value="{{ isset($edit) ? $edit->slug : old('slug') }}">
                                @if ($errors->has('slug'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('slug') }}</div>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Short Title:</label>
                            <input type="text" class="form-control" placeholder="Enter short title" name="short_title" value="{{ (isset($edit)) ? $edit->short_title : old('short_title')  }}">
                            @if ($errors->has('short_title'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('short_title') }}</div>
                            @endif
                        </div>
                    </div> --}}
                        {{-- <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Page Title:</label>
                            <input type="text" class="form-control" placeholder="Enter page title" name="page_title" value="{{ (isset($edit)) ? $edit->page_title : old('page_title')  }}">
                            @if ($errors->has('page_title'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                    </div> --}}
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Short Description:</label>
                                <input type="text" class="form-control" placeholder="Enter short description"
                                    name="short_description"
                                    value="{{ isset($edit) ? $edit->short_description : old('short_description') }}">
                                @if ($errors->has('short_description'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('short_description') }}</div>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Short Description About Title:</label>
                            <input type="text" class="form-control" placeholder="Enter short description about title" name="short_description_title" value="{{ (isset($edit)) ? $edit->short_description_title : old('short_description_title')  }}">
                            @if ($errors->has('short_description_title'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('short_description_title') }}</div>
                            @endif
                        </div>
                    </div> --}}
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Meta Title:</label>
                                <input type="text" class="form-control" placeholder="Enter meta title" name="meta_title"
                                    value="{{ isset($edit) ? $edit->meta_title : old('meta_title') }}">
                                @if ($errors->has('meta_title'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('meta_title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Meta Keywords:</label>
                                <input type="text" class="form-control" placeholder="Enter meta keyword"
                                    name="meta_keyword"
                                    value="{{ isset($edit) ? $edit->meta_keyword : old('meta_keyword') }}">
                                @if ($errors->has('meta_keyword'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('meta_keyword') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Meta Description:</label>
                                <input type="text" class="form-control" placeholder="Enter meta description"
                                    name="meta_description"
                                    value="{{ isset($edit) ? $edit->meta_description : old('meta_description') }}">
                                @if ($errors->has('meta_description'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('meta_description') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Meta Robots:</label>
                                <input type="text" class="form-control" placeholder="Enter meta robots" name="meta_robots"
                                    value="{{ isset($edit) ? $edit->meta_robots : old('meta_robots') }}">
                                @if ($errors->has('meta_robots'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('meta_robots') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>About Title:</label>
                                <input type="text" class="form-control" placeholder="Enter about title" name="about_title"
                                    value="{{ isset($edit) ? $edit->about_title : old('about_title') }}">
                                @if ($errors->has('about_title'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('about_title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Description:</label>
                            <textarea class="form-control ckeditor" placeholder="Enter description" name="about_description">@if (isset($edit)){{ $edit->about_description }}@else{{ old('about_description') }}@endif</textarea>
                            @if ($errors->has('about_description'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('about_description') }}</div>
                            @endif
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Image:</label>
                                <input type="file" class="form-control" name="image" accept="image/*"
                                    @if (isset($edit)) data-default-file="{{ asset('sitebucket/service') . '/' . $edit->about_image }}" @endif>
                                @if ($errors->has('image'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('image') }}</div>
                                @endif
                            </div>
                        </div>
                        {{-- @if ($layout == 2)
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>Description Image:</label>
                                <input type="file" class="form-control dropify" name="description_image" accept="image/*" @if (isset($edit)) data-default-file="{{ asset("sitebucket/service")."/".$edit->description_image }}" @endif>
                                @if ($errors->has('description_image'))
                                <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('description_image') }}</div>
                                @endif
                            </div>
                        </div>
                    @endif --}}
                        {{-- <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Background Image:</label>
                            <input type="file" class="form-control" name="image" accept="image/*" @if (isset($edit)) data-default-file="{{ asset("sitebucket/service")."/".$edit->background_image }}" @endif>
                            @if ($errors->has('image'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <label>Icon:</label>
                            <input type="file" class="form-control dropify" name="icon" accept="image/*" @if (isset($edit)) data-default-file="{{ asset("sitebucket/service")."/".$edit->icon }}" @endif>
                            @if ($errors->has('icon'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('icon') }}</div>
                            @endif
                        </div>
                    </div> --}}
                        <div class="form-group row service_row_div">
                            <div class="col-lg-12 mt-2 mb-2">
                                <h5>Service Point</h5>
                            </div>
                            @if (isset($service))
                                @foreach ($service as $key => $s)
                                <input type="hidden" name="service_app_id[]" value="{{ $s->id }}">
                                    <div class="input-group control-group img_div hide_service" style="margin-bottom:10px;">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" placeholder="Enter title"
                                                name="s_title[]" value="{{ $s->title }}">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-10 mt-2">
                                            <label>Image:</label>
                                            <input type="hidden" name="s_image[]"   value="{{ $s->image }}">
                                            <input type="file" class="form-control dropify" name="s_image[]" accept="image/*"
                                                data-default-file="{{ asset('sitebucket/service') . '/' . $s->image }}" >
                                                @if ($errors->has('s_image[]'))
                                                <div style="display: block;" id="email-error" class="error invalid-feedback">
                                                    {{ $errors->first('s_image[]') }}</div>
                                            @endif
                                            </div>
                                        <div class="col-lg-10 mt-2">
                                            {{-- <input type="text" class="form-control ckeditor" placeholder="Enter description" name="s_description[]" value=""> --}}
                                            <textarea class="form-control ckeditor" placeholder="Enter description"
                                                name="s_description[]">{{ $s->description }}</textarea>
                                        </div>
                                        @if ($key > 0)
                                            <div class="input-group-btn col-lg-2">
                                                <button class="btn btn-danger service-btn-remove" type="button"><i
                                                        class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            @elseif(old('s_title'))
                                @foreach (old('s_title') as $key => $value)
                                    <div class="input-group control-group img_div hide_service" style="margin-bottom:10px;">
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" placeholder="Enter title"
                                                name="s_title[]" value="{{ $value }}">
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-10 mt-2">
                                            <label>Image:</label>
                                            <input type="file" class="form-control dropify" name="s_image[]" accept="image/*"
                                                @if (isset($s->image)) data-default-file="{{ asset('sitebucket/service') . '/' . $s->image }}" @endif>
                                                @if ($errors->has('s_image[]'))
                                                <div style="display: block;" id="email-error" class="error invalid-feedback">
                                                    {{ $errors->first('s_image[]') }}</div>
                                            @endif
                                            </div>
                                        <div class="col-lg-10 mt-2">
                                            {{-- <input type="text" class="form-control ckeditor" placeholder="Enter description" name="s_description[]" value="{{ old('s_description')[$key] }}"> --}}
                                            <textarea class="form-control ckeditor" placeholder="Enter description"
                                                name="s_description[]">{{ old('s_description')[$key] }}</textarea>
                                        </div>
                                        @if ($key > 0)
                                            <div class="input-group-btn col-lg-2">
                                                <button class="btn btn-danger service-btn-remove" type="button"><i
                                                        class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                                <div class="input-group control-group img_div">
                                    <div class="col-lg-5">
                                        @error('s_title.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <div class="input-group control-group img_div">
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Enter title"
                                            name="s_title[]">
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-10 mt-2">
                                        <label>Image:</label>
                                        <input type="file" class="form-control dropify" name="s_image[]" accept="image/*"
                                                @if (isset($s->image)) data-default-file="{{ asset('sitebucket/service') . '/' . $s->image }}" @endif>
                                                @if ($errors->has('s_image[]'))
                                                <div style="display: block;" id="email-error" class="error invalid-feedback">
                                                    {{ $errors->first('s_image[]') }}</div>
                                            @endif
                                            </div>
                                    <div class="col-lg-10 mt-2">
                                        <textarea class="form-control ckeditor" placeholder="Enter description"
                                            name="s_description[]"></textarea>
                                    </div>
                                </div>
                            @endif
                            <!-- Add More Image upload field  -->
                            <div class="hide_service_div" style="width: 100%;display: none;">
                                <div class="control-group input-group clone hide_service" style="margin-top:10px;">
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Enter title" name="s_title[]"
                                            value="">
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-10 mt-2">
                                        <label>Image: <strong class="text-danger">*</strong> </label>
                                        <input type="file" class="form-control dropify" name="s_image[]" accept="image/*" >
                                        @if ($errors->has('s_image[]'))
                                        <div style="display: block;" id="email-error" class="error invalid-feedback">
                                            {{ $errors->first('s_image[]') }}</div>
                                    @endif
                                    </div>
                                    <div class="col-lg-10 mt-2">
                                        {{-- <input type="text" class="form-control" placeholder="Enter description" name="s_description[]" value=""> --}}
                                        <textarea class="form-control hidden_s_ckeditor" placeholder="Enter description"
                                            name="s_description[]"></textarea>

                                    </div>
                                    <div class="input-group-btn col-lg-2">
                                        <button class="btn btn-danger service-btn-remove" type="button"><i
                                                class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                        </div>
                        <div class="form-group row mb-3">
                            <!-- Add More Button -->
                            <div class="input-group-btn col-lg-2">
                                <button class="btn btn-success btn-add-service-more" type="button"><i
                                        class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                            <!-- End -->
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>App Development Title:</label>
                                <input type="text" class="form-control" placeholder="Enter App Development Title"
                                    name="app_dev_title"
                                    value="{{ isset($edit) ? $edit->app_dev_title : old('app_dev_title') }}">
                                @if ($errors->has('app_dev_title'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('app_dev_title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row quality_row_div">
                            <div class="col-lg-12 mt-2 mb-2">
                                <h5>App Development Point</h5>
                            </div>
                            @if (isset($service_app))
                                @foreach ($service_app as $key => $sa)
                                    <div class="input-group control-group img_div hide" style="margin-bottom:10px;">
                                        <div class="col-lg-5">
                                            <input type="hidden" name="q_image[]" value="{{ $sa->image }}">
                                            <input type="file" accept="image/*" name="q_image[]"
                                                class="form-control dropify"
                                                @if (isset($edit)) data-default-file="{{ asset('sitebucket/service') . '/' . $sa->image }}" @endif>
                                        </div>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" placeholder="Enter title"
                                                name="q_title[]" value="{{ $sa->title }}">
                                        </div>
                                        <div class="col-lg-10 mt-2">
                                            <input type="text" class="form-control" placeholder="Enter description"
                                                name="q_description[]" value="{{ $sa->description }}">
                                        </div>
                                        @if ($key > 0)
                                            <div class="input-group-btn col-lg-2">
                                                <button class="btn btn-danger btn-remove" type="button"><i
                                                        class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            @elseif(old('q_title'))
                                @foreach (old('q_title') as $key => $value)
                                    <div class="input-group control-group img_div hide" style="margin-bottom:10px;">
                                        <div class="col-lg-5">
                                            <input type="file" accept="image/*" name="q_image[]"
                                                class="form-control dropify">
                                        </div>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" placeholder="Enter title"
                                                name="q_title[]" value="{{ $value }}">
                                        </div>
                                        <div class="col-lg-10 mt-2">
                                            <input type="text" class="form-control" placeholder="Enter description"
                                                name="q_description[]" value="{{ old('q_description')[$key] }}">
                                        </div>
                                        @if ($key > 0)
                                            <div class="input-group-btn col-lg-2">
                                                <button class="btn btn-danger btn-remove" type="button"><i
                                                        class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach

                                <div class="input-group control-group img_div">
                                    <div class="col-lg-5">
                                        @error('q_image.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-5">
                                        @error('q_title.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <div class="input-group control-group img_div">

                                    <div class="col-lg-5">
                                        <input type="file" accept="image/*" name="q_image[]" class="form-control dropify">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Enter title"
                                            name="q_title[]">
                                    </div>
                                    <div class="col-lg-10 mt-2">
                                        <input type="text" class="form-control" placeholder="Enter description"
                                            name="q_description[]">
                                    </div>
                                </div>
                            @endif

                            <!-- Add More Image upload field  -->
                            <div class="hide_div" style="width: 100%;display: none;">
                                <div class="control-group input-group clone hide" style="margin-top:10px;">
                                    <div class="col-lg-5">
                                        <input type="file" accept="image/*" name="q_image[]"
                                            class="form-control hidden_q_image">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Enter title"
                                            name="q_title[]" value="">
                                    </div>
                                    <div class="col-lg-10 mt-2">
                                        <input type="text" class="form-control" placeholder="Enter description"
                                            name="q_description[]" value="">
                                    </div>
                                    <div class="input-group-btn col-lg-2">
                                        <button class="btn btn-danger btn-remove" type="button"><i
                                                class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                        </div>
                        <div class="form-group row mb-3">
                            <!-- Add More Button -->
                            <div class="input-group-btn col-lg-2">
                                <button class="btn btn-success btn-add-more" type="button"><i
                                        class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                            <!-- End -->
                        </div>
                        <div class="form-group row faq_row_div">
                            <div class="col-lg-12 mt-2 mb-2">
                                <h5>Frequently Asked Questions</h5>
                            </div>
                            @if (isset($edit->faq))
                                @foreach ($edit->faq as $key => $f)
                                    <div class="input-group control-group img_div hide_faq" style="margin-bottom:10px;">
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" placeholder="Enter question"
                                                name="f_title[]" value="{{ $f->question }}">
                                        </div>
                                        <div class="col-lg-10 mt-2">
                                            <input type="text" class="form-control" placeholder="Enter answer"
                                                name="f_description[]" value="{{ $f->answer }}">
                                        </div>
                                        @if ($key > 0)
                                            <div class="input-group-btn col-lg-2">
                                                <button class="btn btn-danger faq-btn-remove" type="button"><i
                                                        class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            @elseif(old('f_title'))
                                @foreach (old('f_title') as $key => $value)
                                    <div class="input-group control-group img_div hide_faq" style="margin-bottom:10px;">
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" placeholder="Enter question"
                                                name="f_title[]" value="{{ $value }}">
                                        </div>
                                        <div class="col-lg-10 mt-2">
                                            <input type="text" class="form-control" placeholder="Enter answer"
                                                name="f_description[]" value="{{ old('f_title')[$key] }}">
                                        </div>
                                        @if ($key > 0)
                                            <div class="input-group-btn col-lg-2">
                                                <button class="btn btn-danger faq-btn-remove" type="button"><i
                                                        class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach

                                <div class="input-group control-group img_div">
                                    <div class="col-lg-5">
                                        @error('f_title.*')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @else
                                <div class="input-group control-group img_div">

                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Enter question"
                                            name="f_title[]">
                                    </div>
                                    <div class="col-lg-10 mt-2">
                                        <input type="text" class="form-control" placeholder="Enter answer"
                                            name="f_description[]">
                                    </div>
                                </div>
                            @endif

                            <!-- Add More Image upload field  -->
                            <div class="hide_faq_div" style="width: 100%;display: none;">
                                <div class="control-group input-group clone hide_faq" style="margin-top:10px;">
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" placeholder="Enter question"
                                            name="f_title[]" value="">
                                    </div>
                                    <div class="col-lg-10 mt-2">
                                        <input type="text" class="form-control" placeholder="Enter answer"
                                            name="f_description[]" value="">
                                    </div>
                                    <div class="input-group-btn col-lg-2">
                                        <button class="btn btn-danger faq-btn-remove" type="button"><i
                                                class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                        </div>
                        <div class="form-group row mb-3">
                            <!-- Add More Button -->
                            <div class="input-group-btn col-lg-2">
                                <button class="btn btn-success btn-add-faq-more" type="button"><i
                                        class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                            <!-- End -->
                        </div>
                        {{-- <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Service Description:</label>
                            <textarea class="form-control ckeditor" placeholder="Enter description" name="service_description">@if (isset($edit)){{ $edit->service_description }}@else{{ old('service_description') }}@endif</textarea>
                            @if ($errors->has('service_description'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('service_description') }}</div>
                            @endif
                        </div>
                    </div> --}}
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>App Process Image:</label>
                                <input type="file" class="form-control" name="app_process_image" accept="image/*"
                                    @if (isset($edit)) data-default-file="{{ asset('sitebucket/service') . '/' . $edit->app_process_image }}" @endif>
                                @if ($errors->has('app_process_image'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('app_process_image') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="">Status:</label>
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--solid">
                                        <input type="radio" name="status"
                                            @if (isset($edit) && $edit->status == 'active') checked="" @else checked="" @endif
                                            value="active"> Active
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--solid">
                                        <input type="radio" name="status" value="inactive"
                                            @if (isset($edit) && $edit->status == 'inactive') checked="" @endif> InActive
                                        <span></span>
                                    </label>
                                </div>
                                @if ($errors->has('status'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('status') }}</div>
                                @endif
                            </div>
                            <div class="col-lg-6">
                                <label class="">Is show in Home and Service page?</label>
                                <div class="kt-radio-inline">
                                    <label class="kt-radio kt-radio--solid">
                                        <input type="radio" name="is_show"
                                            @if (isset($edit) && $edit->is_show == 'true') checked="" @else checked="" @endif
                                            value="true"> Yes
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--solid">
                                        <input type="radio" name="is_show" value="false"
                                            @if (isset($edit) && $edit->is_show == 'false') checked="" @endif> No
                                        <span></span>
                                    </label>
                                </div>
                                @if ($errors->has('is_show'))
                                    <div style="display: block;" id="email-error" class="error invalid-feedback">
                                        {{ $errors->first('is_show') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-secondary reset">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="modal fade" id="contactus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content ajax_content"></div>
            </div>
        </div>
    </div>
    <!-- end:: Content -->
@stop

@section('pagescript')
    <!--begin::Page Vendors(used by this page) -->
    <script src="{{ asset('/theme/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

    <script src="{{ asset('js/ckeditor_editor.js') }}"></script>

    <script>
        $(document).ready(function() {
            $(".btn-add-more").click(function() {
                var html = $(".hide_div").html();
                //$(".img_div").after(html);
                $(".quality_row_div").append(html);
                $('.hidden_q_image').last().dropify();
            });

            $("body").on("click", ".btn-remove", function() {
                $(this).parents(".hide").remove();
            });
        });
        $(document).ready(function() {
            $(".btn-add-service-more").click(function() {
                var html = $(".hide_service_div").html();
                //$(".service_div").after(html);
                $(".service_row_div").append(html);
                // $('.hidden_s_image').last().dropify();
                $('.hidden_s_ckeditor').last().ckeditor();
            });

            $("body").on("click", ".service-btn-remove", function() {
                $(this).parents(".hide_service").remove();
            });
        });
        $(document).ready(function() {
            $(".btn-add-faq-more").click(function() {
                var html = $(".hide_faq_div").html();
                //$(".service_div").after(html);
                $(".faq_row_div").append(html);
                // $('.hidden_s_image').last().dropify();
                //$('.hidden_f_ckeditor').last().ckeditor();
            });

            $("body").on("click", ".faq-btn-remove", function() {
                $(this).parents(".hide_faq").remove();
            });
        });
        $(document).ready(function() {

            $(".reset").click(function() {
                $('.kt-form').find("input[type=text], textarea").val("");
            });

            $('[name="image"]').dropify();
            $('[name="app_process_image"]').dropify();
            // $('[name="s_image[]"]').dropify();
            $('.dropify').dropify();

        });

        $(document).on('click', '[name="layout"]', function(event) {
            event.preventDefault();
            $layout = $(this).val();

            @if (isset($edit))
                var url = '{{ route('admin.service.edit', $edit->id) }}';
            @else
                var url = '{{ route('admin.service.create') }}';
            @endif
            window.location.href = url + "?layout=" + $layout;
        });
    </script>
@endsection
