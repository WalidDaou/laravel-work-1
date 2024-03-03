<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\home;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = home::getContacts();



        return view('pages.home', compact('text', 'boxes'));
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function contact ()
    {

        
        $contacts = [
            
                "address" => "contact-detail" , 
                "number"=>"+999999999999",
                "info"=>"test@test.com"
            
            ];

        return view ('pages.contact', compact ( 'contacts' ));
        
    }

    /**
     * Display the specified resource.
     */
    public function faqs()
    {


        $FAQs = [
            [
                "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu" , 
                "text"=>"where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ],
            [
                "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu" , 
                "text"=>"where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ],[
                "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu" , 
                "text"=>"where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ],[
                "title" => "stuff syube uibwe uibfw iubeuf iuegfwbeu uifuu" , 
                "text"=>"where the neon lights flicker like distant stars, there exists a hidden alleyway, cloaked in shadows and mystery. Here, whispers of secrets dance on the cool night"
            ]
            ];

        return view ('pages.faqs', compact ( 'FAQs' ));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
