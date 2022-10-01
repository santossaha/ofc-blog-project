<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
    <link href="{{ asset('admin/assets/css/demo1/pages/login/login-4.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Fonts -->
    <style>
        .error{
            color: red;
        }
    </style>
    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset('admin/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet"
          type="text/css" />
    <!--begin:: Global Optional Vendors -->
    <link href="{{ asset('admin/assets/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" /> <link href="{{ asset('admin/assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('admin/assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('admin/assets/css/demo1/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Layout Skins -->
    {{--<link rel="shortcut icon" href="{{ asset('admin/assets/media/logos/favicon.ico') }}" />--}}
</head>
<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
             style="background-image: url({{ asset('admin/assets/media/bg/bg-9.jpg') }});">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__logo">
                            <a href="#">
                                <h1> <i class="flaticon2-user"></i></h1>
                            </a>
                        </div>
                        <div class="kt-login__signin">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Sign In </h3>
                            </div>

                            <form id="login" class="kt-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="finput-group">
                                    <input id="email" type="email" placeholder="Email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}"  autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                                <div class="finput-group">
                                    <input id="password" type="password" placeholder="Password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                                <div class="row kt-login__extra">
                                    <div class="col">
                                        <label class="kt-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            {{ __('Remember Me') }}
                                            <span></span>
                                        </label>
                                    </div>
                                    @if (Route::has('password.request'))
                                        <div class="col kt-align-right">
                                            <a href="{{ route('password.request') }}" id="kt_login_forgot"
                                               class="kt-login__link">Forget Password ?</a>
                                        </div>
                                    @endif
                                </div>

                                <div class="kt-login__actions">
                                    <button type="submit" class="btn btn-brand btn-pill kt-login__btn-primary">Sign In</button>
                                </div>

                            </form>
                        </div>
                        <div class="kt-login__forgot">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Forgotten Password ?</h3>
                                <div class="kt-login__desc">Enter your email to reset your password:</div>
                            </div>
                            <form class="kt-form" id="forget" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class=" input-group">
                                    <input id="kt_email" type="email" placeholder="Email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}"  autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                                <label class="error" id="kt_email-error"  for="kt_email">
                                </label>
                                <div class="kt-login__actions">
                                    <button type="submit"
                                            class="btn btn-brand btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                    <button id="kt_login_forgot_cancel"
                                            class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<script src="{{ asset('admin/assets/vendors/custom/js/vendors/jquery-validation.init.js') }}" type="text/javascript">
</script>
<script src="{{ asset('admin/assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('admin/assets/js/demo1/scripts.bundle.js') }}" type="text/javascript"></script>


<script>
    $('form').attr('autocomplete', 'off');
</script>



@yield('script')
<script src="{{ asset('admin/assets/js/demo1/pages/login/login-general.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"></script>
<script type="application/javascript">
    $(function() {
        $("#login").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                email: {
                    required: true,
                    email:true,
                },
                password:{
                    required:true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
<script type="application/javascript">
    $(function() {
        $("#forget").submit(function(e) {
            e.preventDefault();
        }).validate({
            rules: {
                email: {
                    required: true,
                    email:true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
@if((Request::segment(1) == 'password') && (Request::segment(2) == 'reset'))
@else
    @include('layouts.message')
@endif
</body>
</html>
