<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;


    private static $contact;


    public static function newContact($request)
    {
        self::$contact = new Contact();

        self::$contact->name           = $request->name;
        self::$contact->email          = $request->email;
        self::$contact->phone          = $request->phone;
        self::$contact->message        = $request->message;

        self::$contact->save();
    }



    public static function updateContact($request, $id)
    {
        self::$contact = Contact::find($id);

        self::$contact->name           = $request->name;
        self::$contact->email          = $request->email;
        self::$contact->phone          = $request->phone;
        self::$contact->message        = $request->message;

        self::$contact->save();
    }



    public static function deleteCategory($id)
    {
        self::$contact = Contact::find($id);

        self::$contact->delete($id);
    }


}
