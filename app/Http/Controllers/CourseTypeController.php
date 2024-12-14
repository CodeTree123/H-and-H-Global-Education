<?php

namespace App\Http\Controllers;

use App\Models\CourseType;
use Illuminate\Http\Request;

class CourseTypeController extends Controller
{
    public function index()
    {
        $courseTypes = CourseType::all();
        return view('admin.hhAdmin.course-types.index', compact('courseTypes'));
    }

    public function create()
    {
        return view('admin.hhAdmin.course-types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        CourseType::create($request->all());

        return redirect()->route('course-types.index')->with('success', 'Course Type created successfully.');
    }

    public function edit($id)
    {
        $courseType = CourseType::findOrFail($id);
        return view('admin.hhAdmin.course-types.edit', compact('courseType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $courseType = CourseType::findOrFail($id);
        $courseType->update($request->all());

        return redirect()->route('course-types.index')->with('success', 'Course Type updated successfully.');
    }

    public function destroy($id)
    {
        $courseType = CourseType::findOrFail($id);
        $courseType->delete();

        return redirect()->route('course-types.index')->with('success', 'Course Type deleted successfully.');
    }
}
