<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;
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
            return view('frontEnd.home.homepage',compact('services','feedbacks','categories','courses'));
        }

        public function contact()
        {
            return view('frontEnd.contacts.contactpage');
        }

}


