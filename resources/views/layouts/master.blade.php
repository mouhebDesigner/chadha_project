<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from carrgo-html.netlify.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 21:01:45 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('front/assets/plugins/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/main/css/style.css') }}">
    <style>
       
    </style>
</head>

<body class="theme-1"  oncontextmenu="return false">

    @include('includes.header')
    @yield('content')
    @include('includes.footer')


    <!-- jQuery -->
    <script src="{{ asset('front/assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/OwlCarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&amp;sensor=true">
    </script>
    <script src="{{ asset('assets/plugins/gmap3/gmap3.min.js') }}"></script>
    <!-- custom scripts -->
    <script src="{{ asset('front/main/js/scripts.js') }}"></script>


</body>
