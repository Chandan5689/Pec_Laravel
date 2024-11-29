<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            $about = "About";
            $contact = "Contact US";
            $about_content = "Welcome to my Website";
            $contact_content = "Contact us at Barahi hall";
            return view('index',compact('about','contact','about_content','contact_content'));
        }
    }

