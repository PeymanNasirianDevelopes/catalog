@extends('layouts.catalog', ['class' => 'profile-page', 'page' => __('profile Page'), 'contentClass' => 'profile-page'])
@section("content")
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
@endsection
