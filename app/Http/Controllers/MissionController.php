<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{

    public function index()
    {
        return view('admin.mission.index', ['missions' => Mission::all()]);  //view index and also manage , Mission database like a table
    }


    public function addMissionButton()  // Add Who we are press the button return a view page mission_button.blade.php
    {
        return view('admin.mission.mission_button');
    }



    public function create(Request $request)
    {
        Mission::newMission($request);
        return redirect('/about/mission')->with('message', 'Mission info Create successfully!');
    }


//    public function manage()   // for this I use -> index() NO NEEDED for this project
//    {
//        return view('admin.mission.manage', ['mission' => Mission::all()]);
//    }


    public function edit($id)
    {
        return view('admin.mission.edit', ['mission' => Mission::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Mission::updateMission($request, $id);
        return redirect('/about/mission')->with('message', 'Mission info update successfully!');
    }


//    public function delete($id)
//    {
//        Mission::deleteMission($id);
//        return redirect('/mission/manage')->with('message', ' Mission info delete successfully!');
//    }




}
