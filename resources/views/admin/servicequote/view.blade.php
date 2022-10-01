@extends('admin.layouts.default')
@section('title', 'Service Quote')
@section('content')

<link href="{{ asset('/theme/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

<!-- begin:: Content Head -->
<div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">View Service Quote</h3>
        </div>
        <div class="kt-subheader__toolbar">
            <a href="{{route('admin.servicequote.index')}}" class="btn btn-default btn-bold"><i class="fa fa-arrow-left"></i> Back</a>
        </div>
    </div>
</div>
<!-- end:: Content Head -->

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__body"> 
            <!--begin: Datatable -->
            <table class="table data-table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th>Service</th>
                        <td>{{ (isset($servicequote->service->title)) ? $servicequote->service->title : "-" }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $servicequote->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $servicequote->email }}</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $servicequote->phone }}</td>
                    </tr>
                    <tr>
                        <th>Company Name</th>
                        <td>{{ $servicequote->company_name }}</td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td>{{ $servicequote->message }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ date('Y-m-d H:i:s',strtotime($servicequote->created_at)) }}</td>
                    </tr>
                </tbody>
            </table>
            <!--end: Datatable -->
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
@endsection