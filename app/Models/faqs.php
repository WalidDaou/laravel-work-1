<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqs extends Model
{
    use HasFactory;

    public static function getFaqs()
    {

        $FAQs = [
            [
                "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu",
                "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ],
            [
                "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu",
                "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ], [
                "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu",
                "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ], [
                "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu",
                "text" => "where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ]
        ];

        $FAQs = json_decode(json_encode($FAQs));

        return  $FAQs;
    }
}
