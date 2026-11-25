<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class WorkProcess extends Model
{
    use HasFactory;


    private static $work_process, $image, $imageName, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image        = $request->file('image');
        self::$imageName    = self::$image->getClientOriginalName();
        self::$directory    = 'upload/work_process-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newWorkProcess($request)
    {
        self::$work_process = new WorkProcess();
        self::$work_process->description    = $request->description;
        self::$work_process->image          = self::getImageUrl($request);

        self::$work_process->save();
    }

    public static function updateWorkProcess($request, $id)
    {
        self::$work_process = WorkProcess::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$work_process->image))
            {
                unlink(self::$work_process->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$work_process->image;
        }

        self::$work_process->description   = $request->description;
        self::$work_process->image         = self::$imageUrl;

        self::$work_process->save();
    }


//    public static function deleteWorkProcess($id)
//    {
//        self::$work_process = WorkProcess::find($id);
//        if (file_exists(self::$work_process->image))
//        {
//            unlink(self::$work_process->image);
//        }
//        self::$work_process->delete($id);
//    }

}
