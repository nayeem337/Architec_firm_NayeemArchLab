<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    private static $sub_category;

    public static function newSubCategory($request)
    {
        self::$sub_category = new SubCategory();
        self::$sub_category->sub_category_name     = $request->sub_category_name;
        self::$sub_category->category_id = $request->category_id; //  Assign category
        self::$sub_category->save();
    }

    public static function updateSubCategory($request, $id)
    {
        self::$sub_category = SubCategory::find($id);
        self::$sub_category->sub_category_name         = $request->sub_category_name;
        self::$sub_category->category_id               = $request->category_id;      //  Assign category
        self::$sub_category->save();
    }



    public static function deleteSubCategory($id)   //  Delete SubCategory Safely
    {
        self::$sub_category = SubCategory::find($id);

        self::$sub_category->delete();
    }



    public function Category()
    {
        return $this->belongsTo(Category::class);
    }


    public function projects()
    {
        return $this->hasMany(Project::class);
    }


}
