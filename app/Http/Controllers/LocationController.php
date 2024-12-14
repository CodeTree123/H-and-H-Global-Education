<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location; // Import the Location model

class LocationController extends Controller
{
    // Display all locations
    public function index()
    {
        $locations = Location::all();
        return view('admin.hhAdmin.locations.index', compact('locations'));
    }




    // frontend pass data
//     public function showGlobalBranches()
// {
//     $locations = Location::with('branches')->get(); // Fetch locations with branches
//     return view('h-and-h.include.header', compact('locations')); // Pass to the view
// }




    // Show form for creating a new location
    public function create()
    {
        return view('admin.hhAdmin.locations.create');
    }

    // Store a new location
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:locations',
        ]);
        Location::create($request->all());
        return redirect()->route('locations.index');
    }

    // Show the form to edit an existing location
    public function edit($id)
    {
        $location = Location::findOrFail($id);  // Get the location by its ID
        return view('admin.hhAdmin.locations.edit', compact('location'));
    }

    // Update the location details
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:locations,name,' . $id,  // Ensure unique name, excluding the current location
        ]);

        $location = Location::findOrFail($id);  // Get the location by its ID
        $location->update($request->all());  // Update location details

        return redirect()->route('locations.index');
    }

    // Delete a location
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->route('locations.index');
    }
}
