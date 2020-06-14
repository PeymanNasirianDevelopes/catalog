<header>
    <nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="1">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><img src="{{asset("storage/images/$header->logo")}}" alt="logo" class="img-responsive"></a>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#page-top">Home</a></li>
                    <li><a href="#app-about-area">About</a></li>
                    <li><a href="">Catalog</a></li>
                    <li><a href="#app-screenshot-area">Screenshots</a></li>
                    <li><a href="#faq-area">FAQs</a></li>
                    <li><a href="#blog-area">Blog</a></li>
                    <li><a href="#contact-area">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- header area end -->
<!-- slider area start -->
<section id="slider-area" class="home-style-3 blue-grad-bg">
    <div class="slider-wrapper">


        <div class="slide one">
            <div class="container">
                <div class="slider-text wow fadeIn">
                    <h1 data-animation="fadeInDown" data-delay="0.3s">{!! $header->title !!}</h1>
                    <p data-animation="fadeInDown" data-delay="0.8s">{!! $header->content !!}</p>


                    <div class="button-group" data-animation="fadeInDown" data-delay="1.3s">
                        <a href="" class="btn btn-bordered-white">Download</a>
                        <a href="" class="btn btn-bordered-white hidden-xs">Learn More..</a>
                    </div>
                </div>
                <div class="slider-image" data-animation="fadeInRight" data-delay=".3s">
                    <img src="{{asset("storage/images/$header->phone_image")}}" alt="">
                </div>
            </div>
        </div>


    </div>
    <div class="app-users-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-10 col-lg-offset-2">
                    <div class="single-usage media">
                        <div class="usage-icon media-left">
                            <i class="icofont icofont-brand-android-robot"></i>
                        </div>
                        <div class="useges-quantity media-body">
                            <h2>1200</h2>
                            <p>Android User</p>
                        </div>
                    </div>
                    <div class="single-usage media">
                        <div class="usage-icon media-left">
                            <i class="icofont icofont-brand-windows"></i>
                        </div>
                        <div class="useges-quantity media-body">
                            <h2>1200</h2>
                            <p>Windows User</p>
                        </div>
                    </div>
                    <div class="single-usage media">
                        <div class="usage-icon media-left">
                            <i class="icofont icofont-brand-apple"></i>
                        </div>
                        <div class="useges-quantity media-body">
                            <h2>1200</h2>
                            <p>Apple User</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
