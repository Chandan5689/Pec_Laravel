@extends('backEnd.layouts.master')

@section('nav-title')
    <li><a href="#">Blogs</a></li>
    <li class="active">Add New</li>
@endsection

@section('inner-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Add Blogs</strong> Details
                </div>
                {{-- @if ($services_count>=4)
                    <h4>Maximum Services Reached. Delete others if necessary</h4>
                @else --}}
                <div class="card-body card-block">
                    <form action="/getBlogs" method="post"
                          enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="image" name="image"
                                       placeholder="Place a image url here"
                                       class="form-control" value="{{ old('image') }}"
                                       required ></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Department</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="department" name="department"
                                       placeholder="Place a department here"
                                       class="form-control" value="{{ old('department') }}"
                                       required></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Date</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="date" name="date"
                                       placeholder="Select a date"
                                       class="form-control" value="{{ old('date') }}"
                                       required></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Blog Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="blog_title" name="blog_title"
                                       placeholder="Title goes here"
                                       class="form-control" value="{{ old('blog_title') }}"
                                       required></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Author Image</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="author_image" name="author_image"
                                       placeholder="Put author image"
                                       class="form-control" value="{{ old('author_image') }}"
                                       required>
                            </div>
                        
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Author Name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="author_name" name="author_name"
                                       placeholder="Write the author name"
                                       class="form-control" value="{{ old('author_name') }}"
                                       required>
                            </div>
                        
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Author Position</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="author_position" name="author_position"
                                       placeholder="Write the author position"
                                       class="form-control" value="{{ old('author_position') }}"
                                       required>
                            </div>
                        
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
