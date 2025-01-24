@extends('backEnd.layouts.master')

@section('nav-title')
    <li><a href="#">Blogs</a></li>
    <li class="active">Edit</li>
@endsection

@section('inner-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Blogs</strong> Details
                </div>
                <div class="card-body card-block">
                    <form action="{{route('getBlogs.update', $getBlog->id)}}"
                          method="post"
                          enctype="multipart/form-data"
                          class="form-horizontal">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Image</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="image" name="image"
                                            value="{{$getBlog->image}}"
                                           placeholder="Place a image url here"
                                           class="form-control"
                                           required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Department</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="department" name="department"
                                            value="{{$getBlog->department}}"
                                           placeholder="Place a department here"
                                           class="form-control" 
                                           required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Date</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="date" name="date"
                                            value="{{$getBlog->date}}"
                                           placeholder="Select a date"
                                           class="form-control" 
                                           required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Blog Title</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="blog_title" name="blog_title"
                                            value="{{$getBlog->blog_title}}"
                                           placeholder="Title goes here"
                                           class="form-control" 
                                           required></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Author Image</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="author_image" name="author_name"
                                            value="{{$getBlog->author_image}}"
                                           placeholder="Put author Image"
                                           class="form-control" 
                                           required>
                                </div>
                            
                            </div>
    
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Author Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="author_name" name="author_name"
                                            value="{{$getBlog->author_name}}"
                                           placeholder="Write the author name"
                                           class="form-control" 
                                           required>
                                </div>
                            
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Author Position</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="author_position" name="author_position"
                                            value="{{$getBlog->author_position}}"
                                           placeholder="Write the author position"
                                           class="form-control" 
                                           required>
                                </div>
                            
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
