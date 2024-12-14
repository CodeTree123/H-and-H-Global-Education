<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whyusp3;

class Whyusp3Controller extends Controller
{
    public function index()
    {
        $data = Whyusp3::all();
        return view('whyusp3.index', compact('data'));
    }

    public function create()
    {
        return view('whyusp3.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('whyusp3', 'public');
        Whyusp3::create(['image' => $imagePath]);
        return redirect()->route('whyusp3.index')->with('success', 'Data added successfully.');
    }

    public function edit($id)
    {
        $data = Whyusp3::find($id);
        return view('whyusp3.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image',
        ]);

        $data = Whyusp3::find($id);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('whyusp3', 'public');
            $data->update(['image' => $imagePath]);
        }
        return redirect()->route('whyusp3.index')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        Whyusp3::find($id)->delete();
        return redirect()->route('whyusp3.index')->with('success', 'Data deleted successfully.');
    }
}
