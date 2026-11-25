<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Home extends Model
{

    use HasFactory;

    private static $slider, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/slider-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newSlider($request)
    {
        self::$slider = new Home();
        self::$slider->title_name   = $request->title_name;
        self::$slider->description   = $request->description;
        self::$slider->image         = self::getImageUrl($request);

        self::$slider->save();
    }

    public static function updateSlider($request, $id)
    {
        self::$slider = Home::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$slider->image))
            {
                unlink(self::$slider->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$slider->image;
        }

        self::$slider->title_name   = $request->title_name;
        self::$slider->description   = $request->description;
        self::$slider->image         = self::$imageUrl;

        self::$slider->save();
    }


//    public static function deleteSlider($id)
//    {
//        self::$slider = Home::find($id);
//        if (file_exists(self::$slider->image))
//        {
//            unlink(self::$self->image);
//        }
//        self::$self->delete($id);
//    }


}
