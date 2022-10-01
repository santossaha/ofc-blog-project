<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.layouts.includes.head')
    </head>
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
        @include('admin.layouts.includes.headerlogo')
        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
                @include('admin.layouts.includes.sidebar')
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                    @include('admin.layouts.includes.header')
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                        <div class="kt-container  kt-container--fluid ">
                            {{-- @include('admin.layouts.includes.message') --}}
                        </div>

                        @yield('content')

                        <!-- begin::Scrolltop -->
                        <div id="kt_scrolltop" class="kt-scrolltop">
                            <i class="fa fa-arrow-up"></i>
                        </div>
                    </div>
                    @include('admin.layouts.includes.footer')
                </div>
            </div>
        </div>
        @include('admin.layouts.includes.scriptlink')
        @yield('pagescript')
    </body>
</html>
