<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <title>@yield('title')</title>
   @include('front.layouts.includes.head')
   @stack('css')
</head>
<body class="home page-template page-template-tpl-home-page page-template-tpl-home-page-php page page-id-6 fl-builder fl-builder-breakpoint-large">
   <div id="main">
      @yield('content')
   </div>
   <a id="back-to-top" class=""> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="20" height="20"><path d="M352 352c-8.188 0-16.38-3.125-22.62-9.375L192 205.3l-137.4 137.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25C368.4 348.9 360.2 352 352 352z" fill="#fff"/></svg> </a>
   @stack('js')
</body>
</html>