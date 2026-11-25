<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{

    use HasFactory;

    private static $project, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/project-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProject($request)
    {
        self::$project = new Project();
        self::$project->category_id         = $request->category_id;              //  Assign Category
        self::$project->sub_category_id     = $request->sub_category_id;          //  Assign Sub Category
        self::$project->title               = $request->title;
        self::$project->image               = self::getImageUrl($request);
        self::$project->description         = $request->description;
        self::$project->save();
    }

    public static function updateProject($request, $id)
    {
        self::$project = Project::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$project->image))
            {
                unlink(self::$project->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$project->image;
        }

        self::$project->category_id         = $request->category_id;              //  Assign Category
        self::$project->sub_category_id     = $request->sub_category_id;          //  Assign Sub Category
        self::$project->title               = $request->title;
        self::$project->image         = self::$imageUrl;
        self::$project->description         = $request->description;

        self::$project->save();
    }


    public static function deleteProject($id)
    {
        self::$project = Project::find($id);
        if (file_exists(self::$project->image))
       {
            unlink(self::$project->image);
       }
        self::$project->delete($id);
    }





// reletation with projects table

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



//    public function subCategory()
//    {
//        return $this->belongsTo(SubCategory::class, 'sub_category_id');
//    }



    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }




}
