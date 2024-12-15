<?php

namespace App\Http\Controllers;

use App\Models\CeoGreeting;
use Illuminate\Http\Request;

class CeoGreetingController extends Controller
{
    // Display all records
    public function index()
    {
        $pageTitle = 'CEO Greetings';
        $ceoGreetings = CeoGreeting::all();
        return view('admin.hhAdmin.about.ceo.index', compact('ceoGreetings', 'pageTitle'));
    }

    // Show the form for creating a new record
    public function create()
    {
        $pageTitle = 'Add New CEO Greeting';
        return view('admin.hhAdmin.about.ceo.create', compact('pageTitle'));
    }

    // Store a new record in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            'message' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'additional_info' => 'nullable|string',
        ]);

        $ceoGreeting = new CeoGreeting($request->except('image'));

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $ceoGreeting->image = $imageName;
        }

        $ceoGreeting->save();

        return redirect()->route('ceo-greetings.index')->with('success', 'Record created successfully.');
    }

    // Show the form for editing a specific record
    public function edit($id)

    {
        $pageTitle = 'Edit CEO Greeting';
        $ceoGreeting = CeoGreeting::findOrFail($id);
        return view('admin.hhAdmin.about.ceo.edit', compact('ceoGreeting', 'pageTitle'));
    }
    // Update a specific record
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            'message' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'additional_info' => 'nullable|string',
        ]);

        $ceoGreeting = CeoGreeting::findOrFail($id);
        $ceoGreeting->fill($request->except('image'));

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($ceoGreeting->image && file_exists(public_path('images/' . $ceoGreeting->image))) {
                unlink(public_path('images/' . $ceoGreeting->image));
            }

            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $ceoGreeting->image = $imageName;
        }

        $ceoGreeting->save();

        return redirect()->route('ceo-greetings.index')->with('success', 'Record updated successfully.');
    }

    // Delete a specific record
    public function destroy($id)
    {
        $ceoGreeting = CeoGreeting::findOrFail($id);

        // Delete image if exists
        if ($ceoGreeting->image && file_exists(public_path('images/' . $ceoGreeting->image))) {
            unlink(public_path('images/' . $ceoGreeting->image));
        }

        $ceoGreeting->delete();

        return redirect()->route('ceo-greetings.index')->with('success', 'Record deleted successfully.');
    }
}
