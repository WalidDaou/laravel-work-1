<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paragraph;
use App\Models\ContactDetail;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Setting;

class ProjectController extends Controller
{

    public function paragraph()
    {
        $paragraph = Paragraph::getParagraph("home");

        $services = Service::getServices();


        return view('pages.home', compact('paragraph', 'services'));
    }




    public function contact()
    {


        $contact = ContactDetail::getContact();

        return view('pages.contact', compact('contact'));
    }




    public function faqs()
    {

        $faqs = Faq::getFaqs();

        return view('pages.faqs', compact('faqs'));
    }

    public function submit(Request $request)

    {
        dd("Submitted");
    }



    public function render()
    {

        // $contact_detail = ContactDetail::getContact();


        // $phone = Setting::getSetting("france");
        // $email = Setting::getSetting("lebanon");
        $email = 

        $contact_detail = Setting::getSettings("contact");

        $contact = (object) [
            'phone' => $contact_detail["lebanon"] ?? "",
            'email' => $contact_detail["france"] ?? ""
        ];
        dump($contact_detail["lebanon"]);
        dump($contact);
        dd($contact_detail);
        
     // this -> ["PHNE"] -> is a key from the [$contact] array that return a value -> $contact["PHNE"] -> dd each one to anderstand


        return view('pages.contact', compact('contact'));
    }
}
