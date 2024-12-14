<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreeCounselling;
use App\Models\Country; // Add this

class FreeCounsellingController extends Controller
{
    /**
     * Show the counseling form (frontend).
     */
    public function showForm()
    {
        // Fetch all countries from the database
        $countries = Country::all();

        // Pass countries to the view
        return view('h-and-h.pages.free-counseling', compact('countries'));
    }

    /**
     * Handle form submission and store in the database.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string|max:15',
            'education' => 'required|string',
            'grade' => 'required|string',
            'institute_name' => 'required|string',
            'graduation_year' => 'required|integer',
            'language' => 'required|string',
            'destination' => 'required|string',
            'current_location' => 'required|string',
        ]);

        // Save the data to the database
        FreeCounselling::create($validatedData);

        // Prepare success notification
        $notify[] = ['success', 'Application submitted successfully!'];

        // Redirect back to the form with a success message
        return redirect()->route('freecounselling.form')->withNotify($notify);
    }

    /**
     * Show all submitted forms in the admin panel.
     */
    public function index()
    {
        // Retrieve all records
        $counsellings = FreeCounselling::latest()->get();

        // Pass data to the admin view
        return view('admin.hhAdmin.counsellingForm.index', compact('counsellings'));
    }
}

