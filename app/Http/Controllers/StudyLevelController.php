<?php

namespace App\Http\Controllers;

use App\Models\StudyLevel;
use Illuminate\Http\Request;

class StudyLevelController extends Controller
{
    public function index()
    {
        $studyLevels = StudyLevel::all();
        return view('admin.hhAdmin.study_levels.index', compact('studyLevels'));
    }

    public function create()
    {
        return view('admin.hhAdmin.study_levels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        StudyLevel::create($request->all());

        return redirect()->route('study-levels.index')->with('success', 'Study Level created successfully.');
    }

    public function edit($id)
    {
        $studyLevel = StudyLevel::findOrFail($id);
        return view('admin.hhAdmin.study_levels.edit', compact('studyLevel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $studyLevel = StudyLevel::findOrFail($id);
        $studyLevel->update($request->all());

        return redirect()->route('study-levels.index')->with('success', 'Study Level updated successfully.');
    }

    public function destroy($id)
    {
        $studyLevel = StudyLevel::findOrFail($id);
        $studyLevel->delete();

        return redirect()->route('study-levels.index')->with('success', 'Study Level deleted successfully.');
    }
}
