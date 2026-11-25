<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\FAQ;
use App\Models\Home;
use App\Models\Mission;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Vision;
use App\Models\who_we_are;
use App\Models\WorkProcess;
use Illuminate\Http\Request;

class SomantoralController extends Controller

{

    public function index()
    {

        return view('frontend.index', [

            'who_we_ares'       => who_we_are::all(),     // fetch Wo we are
            'missions'          => Mission::all(),        // fetch Mission
            'home_sliders'      => Home::all(),           // fetch Sliders
            'Visions'           => Vision::all(),         // fetch Sliders
            'services'          => Service::all(),

          //  'categories'        => Category::all(),

            'categories'        => Category::with('projects.subCategory')->get(), // <-- this is key
            'projects'          => Project::all(),
            'work_processes'    => WorkProcess::all(),
            'contacts'          => Contact::all(),

           'settings'          => Setting::all(),

           // 'setting' => Setting::first(), // not settings




        ]);
    }


    public function about()
    {
        return view('frontend.about',[
            'who_we_ares'       => who_we_are::all(),     // fetch Wo we are
            'missions'          => Mission::all(),        // fetch Mission
            'Visions'           => Vision::all(),
            'services'          => Service::all(),
            'f_a_qs'      => FAQ::all(),

        ]);
    }



    public function contact_us()
    {
        return view('frontend.contact'); // for fetch contact,setting AppServiceProvider.php
    }

    public function our_project()
    {
        return view('frontend.project',[
            'categories'        => Category::with('projects.subCategory')->get(), // <-- this is key
            'projects'          => Project::all(),
        ]);
    }


    public function showProject($id)
    {
        return view('frontend.showProject',[
            'projects'          => Project::all(),
            'services'          => Service::all(),
            'categories'        => Category::all(),
        ]);
    }




    public function serviceDetails()
    {
        return view('frontend.serviceDetails',[
            'services'          => Service::all(),
        ]);
    }









}
