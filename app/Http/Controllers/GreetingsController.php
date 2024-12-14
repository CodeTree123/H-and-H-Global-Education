<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Greeting;
use Illuminate\Support\Facades\Storage;

class GreetingsController extends Controller
{
    /**
     * Display a listing of the greetings.
     */
    public function index()
    {
        $greetings = Greeting::all();
        return view('admin.hhAdmin.greetings.index', compact('greetings'));
    }

    /**
     * Show the form for creating a new greeting.
     */
    public function create()
    {
        return view('admin.hhAdmin.greetings.create');
    }

    /**
     * Store a newly created greeting in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('greetings', 'public');
        }

        Greeting::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('greetings.index')->with('success', 'Greeting created successfully!');
    }

    /**
     * Show the form for editing the specified greeting.
     */
    public function edit($id)
    {
        $greeting = Greeting::findOrFail($id);
        return view('admin.hhAdmin.greetings.edit', compact('greeting'));
    }

    /**
     * Update the specified greeting in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $greeting = Greeting::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($greeting->image && Storage::disk('public')->exists($greeting->image)) {
                Storage::disk('public')->delete($greeting->image);
            }

            $greeting->image = $request->file('image')->store('greetings', 'public');
        }

        $greeting->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $greeting->image,
        ]);

        return redirect()->route('greetings.index')->with('success', 'Greeting updated successfully!');
    }

    /**
     * Remove the specified greeting from storage.
     */
    public function destroy($id)
    {
        $greeting = Greeting::findOrFail($id);

        if ($greeting->image && Storage::disk('public')->exists($greeting->image)) {
            Storage::disk('public')->delete($greeting->image);
        }

        $greeting->delete();

        return redirect()->route('greetings.index')->with('success', 'Greeting deleted successfully!');
    }
}