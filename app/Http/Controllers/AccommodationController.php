<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accommodation;

class AccommodationController extends Controller
{
    public function index()
    {
        $accommodations = Accommodation::all();
        return view('admin.hhAdmin.services.accommodation.index', compact('accommodations'));
    }

    public function create()
    {
        return view('admin.hhAdmin.services.accommodation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pageContent' => 'required|string',
        ]);

        Accommodation::create([
            'pageContent' => $request->pageContent,
        ]);

        return redirect()->route('accommodation.index')->with('success', 'Accommodation created successfully.');
    }

    public function edit($id)
    {
        $accommodation = Accommodation::findOrFail($id);
        return view('admin.hhAdmin.services.accommodation.edit', compact('accommodation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pageContent' => 'required|string',
        ]);

        $accommodation = Accommodation::findOrFail($id);
        $accommodation->update([
            'pageContent' => $request->pageContent,
        ]);

        return redirect()->route('accommodation.index')->with('success', 'Accommodation updated successfully.');
    }

    public function destroy($id)
    {
        Accommodation::findOrFail($id)->delete();
        return redirect()->route('accommodation.index')->with('success', 'Accommodation deleted successfully.');
    }
}
