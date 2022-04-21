@extends('layouts.master')

@section('title', 'Page d\'acceuil')

@section('content')
<div class="hero-area hero-bg-light-yellow">
    <div class="hero-blob">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="visual"
            viewBox="0 0 960 540" width="960" height="540" version="1.1">
            <g transform="translate(-19.958786364683874 -119.45603407032678)">
                <path
                    d="M354.6 -312.6C469.8 -239.5 580.4 -119.7 623.9 43.5C667.5 206.8 644 413.7 528.8 530.7C413.7 647.7 206.8 674.8 3 671.8C-200.8 668.8 -401.6 635.6 -506 518.6C-610.3 401.6 -618.2 200.8 -591.3 26.9C-564.4 -147.1 -502.8 -294.2 -398.5 -367.3C-294.2 -440.4 -147.1 -439.6 -13.7 -425.9C119.7 -412.2 239.5 -385.7 354.6 -312.6"
                    fill="#f7bc00" />
            </g>
        </svg>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="hero-area-slider" class="hero-area-slider owl-carousel">
                    <div class="single-slider-item">
                        <div class="hero-area-left">
                            <h1>Earn. Connect. Contribute to Society</h1>
                            <p>Partner with us to drive your own livelihood and more.</p>
                            <a href="signup.html" class="button button-dark big">Sign up Now</a>
                        </div>
                        <div class="hero-area-right">
                            <img src="assets/images/home/1.png" alt="">
                        </div>
                    </div>
                    <div class="single-slider-item">
                        <div class="hero-area-left">
                            <h1>Earn. Connect. Contribute to Society</h1>
                            <p>Partner with us to drive your own livelihood and more.</p>
                            <a href="signup.html" class="button button-dark big">Sign up Now</a>
                        </div>
                        <div class="hero-area-right">
                            <img src="assets/images/home/1.png" alt="">
                        </div>
                    </div>
                    <div class="single-slider-item">
                        <div class="hero-area-left">
                            <h1>Earn. Connect. Contribute to Society</h1>
                            <p>Partner with us to drive your own livelihood and more.</p>
                            <a href="signup.html" class="button button-dark big">Sign up Now</a>
                        </div>
                        <div class="hero-area-right">
                            <img src="assets/images/home/1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="div-padding how-work-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="div-title text-center">How It Work</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 d-none d-lg-block">
                <div class="icons-div">
                    <div class="single-icon">
                        <img src="assets/images/icon/1.png" alt="">
                    </div>
                    <div class="single-icon">
                        <img src="assets/images/icon/2.png" alt="">
                    </div>
                    <div class="single-icon">
                        <img src="assets/images/icon/3.png" alt="">
                    </div>
                    <div class="single-icon">
                        <img src="assets/images/icon/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-icon text-center m-b-10 d-block d-lg-none">
                    <img src="assets/images/icon/1.png" alt="">
                </div>
                <div class="how-work-text">
                    <h4>Book in Just 2 Tabs</h4>
                    <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae
                        sapien.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-icon text-center m-b-10 d-block d-lg-none">
                    <img src="assets/images/icon/2.png" alt="">
                </div>
                <div class="how-work-text">
                    <h4>Get a Driver</h4>
                    <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae
                        sapien.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-icon text-center m-b-10 d-block d-lg-none">
                    <img src="assets/images/icon/3.png" alt="">
                </div>
                <div class="how-work-text">
                    <h4>Track your Driver</h4>
                    <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae
                        sapien.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-icon text-center m-b-10 d-block d-lg-none">
                    <img src="assets/images/icon/4.png" alt="">
                </div>
                <div class="how-work-text">
                    <h4>Arrive safely</h4>
                    <p>Curabitur ac quam aliquam urna vehicula semper sed vel elit. Sed et leo purus. Vivamus vitae
                        sapien.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us-area bg-2 div-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="div-title">About us</h2>
                <div class="about-us-text">
                    <h4>Trusted Cab Services in All World</h4>
                    <p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec,
                        auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod
                        magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis
                        fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget
                        efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui
                        nunc. Sed quis sagittis lorem, in blandit nibh.</p>
                    <a href="#" class="button button-dark tiny">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="download-div div-padding p-b-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="div-title text-center">Download CarrGo</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5">
                <div class="download-qrcode">
                    <img src="assets/images/qr.png" alt="">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="download-text">
                    <h2>Download the cabgo mobile application</h2>
                    <p>Nunc volutpat tincidunt est a scelerisque. Aliquam erat volutpat. Donec varius ex in justo
                        pharetra, nec mollis erat porta. Donec sit amet facilisis neque. In hac habitasse platea
                        dictumst.</p>
                </div>
                <div class="download-buttons">
                    <a href="#"><img src="assets/images/download-1.png" alt=""></a>
                    <a href="#"><img src="assets/images/download-2.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="div-padding testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="div-title text-center">What about passanger says</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div id="testimonial-carousel-1" class="testimonial-carousel owl-carousel">
                    <div class="single-testimonial-item text-center">
                        <img src="assets/images/client-1.png" alt="" class="client-img">
                        <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a
                            metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum
                            enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                        <h4 class="client-name">John Doe</h4>
                        <p class="theme-color">Passanger</p>
                    </div>
                    <div class="single-testimonial-item text-center">
                        <img src="assets/images/client-1.png" alt="" class="client-img">
                        <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a
                            metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum
                            enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                        <h4 class="client-name">John Doe</h4>
                        <p class="theme-color">Passanger</p>
                    </div>
                    <div class="single-testimonial-item text-center">
                        <img src="assets/images/client-1.png" alt="" class="client-img">
                        <p class="testimonial-text">Quisque venenatis sit amet libero vel laoreet. Maecenas et eros a
                            metus vestibulum rhoncus. Aenean varius tincidunt libero at egestas. Aliquam eget interdum
                            enim. Nulla malesuada dolor at turpis blandit sagittis. </p>
                        <h4 class="client-name">John Doe</h4>
                        <p class="theme-color">Passanger</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="div-padding blog-div">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="div-title text-center">Our Blog</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-blog-item">
                    <div class="blog-img">
                        <img src="assets/images/blog/1.jpg" alt="">
                    </div>
                    <div class="blog-text">
                        <h4 class="blog-heading">Pellentesque et finibus lacus, vitae
                            malesuada tortor.</h4>
                        <p class="blog-time">june 13, 2021</p>
                        <a href="#" class="button button-dark tiny">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-blog-item">
                    <div class="blog-img">
                        <img src="assets/images/blog/2.jpg" alt="">
                    </div>
                    <div class="blog-text">
                        <h4 class="blog-heading">Pellentesque et finibus lacus, vitae
                            malesuada tortor.</h4>
                        <p class="blog-time">june 13, 2021</p>
                        <a href="#" class="button button-dark tiny">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                <div class="single-blog-item">
                    <div class="blog-img">
                        <img src="assets/images/blog/3.jpg" alt="">
                    </div>
                    <div class="blog-text">
                        <h4 class="blog-heading">Pellentesque et finibus lacus, vitae
                            malesuada tortor.</h4>
                        <p class="blog-time">june 13, 2021</p>
                        <a href="#" class="button button-dark tiny">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
