<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AirportPickup;

class AirportPickupController extends Controller
{
    public function index()
    {
        $airportPickups = AirportPickup::all();
        return view('admin.hhAdmin.services.airportPickup.index', compact('airportPickups'));
    }

    public function create()
    {
        return view('admin.hhAdmin.services.airportPickup.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pageContent' => 'required|string',
        ]);

        AirportPickup::create([
            'pageContent' => $request->pageContent,
        ]);

        return redirect()->route('airport-pickup.index')->with('success', 'Airport Pickup created successfully.');
    }

    public function edit($id)
    {
        $airportPickup = AirportPickup::findOrFail($id);
        return view('admin.hhAdmin.services.airportPickup.edit', compact('airportPickup'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pageContent' => 'required|string',
        ]);

        $airportPickup = AirportPickup::findOrFail($id);
        $airportPickup->update([
            'pageContent' => $request->pageContent,
        ]);

        return redirect()->route('airport-pickup.index')->with('success', 'Airport Pickup updated successfully.');
    }

    public function destroy($id)
    {
        AirportPickup::findOrFail($id)->delete();
        return redirect()->route('airport-pickup.index')->with('success', 'Airport Pickup deleted successfully.');
    }
}
