@extends('admin.layouts.default')
@section('title', 'Page Detail')
@section('content')

<link href="{{ asset('/theme/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />


<!-- begin:: Content Head -->
<div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">@if(isset($edit)) Edit @else Add New @endif Page Detail</h3>
        </div>
        <div class="kt-subheader__toolbar">
            <a href="{{route('admin.pagedetail.index')}}" class="btn btn-default btn-bold"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
</div>
<!-- end:: Content Head -->

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__body">
            <form method="POST" enctype="multipart/form-data" action="{{route('admin.pagedetail.store')}}" class="kt-form kt-form--label-right" _lpchecked="1">
                @csrf
                @if(isset($edit))
                <input type="hidden" name="id" value="{{ $edit->id }}">
                @endif
                 <div class="kt-portlet__body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Page:</label>
                            <select class="form-control" name="page_id">
                                <option value="">Select page</option>
                                @foreach($page as $key)
                                    @if($key->status == "active")
                                        <option {{ (isset($edit) && $edit->page_id == $key->id) ? "selected" : "" }} {{ (old('page_id') == $key->id) ? "selected" : "" }} value="{{ $key->id }}">{{ $key->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @if ($errors->has('page_id'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('page_id') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Meta Title:</label>
                            <input type="text" class="form-control" placeholder="Enter meta title" name="meta_title" value="{{ (isset($edit)) ? $edit->meta_title : old('meta_title')  }}">
                            @if ($errors->has('meta_title'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('meta_title') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Meta Keywords:</label>
                            <input type="text" class="form-control" placeholder="Enter meta keyword" name="meta_keyword" value="{{ (isset($edit)) ? $edit->meta_keyword : old('meta_keyword')  }}">
                            @if ($errors->has('meta_keyword'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('meta_keyword') }}</div>
                            @endif
                        </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Meta Description:</label>
                            <input type="text" class="form-control" placeholder="Enter meta description" name="meta_description" value="{{ (isset($edit)) ? $edit->meta_description : old('meta_description')  }}">
                            @if ($errors->has('meta_description'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('meta_description') }}</div>
                            @endif
                        </div> 
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Meta Robots:</label>
                            <input type="text" class="form-control" placeholder="Enter meta robots" name="meta_robots" value="{{ (isset($edit)) ? $edit->meta_robots : old('meta_robots')  }}">
                            @if ($errors->has('meta_robots'))
                            <div style="display: block;" id="email-error" class="error invalid-feedback">{{ $errors->first('meta_robots') }}</div>
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

    <div class="modal fade" id="contactus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<script>
    $(document).ready(function(){

        $(".reset").click(function () {
            $('.kt-form').find("input[type=text], textarea").val("");
        });
    });
</script>
@endsection