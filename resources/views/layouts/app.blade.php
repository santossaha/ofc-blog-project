<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <!-- <script src="{{ asset('admin/js/app.js') }}" defer></script> --> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link href="{{ asset('admin/assets/css/demo1/pages/login/login-4.css') }}" rel="stylesheet" type="text/css" />

    @include('layouts.style')

</head>

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                style="background-image: url({{ asset('admin/assets/media/bg/bg-2.jpg') }});">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.script')
    @yield('script')
    <script src="{{ asset('admin/assets/js/demo1/pages/login/login-general.js') }}" type="text/javascript"></script>
    @if((Request::segment(1) == 'password') && (Request::segment(2) == 'reset'))
    @else
    @include('layouts.message')
@endif
</body>

</html>
