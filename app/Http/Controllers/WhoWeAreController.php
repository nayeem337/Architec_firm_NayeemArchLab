<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\who_we_are;

class WhoWeAreController extends Controller
{

    public function index()
    {
        return view('admin.who_we_are.index', ['who_we_ares' => who_we_are::all()]);  //view index and also manage , who_we_are database like a table
    }


    public function addWhoWeAreButton()  // Add Who we are press the button return a view page who_we_are_button.blade.php
    {
        return view('admin.who_we_are.who_we_are_button');
    }



    public function create(Request $request)
    {
        who_we_are::newWho_WeAre($request);
        return redirect('/about/who-we-are')->with('message', 'Who we are info Create successfully!');
    }


//    public function manage()   // for this I use -> index() NO NEEDED for this project
//    {
//        return view('admin.who-we-are.manage', ['who_we_are' => who_we_are::all()]);
//    }


    public function edit($id)
    {
        return view('admin.who_we_are.edit', ['who_we_are' => who_we_are::find($id)]);
    }

    public function update(Request $request, $id)
    {
        who_we_are::updateWho_WeAre($request, $id);
        return redirect('/about/who-we-are')->with('message', 'Who we are info update successfully!');
    }


    public function delete($id)
    {
        who_we_are::delete_who_we_are($id);
        return redirect('/about/who-we-are')->with('message', 'Who we are info delete successfully!');
    }




}
