@extends('backEnd.layouts.master')

@section('nav-title')
    <li><a href="#">Services</a></li>
    <li class="active">Edit</li>
@endsection

@section('inner-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Services</strong> Details
                </div>
                <div class="card-body card-block">
                    <form action="{{route('getServices.update', $getService->id)}}"
                          method="post"
                          enctype="multipart/form-data"
                          class="form-horizontal">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="title" name="title"
                                       value="{{$getService->title}}"
                                       class="form-control" required><small
                                    class="form-text text-muted">This is a title text</small></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Sub Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="subTitle" name="subTitle"
                                       value="{{$getService->subTitle}}"
                                       placeholder="subTitle goes here" class="form-control"
                                       required>
                                <small class="form-text text-muted">This
                                    is a sub title text</small></div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary ">
                                <i class="fa fa-dot-circle-o"></i> Save Changes
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
