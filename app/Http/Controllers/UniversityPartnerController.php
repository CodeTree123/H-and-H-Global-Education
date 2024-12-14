<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\UniversityPartner;
use Illuminate\Http\Request;

class UniversityPartnerController extends Controller
{
    public function index()
{
    // Fetch all university partners from the database
    $universityPartners = UniversityPartner::all();

    // Pass the data to the view
    return view('admin.hhAdmin.partnerUniversity.index', compact('universityPartners'));
}
    public function create()
    {
        return view('admin.hhAdmin.partnerUniversity.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            // Save the image in the public directory
            $image = $request->file('image');
            $imageName = time() . '_partner.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/university_partners'), $imageName);
    
            // Save the relative path to the database
            $imagePath = 'university_partners/' . $imageName;
        }
    
        UniversityPartner::create([
            'image' => $imagePath,
        ]);
    
        return redirect()->route('university_partners.index')->with('success', 'Partner created successfully!');
    }
    
    public function edit(UniversityPartner $universityPartner)
    {
        return view('admin.hhAdmin.partnerUniversity.edit', compact('universityPartner'));
    }

    public function update(Request $request, UniversityPartner $universityPartner)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($universityPartner->image && file_exists(public_path($universityPartner->image))) {
                unlink(public_path($universityPartner->image));
            }
    
            // Save new image in the public directory
            $image = $request->file('image');
            $imageName = time() . '_partner.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/university_partners'), $imageName);
    
            // Update the database with the relative path of the new image
            $universityPartner->image = 'university_partners/' . $imageName;
        }
    
        // Save other details if needed (add additional fields here)
        $universityPartner->save();
    
        return redirect()->route('university_partners.index')->with('success', 'Partner updated successfully!');
    }
    

    public function destroy(UniversityPartner $universityPartner)
    {
        // Delete image if it exists
        if ($universityPartner->image && Storage::disk('public')->exists($universityPartner->image)) {
            Storage::disk('public')->delete($universityPartner->image);
        }

        // Delete the partner record
        $universityPartner->delete();

        return redirect()->route('university_partners.index')->with('success', 'Partner deleted successfully!');
    }
}
