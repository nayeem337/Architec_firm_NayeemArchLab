<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{


    public function index()
    {
        return view('admin.testimonial.index', ['testimonials' => Testimonial::all()] );  //view index and also manage Testimonial database like a table
    }


    public function addTestimonialButton()  // Add Testimonial press the button return a view page testimonial_button.blade.php
    {
        return view('admin.testimonial.testimonial_button');
    }



    public function create(Request $request)
    {
        Testimonial::newTestimonial($request);
        return redirect('/home/testimonial')->with('message', 'Testimonial info Create successfully!');
    }


//    public function manage()   // for this I use -> index() NO NEEDED for this project
//    {
//        return view('admin.testimonial.manage', ['testimonial' => WorkProcess::all()]);
//    }


    public function edit($id)
    {
        return view('admin.testimonial.edit', ['testimonial' => Testimonial::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Testimonial::updateTestimonial($request, $id);
        return redirect('/home/testimonial')->with('message', 'Testimonial info update successfully!');
    }


//    public function delete($id)
//    {
//        Home::deleteWorkProcess($id);
//        return redirect('/home/manage')->with('message', 'Work Process info delete successfully!');
//    }



}
