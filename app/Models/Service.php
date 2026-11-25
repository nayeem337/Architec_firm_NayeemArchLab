<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    private static $service, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/service-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newService($request)
    {
        self::$service = new Service();
        self::$service->title          = $request->title;
        self::$service->image          = self::getImageUrl($request);
        self::$service->description    = $request->description;

        self::$service->save();
    }

    public static function updateSevice($request, $id)
    {
        self::$service = Service::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$service->image))
            {
                unlink(self::$service->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$service->image;
        }

        self::$service->title          = $request->title;
        self::$service->description   = $request->description;
        self::$service->image         = self::$imageUrl;

        self::$service->save();
    }



}
