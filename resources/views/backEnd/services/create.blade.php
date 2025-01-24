@extends('backEnd.layouts.master')

@section('nav-title')
    <li><a href="#">Services</a></li>
    <li class="active">Add New</li>
@endsection

@section('inner-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Add Services</strong> Details
                </div>
                {{-- @if ($services_count>=4)
                    <h4>Maximum Services Reached. Delete others if necessary</h4>
                @else --}}
                <div class="card-body card-block">
                    <form action="/getServices" method="post"
                          enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="title" name="title"
                                       placeholder="Title goes here"
                                       class="form-control" value="{{ old('title') }}"
                                       required></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Sub Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="subTitle" name="subTitle"
                                       placeholder="subTitle goes here"
                                       class="form-control" value="{{ old('subTitle') }}"
                                       required>
                                <small class="form-text text-muted">This is sub title part</small></div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary ">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger ">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </form>
                </div>
                {{-- @endif --}}
                
            </div>
        </div>
    </div>
@endsection
