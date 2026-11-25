<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Setting extends Model
{

    use HasFactory;

    private static $setting, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('logo');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/setting-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newSetting($request)
    {
        self::$setting = new Setting();
        self::$setting->site_title    = $request->site_title;
        self::$setting->logo          = self::getImageUrl($request);
        self::$setting->address       = $request->address;
        self::$setting->phone         = $request->phone;
        self::$setting->email         = $request->email;
        self::$setting->save();
    }

    public static function updateSetting($request, $id)
    {
        self::$setting = Setting::find($id);
        if ($request->file('logo'))
        {
            if (file_exists(self::$setting->logo))
            {
                unlink(self::$setting->logo);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$setting->logo;
        }

        self::$setting->site_title    = $request->site_title;
        self::$setting->logo         = self::$imageUrl;
        self::$setting->address       = $request->address;
        self::$setting->phone         = $request->phone;
        self::$setting->email         = $request->email;

        self::$setting->save();
    }


//    public static function deleteSetting($id)
//    {
//        self::$setting = Setting::find($id);
//        if (file_exists(self::$setting->logo))
//        {
//            unlink(self::$setting->logo);
//        }
//        self::$setting->delete($id);
//    }


}
