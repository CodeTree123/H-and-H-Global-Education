<?php
namespace App\Http\Controllers;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Include for file handling
class CountryController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        return view('admin.hhAdmin.countries.index', compact('countries'));
    }


          // desctination
          public function show($id)
            {
                $country = Country::findOrFail($id);
                return view('countryDestination', compact('country'));
            }




    public function create()
    {
        return view('admin.hhAdmin.countries.create');
    }

    /**
     * Store a newly created country in storage.
     */



     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required|string|max:255',
             'icon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
             'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
             'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
             'description' => 'nullable|string',
         ]);
     
         $country = new Country();
         $country->name = $request->name;
     
         // Handle file uploads
         if ($request->hasFile('icon')) {
             $icon = $request->file('icon');
             $iconName = time() . '_icon.' . $icon->getClientOriginalExtension();
             $icon->move(public_path('storage/countries/icons'), $iconName);
             $country->icon = 'countries/icons/' . $iconName;
         }
     
         if ($request->hasFile('thumbnail')) {
             $thumbnail = $request->file('thumbnail');
             $thumbnailName = time() . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
             $thumbnail->move(public_path('storage/countries/thumbnails'), $thumbnailName);
             $country->thumbnail = 'countries/thumbnails/' . $thumbnailName;
         }
     
         if ($request->hasFile('banner')) {
             $banner = $request->file('banner');
             $bannerName = time() . '_banner.' . $banner->getClientOriginalExtension();
             $banner->move(public_path('storage/countries/banners'), $bannerName);
             $country->banner = 'countries/banners/' . $bannerName;
         }
     
         $country->description = $request->description;
         $country->save();
     
         return redirect()->route('countries.index')->with('success', 'Country added successfully.');
     }
     
    /**
     * Show the form for editing the specified country.
     */




    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('admin.hhAdmin.countries.edit', compact('country'));
    }

    /**
     * Update the specified country in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        $country = Country::findOrFail($id);
        $country->name = $request->name;

        // Handle file uploads with old file deletion
        if ($request->hasFile('icon')) {
            // Delete old file if it exists
            if ($country->icon && file_exists(public_path($country->icon))) {
                unlink(public_path($country->icon));
            }

            // Save the new file
            $icon = $request->file('icon');
            $iconName = time() . '_icon.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage/countries/icons'), $iconName);
            $country->icon = 'countries/icons/' . $iconName;
        }

        if ($request->hasFile('thumbnail')) {
            // Delete old file if it exists
            if ($country->thumbnail && file_exists(public_path($country->thumbnail))) {
                unlink(public_path($country->thumbnail));
            }

            // Save the new file
            $thumbnail = $request->file('thumbnail');
            $thumbnailName = time() . '_thumbnail.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('storage/countries/thumbnails'), $thumbnailName);
            $country->thumbnail = 'countries/thumbnails/' . $thumbnailName;
        }

        if ($request->hasFile('banner')) {
            // Delete old file if it exists
            if ($country->banner && file_exists(public_path($country->banner))) {
                unlink(public_path($country->banner));
            }

            // Save the new file
            $banner = $request->file('banner');
            $bannerName = time() . '_banner.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('storage/countries/banners'), $bannerName);
            $country->banner = 'countries/banners/' . $bannerName;
        }

        $country->description = $request->description;
        $country->save();

        return redirect()->route('countries.index')->with('success', 'Country updated successfully.');
    }


    /**
     * Remove the specified country from storage.
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);

        // Optional: Delete files associated with the country if necessary
        if ($country->icon && Storage::exists('public/' . $country->icon)) {
            Storage::delete('public/' . $country->icon);
        }
        if ($country->thumbnail && Storage::exists('public/' . $country->thumbnail)) {
            Storage::delete('public/' . $country->thumbnail);
        }
        if ($country->banner && Storage::exists('public/' . $country->banner)) {
            Storage::delete('public/' . $country->banner);
        }

        $country->delete();

        return redirect()->route('countries.index')->with('success', 'Country deleted successfully.');
    }
}
