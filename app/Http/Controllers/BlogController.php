<?php

namespace App\Http\Controllers;
use App\Models\BlogGrid;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs_grids = BlogGrid::all();
        return view('blogs.blog-no-sidebar',compact('blogs_grids'));
        
    }
    public function blog_left()
    {
        return view('blogs.blog-left-sidebar');
    }
    public function blog_right()
    {
        return view('blogs.blog-right-sidebar');
    }

}
