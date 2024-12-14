<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UniversityAdmission;

class UniversityAdmissionController extends Controller
{
    public function index()
    {
        $admissions = UniversityAdmission::all();
        return view('admin.hhAdmin.services.universityAdmission.index', compact('admissions'));
    }

    public function create()
    {
        return view('admin.hhAdmin.services.universityAdmission.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'accordingTitle' => 'required|string',  // Changed to string to match the earlier modification
            'accordingcontent' => 'required|string',  // Changed to string to match the earlier modification
        ]);

        // Create the university admission record
        UniversityAdmission::create([
            'accordingTitle' => $request->accordingTitle,
            'accordingcontent' => $request->accordingcontent,
        ]);

        return redirect()->route('university-admissions.index')->with('success', 'Record created successfully.');
    }

    public function edit($id)
    {
        $admission = UniversityAdmission::findOrFail($id);
        return view('admin.hhAdmin.services.universityAdmission.edit', compact('admission'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'accordingTitle' => 'required|string',  // Changed to string to match the earlier modification
            'accordingcontent' => 'required|string',  // Changed to string to match the earlier modification
        ]);

        // Find the existing record
        $admission = UniversityAdmission::findOrFail($id);

        // Update the record with the new data
        $admission->update([
            'accordingTitle' => $request->accordingTitle,
            'accordingcontent' => $request->accordingcontent,
        ]);

        return redirect()->route('university-admissions.index')->with('success', 'Record updated successfully.');
    }

    public function destroy($id)
    {
        UniversityAdmission::findOrFail($id)->delete();
        return redirect()->route('university-admissions.index')->with('success', 'Record deleted successfully.');
    }
}
