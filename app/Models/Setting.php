<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    public static function getSetting($location)
    {

        $setting = self::where('location', $location)->first();

        if ($setting) {

            return $setting->value;
        }

        return "";
    }

    public static function getSettings($family)

    {

        $settings = self::where('family', $family)->get()->pluck('value', 'location')->toarray();

        return $settings;


    }
}
