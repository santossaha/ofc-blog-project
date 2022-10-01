@section('title',$title)
@section('style')
    <link href="{{ asset('admin/assets/vendors/custom/datatables/datatables.bundle.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <h2 class=" kt-portlet__head-title pt-2">
                  {{ $title}}
                </h2>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        @if($route!=null)
                        &nbsp;
                        <a href="{{ $route}}" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            Add {{ $title }}
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">
            <table id="users" width="100%" class="table data-table table-striped- table-bordered table-hover table-checkable">
                <thead>
                    <tr>
                    {{ $slot }}
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
