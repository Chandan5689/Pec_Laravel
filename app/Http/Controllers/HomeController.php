<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            $services = Service::all();  //get all services data from database 
            // return $services;
            return view('master',compact('services'));
        }

        public function contact()
        {
            return view('contact');
        }

}



