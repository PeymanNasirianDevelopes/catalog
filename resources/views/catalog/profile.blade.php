<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

@include("catalog.css")

	<title>Craigs - Easy Buy & Sell Listing HTML Template</title>


<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>
    <div class="page sub-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
@include("catalog.navbar")
                <!--============ End Main Navigation ================================================================-->
                <!--============ Hero Form ==========================================================================-->

                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>My Profile</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
             @include("catalog.sidebar")
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <form class="form" action="{{url("catalog/edit_profile")}}/{{auth()->user()->id}}" method="post" enctype="multipart/form-data">
                                @csrf

                                    {{method_field("PUT")}}
                                <input type="hidden" name="token" value="{{auth()->user()->email_token}}" />

                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Personal Information</h2>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title" class="col-form-label">Title</label>
                                                        <select name="gender" id="title" data-placeholder="Title">
                                                            <option value="">Title</option>
                                                            <option value="male" @if(auth()->user()->gender=="male") selected @endif>Mr</option>
                                                            <option value="female"@if(auth()->user()->gender=="female") selected @endif>Mrs</option>
                                                        </select>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label required">Your Name</label>
                                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" value="{{auth()->user()->name}}" required>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                            </div>
                                            <!--end row-->
                                            <div class="form-group">
                                                <label for="location" class="col-form-label required">Your Location</label>
                                                <input name="location" type="text" class="form-control" id="input-location2" placeholder="Your Location" value="{{auth()->user()->location}}" required>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="about" class="col-form-label">More About You</label>
                                                <textarea name="about" id="about" class="form-control" rows="4">{{auth()->user()->about}}</textarea>
                                            </div>
                                            <!--end form-group-->
                                        </section>

                                        <section>
                                            <h2>Contact</h2>
                                            <div class="form-group">
                                                <label for="phone" class="col-form-label">Phone</label>
                                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone" value="{{auth()->user()->phone}}">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input name="email" disabled type="email" class="form-control" id="email" placeholder="Your Email" value="{{auth()->user()->email}}">
                                            </div>
                                            <!--end form-group-->
                                        </section>



                                        <section class="clearfix">
                                            <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                        </section>
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="profile-image">
                                            <div class="image background-image">
                                                <img src="{{asset("storage/profile")}}/{{auth()->user()->image}}" alt="">
                                            </div>
                                            <div class="single-file-input">
                                                <input type="file" id="user_image" name="image">
                                                <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        <footer class="footer">
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
        </footer>
        <!--end footer-->
    </div>
    <!--end page-->

@include("catalog.js")

</body>
</html>

<!-- This document saved from http://themestarz.net/html/craigs/my-profile.html -->
