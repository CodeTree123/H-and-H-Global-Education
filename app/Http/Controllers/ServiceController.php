<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
 
    // public function studentCounseling()
    // {
    //     return view('h-and-h.pages.studentcounciling');
    // }

    public function visaApplication()
    {
        return view('h-and-h.pages.visha');
    }

    public function studentAccommodation()
    {
        return view('h-and-h.pages.accommodation');
    }



    public function airportPickup()
    {
        return view('h-and-h.pages.airportpickup');
    }

    // about section


    public function whyUs()
    {
        return view('h-and-h.pages.whyUs');
    }



    public function greetingsCEO()
    {
        return view('h-and-h.pages.MessagesFromCeo');
    }



    public function newsBlog()
    {
        return view('h-and-h.pages.blog');
    }

    public function ourTeam()
    {
        return view('h-and-h.pages.ourTeam');
    }


    public function eventSection()
    {
        return view('h-and-h.pages.event');
    }


    


}
