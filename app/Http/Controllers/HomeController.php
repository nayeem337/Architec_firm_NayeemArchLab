<?php

namespace App\Http\Controllers;


use App\Models\Home;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function slider()
    {
        return view('admin.homeModule.slider' , ['homes' => Home::all()]);  //view index and also manage homes database like a table     //
    }


    public function addSliderButton()  // Add slider press the button return a view page homeAddButton.blade.php
    {
        return view('admin.homeModule.homeAddButton');
    }



    public function create(Request $request)
    {
        Home::newSlider($request);
        return redirect('/home/slider')->with('message', 'Slider info Create successfully!');
    }


//    public function manage()   // for this I use -> index() NO NEEDED for this project
//    {
//        return view('admin.home.manage', ['homes' => Home::all()]);
//    }


    public function edit($id)
    {
        return view('admin.homeModule.edit', ['home' => Home::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Home::updateSlider($request, $id);
        return redirect('/home/slider')->with('message', 'Slider info update successfully!');
    }


//    public function delete($id)
//    {
//        Home::deleteSLIDER($id);
//        return redirect('/home/manage')->with('message', 'Slider info delete successfully!');
//    }

}
