<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        return view('admin.service.index',['services' => Service::all()]);  // view index and also manage , Service database like a table
    }


    public function addServiceButton()  // Add Who we are press the button return a view page service_button.blade.php
    {
        return view('admin.service.service_button');
    }


    public function create(Request $request)
    {
        Service::newService($request);
        return redirect('/service')->with('message', 'Service info Create successfully!');
    }


    public function edit($id)
    {
        return view('admin.service.edit', ['service' => Service::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Service::updateSevice($request, $id);
        return redirect('/service')->with('message', 'Service info update successfully!');
    }


}
