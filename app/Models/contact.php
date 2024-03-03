<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;


    public static function getContacts()
    {
        $contacts = [

            "address" => "contact-detail",
            "number" => "+999999999999",
            "info" => "test@test.com"

        ];

        $contacts = json_decode(json_encode($contacts));

        return $contacts;
    }
}
