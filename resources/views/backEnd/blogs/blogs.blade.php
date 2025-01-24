@extends('backEnd.layouts.master')

@section('nav-title')
    <li class="active">Blogs</li>
@endsection

@section('inner-content')
    <div class="row">
        <div class="col-lg-12">
            <!-- FLash message -->
            <div class="row">
                <div class="col-md-12">
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-'.$msg))
                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'. $msg)}}</p>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <strong class="card-title float-left">
                        <h3>Blogs Update</h3>
                    </strong>
                    <button type="button" class="btn btn-success float-right"
                            onclick="location.href='{{route('getBlogs.create')}}';">
                            <i class="fa fa-plus">Add New</i>
                    </button>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Department</th>
                            <th>Date</th>
                            <th>Blog Title</th>
                            <th>Author Image</th>
                            <th>Author Name</th>
                            <th>Author Position</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($blogs as $item)
                            <tr>
                                <td>{{ $item->image }}</td>
                                <td>{{ $item->department }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->blog_title }}</td>
                                <td>{{ $item->author_image }}</td>
                                <td>{{ $item->author_name }}</td>
                                <td>{{ $item->author_position}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary"
                                            onclick="location.href='{{route('getBlogs.edit',$item->id)}}';">
                                        <i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#viewModal{{$item->id}}">
                                        <i class="fa fa-eye"></i></button>
                                    <button type="submit" class="btn btn-danger" data-toggle="modal"
                                            data-target="#delModal{{$item->id}}">
                                        <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <!-- View Modal -->
                            <div class="modal fade" id="viewModal{{$item->id}}" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Blog {{$item->blog_title}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Iamge:{{ $item->image }}</p>
                                            <p>Department: {{ $item->department }}</p>
                                            <p>Date:{{ $item->date }}</p>
                                            <p>Blog Title: {{ $item->blog_title }}</p>
                                            <p>Author Image: {{ $item->author_image }}</p>
                                            <p>Author Name: {{ $item->author_name }}</p>
                                            <p>Author Position: {{$item->author_position }}</p>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="delModal{{$item->id}}" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">

                                            <h4 class="modal-title">Blog Deletion </h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure to delete the blog
                                                '<strong>{{$item->blog_title}}</strong>' ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                                                Close
                                            </button>
                                            <form action="{{route('getServices.destroy', $item->id)}}" method="POST">
                                                {{method_field('DELETE')}}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
