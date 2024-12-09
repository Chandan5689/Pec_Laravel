<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            $about = "About";
            
            $about_content = "Welcome to my Website";
            
            return view('master',compact('about','about_content'));
        }

        public function contact()
        {
            return view('contact');
        }

}



