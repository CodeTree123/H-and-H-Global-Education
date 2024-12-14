<?php

namespace App\Http\Controllers;

use App\Models\WhyHH;
use Illuminate\Http\Request;

class WhyHHController extends Controller
{
    public function index()
    {
        $whyHHs = WhyHH::all(); // Retrieve all records from the WhyHH table
        return view('admin.hhAdmin.whyH&H.index', compact('whyHHs'));
    }

    public function create()
    {
        return view('admin.hhAdmin.whyH&H.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', // Image validation
        ]);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Save the image in the public directory
            $image = $request->file('image');
            $imageName = time() . '_whyhh.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/whyhh_images'), $imageName);
    
            // Save the relative path to the database
            $imagePath = 'whyhh_images/' . $imageName;
        }
    
        WhyHH::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('whyH&H.index')->with('success', 'Record created successfully!');
    }
    

    public function edit($id)
    {
        $whyHH = WhyHH::findOrFail($id);
        return view('admin.hhAdmin.whyH&H.edit', compact('whyHH'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);
    
        $whyHH = WhyHH::findOrFail($id);
    
        // Keep the existing image if no new image is uploaded
        $imagePath = $whyHH->image;
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($whyHH->image && file_exists(public_path($whyHH->image))) {
                unlink(public_path($whyHH->image));
            }
    
            // Save the new image in the public directory
            $image = $request->file('image');
            $imageName = time() . '_whyhh.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/whyhh_images'), $imageName);
    
            // Update the image path
            $imagePath = 'whyhh_images/' . $imageName;
        }
    
        // Update the record in the database
        $whyHH->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('whyH&H.index')->with('success', 'Record updated successfully!');
    }
    

    public function destroy($id)
    {
        $whyHH = WhyHH::findOrFail($id);
        $whyHH->delete();

        return redirect()->route('whyH&H.index')->with('success', 'Record deleted successfully!');
    }
}
