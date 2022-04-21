<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from carrgo-html.netlify.app/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 21:02:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CarrGo - Ridesharing Taxi HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('front/assets/plugins/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/main/css/style.css') }}">
</head>

<body class="striped-bg theme-3">

    <header class="theme-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('front/assets/images/logo-main.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="theme-2">

        <div class="footer-nav-div div-padding theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">
                            <a href="index.html"><img src="{{ asset('front/assets/images/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="google-p"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="app-download-box">
                            <a href="#"><img src="{{ asset('front/assets/images/icon/google-play.jpg') }}" alt="Google play"></a>
                            <a href="#"><img src="{{ asset('front/assets/images/icon/apple-store.jpg') }}" alt="Apple store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-div theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021 by Tortoiz. All Right Reserved.</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- jQuery -->
    <script src="{{ asset('front/assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/OwlCarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/assets/plugins/counterup/jquery.counterup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&amp;sensor=true"></script>
    <script src="{{ asset('front/assets/plugins/gmap3/gmap3.min.js') }}"></script>
    <!-- custom scripts -->
    <script src="main/js/scripts.js') }}"></script>


</body>


<!-- Mirrored from carrgo-html.netlify.app/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 21:02:30 GMT -->
</html>