<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>@yield('title')</title>
    @include('front.layouts.includes.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('css')
    <style>
        footer .footer-bottom .footer-menu ul li {
            display: inline-block;
            margin-left: 15px !important;
        }

    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5T6R29K');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body onload="deletechach()"
    class="home page-template page-template-tpl-home-page page-template-tpl-home-page-php page page-id-6 fl-builder fl-builder-breakpoint-large">
    <div id="main">
        @include('front.layouts.includes.header')
        @yield('content')
        @include('front.layouts.includes.footer')
    </div>
    <a id="back-to-top" class=""> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="20" height="20"><path d="M352 352c-8.188 0-16.38-3.125-22.62-9.375L192 205.3l-137.4 137.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25C368.4 348.9 360.2 352 352 352z" fill="#fff"/></svg> </a>
    @include('front.layouts.includes.script')
    @stack('js')
    <script>
        function deletechach() {
            var allCookies = document.cookie.split(';');

            // The "expire" attribute of every cookie is
            // Set to "Thu, 01 Jan 1970 00:00:00 GMT"
            for (var i = 0; i < allCookies.length; i++)
                document.cookie = allCookies[i] + "=;expires=" +
                new Date(0).toUTCString();

            displayCookies.innerHTML = document.cookie;

        }
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T6R29K" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
        //  Default Statcounter code for Expert App Devs
        var sc_project = 12718685;
        var sc_invisible = 1;
        var sc_security = "5345caca";
    </script>
    <script  src="https://www.statcounter.com/counter/counter.js" async></script>
    <noscript>
        <div class="statcounter"><a title="Web Analytics
    Made Easy - Statcounter" href="https://statcounter.com/" target="_blank"><img class="statcounter"
                    src="https://c.statcounter.com/12718685/0/5345caca/1/" alt="Web Analytics Made Easy - Statcounter"
                    referrerPolicy="no-referrer-when-downgrade"></a></div>
    </noscript>
    <!-- End of Statcounter Code -->
</body>
</html>
