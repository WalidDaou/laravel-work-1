<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    use HasFactory;


    public static function getContact()
    {
        // $contacts = (object) [

        //     "address" => "contact-detail",
        //     "number" => "+999999999999",
        //     "info" => "test@test.com"

        // ];



        $contact = self::first();

        return $contact;
    }
}
