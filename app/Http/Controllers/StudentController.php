<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\home;
use App\models\contact;
use App\models\faqs;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $text = home::getTexts();
        $boxes = home::getBoxes();


        return view('pages.home', compact('text', 'boxes'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function contact()
    {


        $contacts = contact::getContacts();

        return view('pages.contact', compact('contacts'));
    }

    /**
     * Display the specified resource.
     */
    public function faqs()
    {

        $FAQs = faqs::getFaqs();

        return view('pages.faqs', compact('FAQs'));
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
