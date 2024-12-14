<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;
class BannerController extends Controller


{
    // Banner list page
    public function index()
    {
        $banners = Banner::all(); 
        return view('admin.hhAdmin.banner.index', compact('banners'));
    }


    // Create banner form page
    public function create()
    {
        return view('admin.hhAdmin.banner.create');
    }






    
    // Store banner in database
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        // Save the banner
        $banner = new Banner();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = public_path('storage/banners');
            $fileName = time() . '_' . $file->getClientOriginalName();
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
            $file->move($destinationPath, $fileName);
            $banner->image = 'banners/' . $fileName;
        }
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->save();
    
        return redirect()->route('banner.index');
    }





    // Edit banner form page
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.hhAdmin.banner.edit', compact('banner'));
    }

    // Update banner in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($banner->image && file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
            }

            // Save the new image
            $image = $request->file('image');
            $imageName = time() . '_banner.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/banners'), $imageName);

            // Save the relative path to the database
            $banner->image = 'banners/' . $imageName;
        }

        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->save();
        return redirect()->route('banner.index')->with('success', 'Banner updated successfully.');
    }


    // Delete banner from database
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('banner.index');
    }
}
