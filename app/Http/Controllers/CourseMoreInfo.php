<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\University;

class CourseMoreInfo extends Controller
{public function show($universityId)
    {
        // Retrieve the university along with its courses
        $university = University::with('courses')->findOrFail($universityId);

    
        $pageTitle = "More Info about " . $university->name;
    
        // Pass the data to the view
        return view('h-and-h.pages.moreInfo', compact('university', 'pageTitle'));
    }
}
