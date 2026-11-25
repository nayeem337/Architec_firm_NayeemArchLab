<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{

    public function index()
    {
        return view('admin.faq.index',['faqs' => FAQ::all()]);  //view index and also manage , Vision database like a table
    }


    public function addFaqButton()  // Add Who we are press the button return a view page faq_button.blade.php
    {
        return view('admin.faq.faq_button');
    }


    public function create(Request $request)
    {
        FAQ::newFaq($request);
        return redirect('/about/faq')->with('message', 'FAQ info Create successfully!');
    }


    public function edit($id)
    {
        return view('admin.faq.edit', ['faq' => FAQ::find($id)]);
    }

    public function update(Request $request, $id)
    {
        FAQ::updateFaq($request, $id);
        return redirect('/about/faq')->with('message', 'FAQ info update successfully!');
    }


}
