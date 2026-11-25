<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{

    public function index()
    {
        return view('admin.vision.index',['visions' => Vision::all()]);  //view index and also manage , Vision database like a table
    }


    public function addVisionButton()  // Add Who we are press the button return a view page vision_button.blade.php
    {
        return view('admin.vision.vision_button');
    }



    public function create(Request $request)
    {
        Vision::newVision($request);
        return redirect('/about/vision')->with('message', 'Vision info Create successfully!');
    }


//    public function manage()   // for this I use -> index() NO NEEDED for this project
//    {
//        return view('admin.mission.manage', ['mission' => Mission::all()]);
//    }


    public function edit($id)
    {
        return view('admin.vision.edit', ['vision' => Vision::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Vision::updateVision($request, $id);
        return redirect('/about/vision')->with('message', 'Vision info update successfully!');
    }


}
