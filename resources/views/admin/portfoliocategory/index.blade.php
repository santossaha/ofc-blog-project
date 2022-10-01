@extends('admin.layouts.default')
@section('title', 'Portfolio Category List')
@section('content')

    <link href="{{ asset('/theme/vendors/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Portfolio Category Management</h3>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="{{ route('admin.portfoliocategory.create') }}" class="btn btn-primary btn-bold"><i
                        class="fa fa-plus"></i> Add New</a>
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
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Sort name</th>
                            {{-- <th>Slug</th> --}}
                            <th>Status</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <!--end: Datatable -->
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
    <script>
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': "{{ route('admin.portfoliocategory.index') }}",
                    'type': 'get',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'sort_name',
                        name: 'sort_name'
                    },
                    /*{data: 'slug', name: 'slug'},*/
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
                initComplete: function() {

                }
            });

            $(document).on('click', '.status_change', function() {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: id,
                    type: 'GET',
                    success: function(result) {
                        if (result.status == true) {
                            toastr.success(result.Message);
                            table.draw(true);
                        } else {
                            toastr.error(result.Message);
                        }
                    }
                });
            });

            $(document).on('click', '.delete_portfoliocategory', function() {
                var id = $(this).attr('data-id');
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    animation: false,
                    customClass: 'animated tada',
                    confirmButtonText: 'Yes, delete it!'
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: id,
                            type: 'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(result) {
                                if (result.status == true) {
                                    toastr.success(result.Message);
                                    table.draw(true);
                                } else {
                                    toastr.error(result.Message);
                                }
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
