<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            $services = Service::all();  //get all services data from database 
            // return $services;
            $feedbacks = Feedback::all();
            return view('master',compact('services','feedbacks'));
        }

        public function contact()
        {
            return view('contact');
        }

}



