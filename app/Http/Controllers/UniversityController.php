<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Country;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    // Show the list of universities
    public function index()
    {
        $universities = University::with('country')->get();
        return view('admin.hhAdmin.universities.index', compact('universities'));
    }

    // Show the form to create a new university
    public function create()
    {
        $countries = Country::all(); // Get all countries
        return view('admin.hhAdmin.universities.create', compact('countries'));
    }

    // Store a new university
    public function store(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'overview' => 'nullable|string',
            'entry_requirements' => 'nullable|string',
            'english_language' => 'nullable|string',
            'tuition_fees' => 'nullable|string|max:255',
            'scholarships' => 'nullable|string',
            'university_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle Image Upload
        $imageName = $request->hasFile('image') ? time() . '_image.' . $request->image->extension() : null;
        if ($request->hasFile('image')) {
            $request->image->move(public_path('images'), $imageName);
        }

        $bannerName = $request->hasFile('university_banner') ? time() . '_banner.' . $request->university_banner->extension() : null;
        if ($request->hasFile('university_banner')) {
            $request->university_banner->move(public_path('banners'), $bannerName);
        }

        University::create([
            'country_id' => $request->country_id,
            'name' => $request->name,

            'location' => $request->location,
            'overview' => $request->overview,
            'entry_requirements' => $request->entry_requirements,
            'english_language' => $request->english_language,
            'tuition_fees' => $request->tuition_fees,
            'scholarships' => $request->scholarships,
            'university_banner' => $bannerName,
            'image' => $imageName,
        ]);

        return redirect()->route('universities.index')->with('success', 'University added successfully.');
    }

    // Show the form to edit an existing university
    public function edit($id)
    {
        $university = University::findOrFail($id);
        $countries = Country::all();
        return view('admin.hhAdmin.universities.edit', compact('university', 'countries'));
    }

    // Update an existing university
    public function update(Request $request, $id)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'name' => 'required|string|max:255',
            'location' => 'nullable|string',
            'overview' => 'nullable|string',
            'entry_requirements' => 'nullable|string',
            'english_language' => 'nullable|string',
            'tuition_fees' => 'nullable|string',
            'scholarships' => 'nullable|string',
            'university_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $university = University::findOrFail($id);

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '_image.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $university->image = $imageName;
        }

        if ($request->hasFile('university_banner')) {
            $bannerName = time() . '_banner.' . $request->university_banner->extension();
            $request->university_banner->move(public_path('banners'), $bannerName);
            $university->university_banner = $bannerName;
        }

        $university->update([
            'country_id' => $request->country_id,
            'name' => $request->name,
            'location' => $request->location,
            'overview' => $request->overview,
            'entry_requirements' => $request->entry_requirements,
            'english_language' => $request->english_language,
            'tuition_fees' => $request->tuition_fees,
            'scholarships' => $request->scholarships,
        ]);

        return redirect()->route('universities.index')->with('success', 'University updated successfully.');
    }

    // Delete a university
    public function destroy($id)
    {
        $university = University::findOrFail($id);

        if ($university->image) {
            unlink(public_path('images/' . $university->image));
        }

        if ($university->university_banner) {
            unlink(public_path('banners/' . $university->university_banner));
        }

        $university->delete();

        return redirect()->route('universities.index')->with('success', 'University deleted successfully.');
    }



    // Single university page
    public function show($id)
    {
        $university = University::find($id);
        return view('h-and-h.pages.university',compact('university')); // Returns the university details view
    }
}
