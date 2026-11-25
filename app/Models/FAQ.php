<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FAQ extends Model
{
    use HasFactory;

    private static $faq;


    public static function newFaq($request)
    {
        self::$faq = new FAQ();

        self::$faq->title          = $request->title;
        self::$faq->description    = $request->description;

        self::$faq->save();
    }

    public static function updateFaq($request, $id)
    {
        self::$faq = FAQ::find($id);

        self::$faq->title         = $request->title;
        self::$faq->description   = $request->description;

        self::$faq->save();
    }

}
