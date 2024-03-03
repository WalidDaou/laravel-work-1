<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\home;
use App\models\contact;
use App\models\faqs;
use App\Models\submit;

class ProjectController extends Controller
{

    public function index()
    {
        $text = home::getTexts();
        $boxes = home::getBoxes();


        return view('pages.home', compact('text', 'boxes'));
    }



    
    public function contact()
    {


        $contacts = contact::getContacts();

        return view('pages.contact', compact('contacts'));
    }


    public function faqs()
    {

        $FAQs = faqs::getFaqs();

        return view('pages.faqs', compact('FAQs'));
    }

    public function submit()
    
    {
        $message = submit::getmessage();
        dd("Message :" , $message);
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
