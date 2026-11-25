<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()                                    //  This method shows the view
    {
        return view('admin.project.index' , [
            'categories'       =>  Category::all(),
            'sub_categories'   =>  SubCategory::all(),         // for sub category select option

     //   'projects'         =>  Project::all()                //  manage all projects in index.blade.php

            'projects' => Project::with(['category', 'subCategory'])->get()     //  manage all projects in index.blade.php

        ]);
    }


    public function addProjectButton()                         // Add Who we are press the button return a view page project_button.blade.php
    {
        return view('admin.project.project_button',[
            'categories'          =>  Category::all() ,        // for fetch automatic category
            'sub_categories'      =>  SubCategory::all()       // for fetch automatic Sub category
        ]);
    }



    public function getSubCategories($id)                      // Fetch Subcategory when select Category
    {
        $subcategories = SubCategory::where('category_id', $id)->get();
        return response()->json($subcategories);
    }



    public function create(Request $request)
    {
        Project::newProject($request);
        return redirect('/project')->with('message', 'Project info Create successfully!');
    }


    public function edit($id)
    {
        return view('admin.project.edit', [

            'sub_categories'   =>  SubCategory::all(),           // for fetch  Sub Category
            'categories' => Category::all(),                    // for fetch   Category
            'project'  =>  Project::find($id)                  // for edit project
        ]);
    }

    public function update(Request $request, $id)
    {
        Project::updateProject($request, $id);
        return redirect('/project')->with('message', 'Project info update successfully!');
    }


    public function delete($id)
    {
        Project::deleteProject($id);
        return redirect('/project')->with('message', 'Project info delete successfully!');
    }





}
