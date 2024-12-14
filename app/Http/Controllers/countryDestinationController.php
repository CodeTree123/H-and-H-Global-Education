<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\University;
use Illuminate\Http\Request;

class countryDestinationController extends Controller
{
    public function index(string $id)
    {
        $country = Country::with('universities')->findOrFail($id);
    
        return view('h-and-h.pages.countryDestination', compact('country'));
    }
    

}
