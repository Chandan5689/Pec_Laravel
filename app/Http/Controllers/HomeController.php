<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Feedback;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            $services = Service::all();  //get all services data from database 
            // return $services;
            $feedbacks = Feedback::all();
            $categories = Category::all();
            $courses = Course::all();
            return view('master',compact('services','feedbacks','categories','courses'));
        }

        public function contact()
        {
            return view('contact');
        }

}



