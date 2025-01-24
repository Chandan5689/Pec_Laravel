<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backEnd.blogs.blogs',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs_count = Blog::count();
        if($blogs_count>=6){
            Session::flash('alert-errror','Maximum blogs reached');
            return redirect('getBlogs');
        }else{
        return view('backEnd.blogs.create',compact('blogs_count'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->image = $request->image;
        $blog->department = $request->department;
        $blog->date = $request->date;
        $blog->blog_title = $request->blog_title;
        $blog->author_image = $request->author_image;
        $blog->author_name = $request->author_name;
        $blog->author_position = $request->author_position;
        

        if($blog->save()){
            Session::flash('alert-success','Created Successfully');
        } else{
            Session::flash('alert-error','Problem while creation');
        }
        return redirect('getBlogs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $getBlog)
    {
        return view('backEnd.blogs.edit',compact('getBlog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $getBlog)
    {
        $getBlog->image = $request->image;
        $getBlog->department = $request->department;
        $getBlog->date = $request->date;
        $getBlog->blog_title = $request->blog_title;
        $getBlog->author_image = $request->author_image;
        $getBlog->author_name = $request->author_name;
        $getBlog->author_position = $request->author_position;
        if($getBlog->update()){
            Session::flash('alert-success','Updated Successfully');
        }else{
            Session::flash('alert-errror','Problem while updation');
        }
        return redirect('getBlog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $getBlog)
    {
        if($getBlog->delete()){
            Session::flash('alert-success','Deleted Successfully');
        }else{
            Session::flash('alert-errror','Problem while Deleting'); 
        }
        return redirect('getBlogs');
    }
}
