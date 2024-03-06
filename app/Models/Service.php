<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    static function getServices()
    {

        // $Services = [

        //     (object)   [
        //         "box" => "box1",
        //         "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway.",
        //         "color" => "#190ffb"
        //     ],
        //     (object)   [
        //         "box" => "box2",
        //         "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway.",
        //         "color" => "#fb0f2b"
        //     ],
        //     (object)   [
        //         "box" => "box3",
        //         "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway.",
        //         "color" => "#3efb0f"
        //     ],
        //     (object)    [
        //         "box" => "box4",
        //         "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway.",
        //         "color" => "#fbab0f"
        //     ]
        // ];



        // $boxes = json_decode(json_encode($boxes));

        $Services = self::get();



        return $Services;
    }
}
