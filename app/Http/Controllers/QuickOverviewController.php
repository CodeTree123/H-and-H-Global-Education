<?php

namespace App\Http\Controllers;

use App\Models\QuickOverview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuickOverviewController extends Controller
{
    public function index()
    {
        $quickOverviews = QuickOverview::all(); // Fetch all quick overviews
        return view('admin.hhAdmin.quickOverview.index', compact('quickOverviews'));
    }

    public function create()
    {
        return view('admin.hhAdmin.quickOverview.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Store the image in the public disk
        $imagePath = $request->file('image') 
                    ? $request->file('image')->store('quick_overviews', 'public') 
                    : null;

        // Create a new Quick Overview record
        QuickOverview::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('quick_overview.index')->with('success', 'Quick Overview created successfully.');
    }

    public function edit($id)
    {
        $overview = QuickOverview::findOrFail($id);
        return view('admin.hhAdmin.quickOverview.edit', compact('overview'));
    }


    
    public function update(Request $request, $id)
    {
        $overview = QuickOverview::findOrFail($id);

        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Check if a new image is uploaded and delete the old one if exists
        if ($request->hasFile('image')) {
            if ($overview->image) {
                // Delete the old image from the public disk
                Storage::disk('public')->delete($overview->image);
            }
            // Store the new image in the public disk
            $imagePath = $request->file('image')->store('quick_overviews', 'public');
        } else {
            // Keep the old image if no new one is uploaded
            $imagePath = $overview->image;
        }

        // Update the Quick Overview record
        $overview->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('quick_overview.index')->with('success', 'Quick Overview updated successfully.');
    }

    public function destroy($id)
    {
        $overview = QuickOverview::findOrFail($id);

        // Delete the image from the public disk if it exists
        if ($overview->image) {
            Storage::disk('public')->delete($overview->image);
        }

        // Delete the Quick Overview record
        $overview->delete();

        return redirect()->route('quick_overview.index')->with('success', 'Quick Overview deleted successfully.');
    }
}
