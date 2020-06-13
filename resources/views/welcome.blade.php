<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Appai Home 3</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" href="{{asset("storage/images/favicon0.ico")}}">
    <!-- all additional css -->
    <link rel="stylesheet" href="{{asset("css/bootstra.css")}}">
    <link rel="stylesheet" href="{{asset("css/elements.css")}}">
    <link rel="stylesheet" href="{{asset("css/style000.css")}}">
    <link rel="stylesheet" href="{{asset("css/responsi.css")}}">
    <!-- modernizr js -->
    <script src="{{asset("js/moderniz.js")}}"></script>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- prelaoder start -->
<div id="preloader-wrapper">
    <div class="preloader-wave-effect"></div>
</div>
<!-- prelaoder end -->
<!-- page wrapper start -->
<div id="page-top" class="wrapper">
    <!-- header area start -->
@include("parts.header")
    <!-- slider area end -->
    <!-- app features area start -->
@include("parts.features")
    <!-- app features area end -->
    <!-- app about area start -->
@include("parts.about")
    <!-- app about area end -->
    <!-- how it work area start -->
@include("parts.works")
    <!-- how it work area end -->
    <!-- awesome feature area start -->
@include("parts.awesome")
    <!-- awesome feature area end -->
    <!-- promo video area start -->
    <div id="promo-video-area" class="home-style-3">
        <div class="container">
            <div class="video-demo-image wow fadeIn" data-wow-duration="2s">
                <div class="overlay-grad-one">
                    <img src="{{asset("storage/images/video-de.jpg")}}" alt="" class="img-responsive center-block">
                </div>
                <div class="video-play-icon">
                    <a href="http://www.youtube.com/watch?v=k-R6AFn9-ek"><i class="icofont icofont-ui-play"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- promo video area end -->
    <!-- fun fact area start -->
@include("parts.facts")
    <!-- fun fact area end -->
    <!-- app screenshot area start -->
@include("parts.screenshots")
    <!-- app screenshot area end -->
    <!-- team area start -->
@include("parts.team")
    <!-- team area end -->
    <!-- testimonial area start -->
@include("parts.testimonials")
    <!-- testimonial area end -->
    <!-- pricing table area start -->

    <!-- pricing table area end -->
    <!-- frequently asked questions area start -->
@include("parts.faq")
    <!-- frequently asked questions area end -->
    <!-- app download area start -->
    <section id="app-download-area" class="home-style-3 blue-grad-bg ptb-150">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="download-app">
                        <h1>Download Appai Taday</h1>
                        <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli incididunt ut labore Lorem ipsum madolor sit amet, consectetur adipisicing incididunt.</p>
                        <div class="button-group store-buttons">
                            <a href="" class="btn btn-bordered-white">
                                <i class="icofont icofont-brand-android-robot dsp-tc"></i>
                                <p class="dsp-tc">available on
                                    <br> <span>Google Store</span></p>
                            </a>
                            <a href="" class="btn btn-bordered-white">
                                <i class="icofont icofont-brand-apple dsp-tc"></i>
                                <p class="dsp-tc">available on
                                    <br> <span>Apple Store</span></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- app download area end -->
    <!-- blog area start -->
@include("parts.blog")
    <!-- blog area end -->
    <!-- subscription area start -->
    <section id="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="subscribe-wrapper ptb-40">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="subscribe-text">
                                    <h2>Subscribe Now</h2>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="subscribe-box">
                                    <form class="subscription-form" method="POST" action="http://marveltheme.com/tf/html/appai/appai/php/subscribe.php">
                                        <input type="email" class="form-control" id="subscribe-input" name="subscribe-input" placeholder="Enter Your Email Address">
                                        <button class="email-submit-btn" type="submit"><i class="icofont icofont-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscription area end -->
    <!-- contact area start -->
@include("parts.contact")
    <!-- map area end -->
    <!-- footer area start -->
@include("parts.footer")
    <!-- footer area end -->
</div>
<!-- page wrapper end -->
<!-- All Js files-->
<script src="{{asset("js/jquery-1.js")}}"></script>
<script src="{{asset("js/bootstra.js")}}"></script>
<script src="{{asset("js/slick000.js")}}"></script>
<script src="{{asset("js/plugins0.js")}}"></script>
<script src="{{asset("js/ajax-mai.js")}}"></script>
<script src="{{asset("js/ajax-sub.js")}}"></script>
<!-- map js -->
<script src="{{asset("js/js000000.js")}}"></script>
<script src="{{asset("js/appai000.js")}}"></script>
<script src="{{asset("js/main0000.js")}}"></script>
</body>

</html>

