@extends('layouts.catalog', ['class' => 'chang_pswd-page', 'page' => __('chang_pswd Page'), 'contentClass' => 'chang_pswd-page'])
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
                            <form class="form">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="current_password" class="col-form-label required">Current Password</label>
                                            <input name="current_password" type="password" class="form-control" id="current_password" placeholder="Current Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="new_current_password" class="col-form-label required">New Password</label>
                                            <input name="new_current_password" type="password" class="form-control" id="new_current_password" placeholder="New Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="repeat_new_current_password" class="col-form-label required">Repeat Password</label>
                                            <input name="repeat_new_current_password" type="password" class="form-control" id="repeat_new_current_password" placeholder="Repeat New Password" required>
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" class="btn btn-primary float-right">Change Password</button>
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </form>
                        </div>
                        <!--end col-md-9-->
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
