<?php

namespace App\Http\Controllers;

use App\Models\WorkProcess;
use Illuminate\Http\Request;

class WorkProcessController extends Controller
{

    public function index()
    {
        return view('admin.work_process.index' , ['work_processes' => WorkProcess::all()]);  //view index and also manage homes database like a table     //  , ['work_processes' => WorkProcess::all()]
    }


    public function addWorkProcessButton()  // Add WorkProcess press the button return a view page WorkProcessButton.blade.php
    {
        return view('admin.work_process.work_process_button');
    }



    public function create(Request $request)
    {
        WorkProcess::newWorkProcess($request);
        return redirect('/home/work-process')->with('message', 'Work process info Create successfully!');
    }


//    public function manage()   // for this I use -> index() NO NEEDED for this project
//    {
//        return view('admin.work_process.manage', ['homes' => WorkProcess::all()]);
//    }


    public function edit($id)
    {
        return view('admin.work_process.edit', ['work_process' => WorkProcess::find($id)]);
    }

    public function update(Request $request, $id)
    {
        WorkProcess::updateWorkProcess($request, $id);
        return redirect('/home/work-process')->with('message', 'Work Process info update successfully!');
    }


//    public function delete($id)
//    {
//        Home::deleteWorkProcess($id);
//        return redirect('/home/work-process')->with('message', 'Work Process info delete successfully!');
//    }


}
