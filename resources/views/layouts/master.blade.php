<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Jeffrey Davidson - Software Engineer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/color.css') }}">

        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            @include('partials.navigation')
            <!-- wrapper-->
            <div id="wrapper" class="{{ !Request::is('/') ? 'single-page-wrap' : '' }}">
                @yield('scroller')
                @yield('hero')
                @yield('content')
                <!-- footer-->
                <div class="height-emulator fl-wrap"></div>
                @include('partials.footer')
                <!-- footer end-->
                <!-- contact-btn -->
                <a class="contact-btn color-bg" href="#"><i class="fal fa-envelope"></i><span>Get in Touch</span></a>
                <!-- contact-btn end -->
            </div>
            <!--   content end -->
            <!-- share-wrapper -->
            <div class="share-wrapper isShare">
                <div class="share-title"><span>Share</span></div>
                <div class="close-share soa"><span>Close</span><i class="fal fa-times"></i></div>
                <div class="share-inner soa">
                    <div class="share-container"></div>
                </div>
            </div>
            <!-- share-wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
