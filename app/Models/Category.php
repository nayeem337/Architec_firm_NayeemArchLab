<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    private static $category;

    public static function newCategory($request)
    {
        self::$category = new Category();
        self::$category->name   = $request->name;
        self::$category->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);

        self::$category->name   = $request->name;

        self::$category->save();
    }



//    public static function deleteCategory($id)
//    {
//        self::$category = Category::find($id);
//
//        self::$category->delete($id);
//    }


    public static function deleteCategory($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return false;    // or throw 404
        }

        $category->subCategories()->delete();  // Delete all subcategories first

        $category->delete();       // Now delete the category
    }


    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }


    public function projects()
    {
        return $this->hasMany(Project::class);
    }



}
