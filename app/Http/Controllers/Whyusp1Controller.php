<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Whyusp1;

class Whyusp1Controller extends Controller
{
    public function index()
    {
        $data = Whyusp1::all();
        return view('whyusp1.index', compact('data'));
    }

    public function create()
    {
        return view('whyusp1.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Whyusp1::create($request->all());
        return redirect()->route('whyusp1.index')->with('success', 'Data added successfully.');
    }

    public function edit($id)
    {
        $data = Whyusp1::find($id);
        return view('whyusp1.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = Whyusp1::find($id);
        $data->update($request->all());
        return redirect()->route('whyusp1.index')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        Whyusp1::find($id)->delete();
        return redirect()->route('whyusp1.index')->with('success', 'Data deleted successfully.');
    }
}
