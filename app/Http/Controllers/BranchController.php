<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Location;
class BranchController extends Controller
{
    // Display all branches
    public function index()
    {
        $branches = Branch::with('location')->get();
        return view('admin.hhAdmin.branches.index', compact('branches'));
    }

    // Display specific branch details
    public function show($id)
    {
        $branch = Branch::findOrFail($id);
        return view('h-and-h.pages.branch', compact('branch'));
    }

    // Create a new branch
    public function create()
    {
        $locations = Location::all();
    
        return view('admin.hhAdmin.branches.create', compact('locations'));
    }

    // Store branch details
    public function store(Request $request)
    {
        $request->validate([
            'branch_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'facebook_page' => 'nullable|string',
            'location_id' => 'required|exists:locations,id',
            'location_map' => 'required|string', // Map iframe code
        ]);

        Branch::create($request->all());
        return redirect()->route('branches.index');
    }

    // Edit branch details
    public function edit($id)
    {
        $branch = Branch::findOrFail($id);
        $locations = Location::all();
        return view('admin.hhAdmin.branches.edit', compact('branch', 'locations'));
    }

    // Update branch details
    public function update(Request $request, $id)
    {
        $request->validate([
            'branch_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'location_id' => 'required|exists:locations,id',
        ]);

        $branch = Branch::findOrFail($id);
        $branch->update($request->all());
        return redirect()->route('branches.index');
    }

    // Delete a branch
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('branches.index');
    }
}
