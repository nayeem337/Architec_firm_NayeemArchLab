<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        return view('admin.setting.index', ['settings' => Setting::all()]);  //view index and also manage settings database like a table
    }


    public function addButton()  //got to add setting button
    {
        return view('admin.setting.addButton');
    }



    public function create(Request $request)
    {
        Setting::newSetting($request);
        return back()->with('message', 'Setting info create successfully!');
    }


//    public function manage()   // for this I use -> index()  NO NEEDED for this project
//    {
//        return view('admin.setting.manage', ['settings' => Setting::all()]);
//    }

    public function edit($id)
    {
        return view('admin.setting.edit', ['setting' => Setting::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Setting::updateSetting($request, $id);
        return redirect('/setting')->with('message', 'Setting info update successfully!');
    }


//    public function delete($id)
//    {
//        Setting::deleteSetting($id);
//        return redirect('/setting/manage')->with('message', 'Setting info delete successfully!');
//    }



}
