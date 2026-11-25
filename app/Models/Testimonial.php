<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;


    private static $testimonial, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/testimonial-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newTestimonial($request)
    {
        self::$testimonial = new Testimonial();
        self::$testimonial->description    = $request->description;
        self::$testimonial->image          = self::getImageUrl($request);

        self::$testimonial->save();
    }

    public static function updateTestimonial($request, $id)
    {
        self::$testimonial = Testimonial::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$testimonial->image))
            {
                unlink(self::$testimonial->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$testimonial->image;
        }

        self::$testimonial->description   = $request->description;
        self::$testimonial->image         = self::$imageUrl;

        self::$testimonial->save();
    }


//    public static function deleteTtestimonial($id)
//    {
//        self::$testimonial = Testimonial::find($id);
//        if (file_exists(self::$testimonial->image))
//        {
//            unlink(self::$testimonial->image);
//        }
//        self::$testimonial->delete($id);
//    }



}
