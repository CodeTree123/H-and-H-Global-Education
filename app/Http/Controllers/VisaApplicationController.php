<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisaApplication;

class VisaApplicationController extends Controller
{
    public function index()
    {
        $applications = VisaApplication::all();
        return view('admin.hhAdmin.services.visaApplication.index', compact('applications'));
    }

    public function create()
    {
        return view('admin.hhAdmin.services.visaApplication.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pageContent' => 'required|string', // Adjust field name based on your database schema
        ]);

        VisaApplication::create([
            'pageContent' => $request->pageContent, // Ensure the field matches your database schema
        ]);

        return redirect()->route('visa-application.index')->with('success', 'Visa application created successfully.');
    }

    public function edit($id)
    {
        $application = VisaApplication::findOrFail($id);
        return view('admin.hhAdmin.services.visaApplication.edit', compact('application'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pageContent' => 'required|string', // Adjust field name based on your database schema
        ]);

        $application = VisaApplication::findOrFail($id);
        $application->update([
            'pageContent' => $request->pageContent, // Ensure the field matches your database schema
        ]);

        return redirect()->route('visa-application.index')->with('success', 'Visa application updated successfully.');
    }

    public function destroy($id)
    {
        VisaApplication::findOrFail($id)->delete();
        return redirect()->route('visa-application.index')->with('success', 'Visa application deleted successfully.');
    }
}
