<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentCounselling;

class StudentCounsellingController extends Controller
{
    public function index()
    {
        $counsellings = StudentCounselling::all();
        return view('admin.hhAdmin.services.studentCounselling.index', compact('counsellings'));
    }

    public function create()
    {
        return view('admin.hhAdmin.services.studentCounselling.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pageContent' => 'required|string', // Validate the correct field name
        ]);

        StudentCounselling::create([
            'pageContent' => $request->pageContent, // Use the correct database field name
        ]);

        return redirect()->route('student-counselling.index')->with('success', 'Record created successfully.');
    }

    public function edit($id)
    {
        $counselling = StudentCounselling::findOrFail($id);
        return view('admin.hhAdmin.services.studentCounselling.edit', compact('counselling'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pageContent' => 'required|string', // Validate the correct field name
        ]);

        $counselling = StudentCounselling::findOrFail($id);
        $counselling->update([
            'pageContent' => $request->pageContent, // Use the correct database field name
        ]);

        return redirect()->route('student-counselling.index')->with('success', 'Record updated successfully.');
    }

    public function destroy($id)
    {
        StudentCounselling::findOrFail($id)->delete();
        return redirect()->route('student-counselling.index')->with('success', 'Record deleted successfully.');
    }
}
