<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Country;

class UniversityFinderController extends Controller
{
    public function index(Request $request)
    {
        // Fetch all countries for filtering
        $countries = Country::all();

        // Extract selected country IDs from the request
        $selectedCountryIds = $request->query('country_id', []); // Default to an empty array

        // Query universities with optional filtering
        $universitiesQuery = University::query();

        if (!empty($selectedCountryIds)) {
            // Apply filter for selected countries
            $universitiesQuery->whereIn('country_id', $selectedCountryIds);
        }

        $universities = $universitiesQuery->get();

        // Return the view with universities and countries
        return view('h-and-h.pages.universityFinder', compact('universities', 'countries', 'selectedCountryIds'));
    }
}
