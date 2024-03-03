<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;


    public static function getTexts()
    {
        $text = [
            "title" => "This is the user index page.",

            "text" => " Amidst the bustling city streets, where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night air, and the echoes of forgotten tales linger in the cobblestone pathways. It is a place where time seems to stand still, where the ordinary fades away, and the extraordinary takes its place. In this alleyway, one can find not just a refuge from the chaos of the world, but also a gateway to adventures yet to be discovered.
            Amidst the bustling city streets, where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night air, and the echoes of forgotten tales linger in the cobblestone pathways. It is a place where time seems to stand still, where the ordinary fades away, and the extraordinary takes its place. In this alleyway, one can find not just a refuge from the chaos of the world, but also a gateway to adventures yet to be discovered."
        ];
        $text = json_decode(json_encode($text));
        return $text;
    }

    public static function getBoxes()
    {
        $boxes = [
            [
                "box" => "box1", "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ],
            [
                "box" => "box2", "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ], [
                "box" => "box3", "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ], [
                "box" => "box4", "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ]
        ];


        $boxes = json_decode(json_encode($boxes));

        return $boxes;
    }
}
