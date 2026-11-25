<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('admin.contact.index',[
            'contacts' => Contact::all()
        ]);                                  // view index and also manage , Contact database like a table
    }


    public function addContactButton()  // Add Who we are press the button return a view page contact_button.blade.php
    {
        return view('admin.contact.contact_button');
    }


    public function create(Request $request)
    {
        Contact::newContact($request);
     //   return redirect('/contact')->with('message', 'Contact info Create successfully!');


        return redirect('/contact-us')->with('message', 'Your Information send Successfully !');
    }


    public function edit($id)
    {
        return view('admin.contact.edit', [
            'contact' => Contact::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Contact::updateContact($request, $id);
        return redirect('/contact')->with('message', 'Contact info update successfully!');
    }

    public function delete($id)
    {
        Contact::deleteCategory($id);
        return redirect('/contact')->with('message', 'Contact info delete successfully.');
    }

}
