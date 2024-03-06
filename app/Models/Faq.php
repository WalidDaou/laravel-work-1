<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    public static function getFaqs()
    {

        // $faqs = [
        //     [
        //         "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu",
        //         "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
        //     ],
        //     [
        //         "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu",
        //         "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
        //     ], [
        //         "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu",
        //         "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
        //     ], [
        //         "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu",
        //         "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
        //     ]
        // ];

        // $faqs = json_decode(json_encode($faqs));

        $faqs = self::get();

        return  $faqs;
    }
}
