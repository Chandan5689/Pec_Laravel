<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('backEnd.services.services',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services_count = Service::count();
        if($services_count>=4){
            Session::flash('alert-errror','Maximum service reached');
            return redirect('getServices');
        }else{
        return view('backEnd.services.create',compact('services_count'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->subTitle = $request->subTitle;

        if($service->save()){
            Session::flash('alert-success','Created Successfully');
        } else{
            Session::flash('alert-error','Problem while creation');
        }
        return redirect('getServices');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $getService)
    {
        return view('backEnd.services.edit',compact('getService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $getService)
    {
        $getService->title = $request->title;
        $getService->subTitle = $request->subTitle;
        if($getService->update()){
            Session::flash('alert-success','Updated Successfully');
        }else{
            Session::flash('alert-errror','Problem while updation');
        }
        return redirect('getService');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $getService)
    {
        if($getService->delete()){
            Session::flash('alert-success','Deleted Successfully');
        }else{
            Session::flash('alert-errror','Problem while Deleting'); 
        }
        return redirect('getServices');
    }
}
