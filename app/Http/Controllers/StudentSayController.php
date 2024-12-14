<?php
namespace App\Http\Controllers;

use App\Models\StudentSay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentSayController extends Controller
{
    // Display a listing of the testimonials
    public function index()
    {
        $studentsSays = StudentSay::all();
        return view('admin.hhAdmin.studentSays.index', compact('studentsSays'));
    }

    // Show the form for creating a new testimonial
    public function create()
    {
        return view('admin.hhAdmin.studentSays.create');
    }

    // Store a newly created testimonial in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $imagePath = $request->hasFile('image') 
            ? $request->file('image')->store('student_says', 'public')
            : null;

        // Create the testimonial entry in the database
        StudentSay::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('students_says.index')->with('success', 'Testimonial created successfully!');
    }

    // Show the form for editing a specific testimonial
    public function edit(StudentSay $studentSay)
    {
        return view('admin.hhAdmin.studentSays.edit', compact('studentSay'));
    }

    // Update the specified testimonial in storage
    public function update(Request $request, StudentSay $studentSay)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($studentSay->image && Storage::exists('public/' . $studentSay->image)) {
                Storage::delete('public/' . $studentSay->image);
            }

            $imagePath = $request->file('image')->store('student_says', 'public');
        } else {
            $imagePath = $studentSay->image;
        }

        // Update testimonial in the database
        $studentSay->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('students_says.index')->with('success', 'Testimonial updated successfully!');
    }

    // Remove the specified testimonial from storage
    public function destroy(StudentSay $studentSay)
    {
        if ($studentSay->image && Storage::exists('public/' . $studentSay->image)) {
            Storage::delete('public/' . $studentSay->image);
        }

        $studentSay->delete();
        return redirect()->route('students_says.index')->with('success', 'Testimonial deleted successfully!');
    }
}
