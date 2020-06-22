<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    @include("catalog.css")

    <title>Qatar Catalog</title>


    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
<div class="page sub-page">
    <!--*********************************************************************************************************-->
    <!--************ HERO ***************************************************************************************-->
    <!--*********************************************************************************************************-->
    <section class="hero">
        <div class="hero-wrapper">
            <!--============ Secondary Navigation ===============================================================-->
            @include("catalog.navbar")

            <div class="page-title">
                <div class="container">
                    <h1>Sign In</h1>
                </div>
                <!--end container-->
            </div>
            <!--============ End Page Title =====================================================================-->
            <div class="background"></div>
            <!--end background-->
        </div>
        <!--end hero-wrapper-->
    </section>
    <!--end hero-->

    <!--*********************************************************************************************************-->
    <!--************ CONTENT ************************************************************************************-->
    <!--*********************************************************************************************************-->
@yield("content")
    <!--end content-->

    <!--*********************************************************************************************************-->
    <!--************ FOOTER *************************************************************************************-->
    <!--*********************************************************************************************************-->
    <section class="footer">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <a href="" class="brand">
                            <img src="index_files/logo0000.png" alt="">
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet
                            fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                        </p>
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-3">
                        <h2>Navigation</h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="">Home</a>
                                        </li>
                                        <li>
                                            <a href="">Listing</a>
                                        </li>
                                        <li>
                                            <a href="">Pages</a>
                                        </li>
                                        <li>
                                            <a href="">Extras</a>
                                        </li>
                                        <li>
                                            <a href="">Contact</a>
                                        </li>
                                        <li>
                                            <a href="">Submit Ad</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="">My Ads</a>
                                        </li>
                                        <li>
                                            <a href="">Sign In</a>
                                        </li>
                                        <li>
                                            <a href="">Register</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-4">
                        <h2>Contact</h2>
                        <address>
                            <figure>
                                124 Abia Martin Drive<br>
                                New York, NY 10011
                            </figure>
                            <br>
                            <strong>Email:</strong> <a href="">hello@example.com</a>
                            <br>
                            <strong>Skype: </strong> Craigs
                            <br>
                            <br>
                            <a href="http://themestarz.net/html/craigs/contact.html" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                        </address>
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <div class="background">
                <div class="background-image original-size">
                    <img src="index_files/footer-b.jpg" alt="">
                </div>
                <!--end background-image-->
            </div>
            <!--end background-->
        </div>
    </section>
    <!--end footer-->
</div>
<!--end page-->

@include("catalog.js")

</body>
</html>

<!-- This document saved from http://themestarz.net/html/craigs/sign-in.html -->
