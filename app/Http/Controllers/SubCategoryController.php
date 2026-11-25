<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()   //  This method shows the view
    {
        return view('admin.sub_category.index' ,[

           // 'sub_categories' =>  SubCategory::all()     // view index and also manage , SubCategory database like a table

            'sub_categories' => SubCategory::with('category')->get()

        ]);
    }


   public function addSub_Category_Button()  // Add Who we are press the button return a view page SUB_category_button.blade.php
    {
       return view('admin.sub_category.sub_category_button',[
           'categories' => Category::all()                           // for fetch automatic category
       ]);
    }

    public function create(Request $request)
    {
        SubCategory::newSubCategory($request);
        return redirect('/sub-category')->with('message', 'Sub Category info Create successfully!');
    }


    public function edit($id)
    {
        return view('admin.sub_category.edit', [
            'sub_category' => SubCategory::find($id),
            'categories' => Category::all()           // for fetch automatic category
        ]);
    }

    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/sub-category')->with('message', 'Sub Category info update successfully!');
    }


    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/sub-category')->with('message', 'Sub Category info delete successfully!');
    }


}
