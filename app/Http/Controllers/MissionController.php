<?php
namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Store a newly created mission in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the request input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            // Create a new Mission record
            Mission::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            // Redirect with success message
            return redirect()->route('missions.index')->with('success', 'Mission created successfully.');
        } catch (\Exception $e) {
            // Handle error and return error message
            return redirect()->back()->with('error', 'Failed to create mission. ' . $e->getMessage());
        }
    }

    public function index()
    {
        $missionss = Mission::all();
        
        Log::alert($missionss);
        return view('admin.hhAdmin.about.index', compact('missionss'));
    }




}

