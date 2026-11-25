<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vision extends Model
{
    use HasFactory;

    private static $vision, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/vision-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newVision($request)
    {
        self::$vision = new Vision();
        self::$vision->description    = $request->description;
        self::$vision->image          = self::getImageUrl($request);

        self::$vision->save();
    }

    public static function updateVision($request, $id)
    {
        self::$vision = Vision::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$vision->image))
            {
                unlink(self::$vision->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$vision->image;
        }

        self::$vision->description   = $request->description;
        self::$vision->image         = self::$imageUrl;

        self::$vision->save();
    }


//    public static function deleteVision($id)
//    {
//        self::$vision = Vision::find($id);
//        if (file_exists(self::$vision->image))
//        {
//            unlink(self::$vision->image);
//        }
//        self::$vision->delete($id);
//    }




}
