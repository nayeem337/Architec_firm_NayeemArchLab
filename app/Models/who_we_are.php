<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class who_we_are extends Model
{
    use HasFactory;


    private static $who_we_are, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/who_we_are-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newWho_WeAre($request)
    {
        self::$who_we_are = new who_we_are();
        self::$who_we_are->description    = $request->description;
        self::$who_we_are->image          = self::getImageUrl($request);

        self::$who_we_are->save();
    }

    public static function updateWho_WeAre($request, $id)
    {
        self::$who_we_are = who_we_are::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$who_we_are->image))
            {
                unlink(self::$who_we_are->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$who_we_are->image;
        }

        self::$who_we_are->description   = $request->description;
        self::$who_we_are->image         = self::$imageUrl;

        self::$who_we_are->save();
    }


//    public static function delete_who_we_are($id)
//    {
//        self::$who_we_are = who_we_are::find($id);
//        if (file_exists(self::$who_we_are->image))
//        {
//            unlink(self::$who_we_are->image);
//        }
//        self::$who_we_are->delete();
//    }

}
