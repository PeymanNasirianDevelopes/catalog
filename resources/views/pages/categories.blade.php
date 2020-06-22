@extends('layouts.app', ['page' => __('categories'), 'pageSlug' => 'categories'])

@section('content')

    <div class="row">









    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Category Insert</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{url("categories/$category->id")}}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @if($category->id)
                            {{method_field("PUT")}}
                            @endif
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Category Title</label>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" placeholder="category title">
                                    <span class="form-text">enter category title here. Ex: Real State, Computers, ...</span>
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <label class="col-sm-2 col-form-label">Has Sub Category?</label>
                            <div class="col-sm-10 checkbox-radios">

                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="class" id="exampleRadios1" value="has-child" checked>
                                        <span class="form-check-sign"></span>
                                       YES
                                    </label>
                                </div>
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="class" id="exampleRadios2" value="">
                                        <span class="form-check-sign"></span>
                                       NO
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Icon</label>
                            <div class="col-md-4 col-sm-4">

                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">



                    <span class="btn btn-rose btn-round btn-file">


                      <input type="file" name="icon" />
                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
