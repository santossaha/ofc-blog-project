<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1"><!-- Place favicon.ico in the root directory -->
 @stack('meta')
    <title>{{config('settings.website_name')}} - Best Custom Mobile App Development Company in India USA</title><!-- themeforest:css -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="{{getImage(config('settings.favicon_icon'))}}">
@include('front.layout.include.style')
</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- ./Making stripe menu navigation -->
  @include('front.layout.include.head')
    <main class="overflow-hidden">
        <!-- Alternative 2 Heading -->
       <!-- ('front.layout.include.header') -->
        <!-- ./Partners -->
        @yield('content')

  <!-- ./Footer - Five Columns -->
 @include('front.layout.include.footer')

    </main><!-- themeforest:js -->
@include('front.layout.include.script')
    <!-- endinject -->
    @stack('js')
</body>

</html>
