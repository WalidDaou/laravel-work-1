<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    use HasFactory;


    public static function getParagraph($location)
    {
        // $paragraph = 
        // (object) [
        //     "title" => "This is the user index page.",

        //     "text" => " Amidst the bustling city streets, where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night air, and the echoes of forgotten tales linger in the cobblestone pathways. It is a place where time seems to stand still, where the ordinary fades away, and the extraordinary takes its place. In this alleyway, one can find not just a refuge from the chaos of the world, but also a gateway to adventures yet to be discovered.
        //     Amidst the bustling city streets, where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night air, and the echoes of forgotten tales linger in the cobblestone pathways. It is a place where time seems to stand still, where the ordinary fades away, and the extraordinary takes its place. In this alleyway, one can find not just a refuge from the chaos of the world, but also a gateway to adventures yet to be discovered."
        // ];

        // $text = json_decode(json_encode($text));
        

      $paragraph =  self::where('location' , $location )->first();

        return $paragraph;
    }

  
}
