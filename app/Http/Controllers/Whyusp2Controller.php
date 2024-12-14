<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Whyusp2;

class Whyusp2Controller extends Controller
{
    public function index()
    {
        $data = Whyusp2::all();
        return view('whyusp2.index', compact('data'));
    }

    public function create()
    {
        return view('whyusp2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'about' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('whyusp2', 'public');

        Whyusp2::create(array_merge($request->all(), ['image' => $imagePath]));
        return redirect()->route('whyusp2.index')->with('success', 'Data added successfully.');
    }

    public function edit($id)
    {
        $data = Whyusp2::find($id);
        return view('whyusp2.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'about' => 'required',
            'image' => 'nullable|image',
        ]);

        $data = Whyusp2::find($id);
        $data->update($request->all());
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('whyusp2', 'public');
            $data->update(['image' => $imagePath]);
        }
        return redirect()->route('whyusp2.index')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        Whyusp2::find($id)->delete();
        return redirect()->route('whyusp2.index')->with('success', 'Data deleted successfully.');
    }
}
