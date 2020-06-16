
        <!--============ Secondary Navigation ===============================================================-->
        <div class="secondary-navigation">
            <div class="container">

                @if(auth()->user())
                    <ul class="left">
                        <li>
                            <span>
                                <i class="fa fa-phone"></i> +1 123 456 789
                            </span>
                        </li>
                    </ul>
                    <ul class="center">
                        <li>
                            <span>
                                Welcome {{auth()->user()->name}}
                            </span>
                        </li>
                    </ul>
                    <!--end left-->
                    <ul class="right">
                        <li>
                            <a href="{{url("catalog/ads_list")}}">
                                <i class="fa fa-heart"></i>My Ads
                            </a>
                        </li>
                        <li>
                            <a href="{{url("catalog/profile")}}">
                                <i class="fa fa-user"></i>profile
                            </a>
                        </li>
                        <li>
                            <a href="{{url("/logout")}}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out"></i>Log out</a>


                        </li>
                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>


                @else

                    <ul class="left">
                        <li>
                            <span>
                                <i class="fa fa-phone"></i> +1 123 456 789
                            </span>
                        </li>
                    </ul>
                    <!--end left-->
                    <ul class="right">

                        <li>
                            <a href="{{url("catalog/login")}}">
                                <i class="fa fa-sign-in"></i>Sign In
                            </a>
                        </li>
                        <li>
                            <a href="{{url("catalog/register")}}">
                                <i class="fa fa-pencil-square-o"></i>Register
                            </a>
                        </li>
                    </ul>

            @endif
            <!--end right-->
            </div>
            <!--end container-->
        </div>
        <!--============ End Secondary Navigation ===========================================================-->
        <!--============ Main Navigation ====================================================================-->
        <div class="main-navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                    <a class="navbar-brand" href="http://themestarz.net/html/craigs/index.html">
                        <img src="{{asset("storage/images/logo0000.png")}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <!--Main navigation list-->
                        <ul class="navbar-nav">
                            <li class="nav-item active has-child">
                                <a class="nav-link" href="">Home</a>
                                <ul class="child">
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/index.html" class="nav-link">Home 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/index-2.html" class="nav-link">Home 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/index-3.html" class="nav-link">Home 3</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/index-4.html" class="nav-link">Home 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-child">
                                <a class="nav-link" href="">Listing</a>
                                <!-- 1st level -->
                                <ul class="child">
                                    <li class="nav-item has-child">
                                        <a href="" class="nav-link">Grid</a>
                                        <!-- 2nd level -->
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-grid-full-width.html" class="nav-link">Full Width</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-grid-sidebar.html" class="nav-link">With Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-grid-compact-sidebar.html" class="nav-link">Compact With Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-grid-compact-full-width.html" class="nav-link">Compact Full Width</a>
                                            </li>
                                        </ul>
                                        <!-- end 2nd level -->
                                    </li>
                                    <li class="nav-item has-child">
                                        <a href="" class="nav-link">List</a>
                                        <!-- 2nd level -->
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-list-full-width.html" class="nav-link">Full Width</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-list-sidebar.html" class="nav-link">With Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-list-compact-sidebar.html" class="nav-link">Compact With Sidebar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-list-compact-full-width.html" class="nav-link">Compact Full Width</a>
                                            </li>
                                        </ul>
                                        <!-- end 2nd level -->
                                    </li>
                                    <li class="nav-item has-child">
                                        <a href="" class="nav-link">Masonry</a>
                                        <!-- 2nd level -->
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-masonry-full-width.html" class="nav-link">Full Width</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-masonry-sidebar.html" class="nav-link">With Sidebar</a>
                                            </li>
                                        </ul>
                                        <!-- end 2nd level -->
                                    </li>
                                    <li class="nav-item has-child">
                                        <a href="" class="nav-link">Single</a>
                                        <!-- 2nd level -->
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/single-listing-1.html" class="nav-link">Single 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/single-listing-2.html" class="nav-link">Single 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/single-listing-3.html" class="nav-link">Single 3</a>
                                            </li>
                                        </ul>
                                        <!-- end 2nd level -->
                                    </li>
                                </ul>
                                <!-- end 1st level -->
                            </li>
                            <li class="nav-item has-child">
                                <a class="nav-link" href="">Pages</a>
                                <!-- 2nd level -->
                                <ul class="child">
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/sellers.html" class="nav-link">Sellers</a>
                                    </li>
                                    <li class="nav-item has-child">
                                        <a href="" class="nav-link">Seller Detail</a>
                                        <!-- 3rd level -->
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/seller-detail-1.html" class="nav-link">Seller Detail
                                                    1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/seller-detail-2.html" class="nav-link">Seller Detail
                                                    2</a>
                                            </li>
                                        </ul>
                                        <!-- end 3rd level -->
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/blog-post.html" class="nav-link">Blog Post</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/submit.html" class="nav-link">Submit Ad</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/pricing.html" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/faq.html" class="nav-link">FAQ</a>
                                    </li>
                                </ul>
                                <!-- end 2nd level -->
                            </li>
                            <li class="nav-item has-child">
                                <a class="nav-link" href="">Extras</a>
                                <!--1st level -->
                                <ul class="child">
                                    <li class="nav-item has-child">
                                        <a href="" class="nav-link">Grid Variants</a>
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-grid-4-items.html" class="nav-link">4 Items</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-grid-3-items.html" class="nav-link">3 Items</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/listing-grid-2-items.html" class="nav-link">2 Items</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-child">
                                        <a href="" class="nav-link">User Panel</a>
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/my-profile.html" class="nav-link">My Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/my-ads.html" class="nav-link">My Ads</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/change-password.html" class="nav-link">Change
                                                    Password</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/sign-in.html" class="nav-link">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="http://themestarz.net/html/craigs/register.html" class="nav-link">Register</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/elements.html" class="nav-link">Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/typography.html" class="nav-link">Typography</a>
                                    </li>
                                    <li class="nav-item has-child">
                                        <a href="" class="nav-link">Nested Navigation</a>
                                        <!--2nd level -->
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Level 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="" class="nav-link">Level 2</a>
                                            </li>
                                            <li class="nav-item has-child">
                                                <a href="" class="nav-link">Level 2</a>
                                                <!--3rd level -->
                                                <ul class="child">
                                                    <li class="nav-item has-child">
                                                        <a href="" class="nav-link">Level 3</a>
                                                        <!--4th level -->
                                                        <ul class="child">
                                                            <li class="nav-item">
                                                                <a href="" class="nav-link">Level 4</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="" class="nav-link">Level 4</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="" class="nav-link">Level 4</a>
                                                            </li>
                                                        </ul>
                                                        <!-- end 4th level-->
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="" class="nav-link">Level 3</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="" class="nav-link">Level 3</a>
                                                    </li>
                                                </ul>
                                                <!--end 3rd level-->
                                            </li>
                                        </ul>
                                        <!-- end 2nd level -->
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/image-header.html" class="nav-link">Image Header</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="http://themestarz.net/html/craigs/messaging.html" class="nav-link">Messages</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://themestarz.net/html/craigs/contact.html">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://themestarz.net/html/craigs/submit.html" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
                            </li>
                        </ul>
                        <!--Main navigation list-->
                    </div>
                    <!--end navbar-collapse-->
                </nav>
                <!--end navbar-->
            </div>
            <!--end container-->
        </div>
