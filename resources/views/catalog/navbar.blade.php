
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
                        <ul dir="ltr" style="text-align: left" class="navbar-nav">





                                    @foreach($categories as $category)

                                    <li class="nav-item {{$category->class}}">
                                        <a href="" class="nav-link">{{$category->title}}</a>
                                        <!--2nd level -->
                                        <ul class="child">
                                    @foreach($category->subcategory as $subcategory)
                                            <li class="nav-item {{$subcategory->class}}">
                                                <a href="" class="nav-link">{{$subcategory->title}}</a>
                                                <!--3rd level -->
                                                <ul class="child">
                                                    @foreach($subcategory->subcategory_first_children as $subcategory_first_child)
                                                    <li class="nav-item {{$subcategory_first_child->class}}">
                                                        <a href="" class="nav-link">{{$subcategory_first_child->title}}</a>
                                                        <!--4th level -->

                                                        <ul class="child">
                                                            @foreach($subcategory_first_child->subcategory_second_children as $subcategory_second_child)
                                                            <li class="nav-item">
                                                                <a href="" class="nav-link">{{$subcategory_second_child->title}}</a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                        <!-- end 4th level-->
                                                    </li>
                                                    @endforeach

                                                </ul>
                                                <!--end 3rd level-->
                                            </li>
                                            @endforeach
                                        </ul>
                                        <!-- end 2nd level -->
                                    </li>

                                    @endforeach

                                </ul>

                        <!--Main navigation list-->
                    </div>
                    <!--end navbar-collapse-->
                </nav>
                <!--end navbar-->
            </div>
            <!--end container-->
        </div>
