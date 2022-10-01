<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->


<!--begin:: Global Mandatory Vendors -->
<script src="{{ asset('admin/assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>


<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
{{--@include('admin.layouts.include.global_optional_js');--}}
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('admin/assets/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->




<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<!-- <script src="{{ asset('admin/assets/js/demo1/pages/dashboard.js') }}" type="text/javascript"></script> -->

<!--end::Page Scripts -->

<script src="{{ asset('admin/assets/js/pages/commonfunction.js') }}"></script>
@stack('page_level_script')

<script>
jQuery(document).ready(function () {
    @if (!empty($funinit))
    @foreach ($funinit as $cjs)
        {{$cjs}};
    @endforeach
    @endif
});

$('form').attr('autocomplete', 'off');
</script>
