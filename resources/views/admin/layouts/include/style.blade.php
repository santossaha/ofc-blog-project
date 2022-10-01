<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
<script>
WebFont.load({
    google: {
        "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
    },
    active: function() {
        sessionStorage.fonts = true;
    }
});
</script>
<!--end::Fonts -->

<!--begin:: Global Mandatory Vendors -->
<link href="{{ asset('admin/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="{{ asset('admin/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet" type="text/css" />

{{--@include('admin.layouts.include.global_optional_css');--}}
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles(used by all pages) -->
<link href="{{ asset('admin/assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles -->

<!--begin::Layout Skins(used by all pages) -->
<link href="{{ asset('admin/assets/css/demo1/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/css/demo1/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/css/demo1/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/css/demo1/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
<!--end::Layout Skins -->

<link href="{{ asset('admin/assets/css/demo1/custom-style.css') }}" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    var aurl = "{{ url('/') }}/admin/";
</script>
