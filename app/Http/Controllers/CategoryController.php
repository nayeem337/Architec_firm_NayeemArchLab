<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.category.index',['categories' =>  Category::all()]);  // view index and also manage , Category database like a table
    }


    public function addCategoryButton()  // Add Who we are press the button return a view page category_button.blade.php
    {
        return view('admin.category.category_button');
    }


    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect('/category')->with('message', 'Category info Create successfully!');
    }


    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/category')->with('message', 'Category info update successfully!');
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect('/category')->with('message', 'Category info delete successfully!');
    }


}
