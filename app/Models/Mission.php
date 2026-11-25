<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mission extends Model
{
    use HasFactory;


    private static $mission, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/mission-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newMission($request)
    {
        self::$mission = new Mission();
        self::$mission->description    = $request->description;
        self::$mission->image          = self::getImageUrl($request);

        self::$mission->save();
    }

    public static function updateMission($request, $id)
    {
        self::$mission = Mission::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$mission->image))
            {
                unlink(self::$mission->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$mission->image;
        }

        self::$mission->description   = $request->description;
        self::$mission->image         = self::$imageUrl;

        self::$mission->save();
    }


//    public static function deleteMission($id)
//    {
//        self::$mission = Mission::find($id);
//        if (file_exists(self::$mission->image))
//        {
//            unlink(self::$mission->image);
//        }
//        self::$mission->delete($id);
//    }



}
