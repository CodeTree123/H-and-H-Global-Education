<?php
namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\University;
use App\Models\Course;
use App\Models\GlobalApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class GlobalApplyController extends Controller
{
    // Show the form for applying
    public function showForm()
    {
        $countries = Country::all();
        return view('h-and-h.pages.apply', compact('countries'));
    }
    public function selectedCourseForm($id)
    {
        $course = Course::with('university.country')->find($id);
        //dd($course->university->country_id);
        return view('h-and-h.pages.course_form', compact('course'));
    }

    // Store the application data
    public function store(Request $request)
    {
        // dd($request->all());
        
        try {
            $validated = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'date_of_birth' => 'required|date',
                'gender' => 'required|string',
                'email' => 'required|email|unique:globalapplies,email',
                'phone' => 'required|string|max:15',
                'country' => 'required|exists:countries,id', // Validate country as foreign key ID
                'university' => 'required|exists:universities,id', // Validate university as foreign key ID
                'course' => 'required|exists:courses,id', // Validate course as foreign key ID
                'mode_of_study' => 'required|string|max:255',
                'address' => 'required|string',
                'english_proficiency' => 'required|string',
                'visa_refusal' => 'required|string',
            ]);

            // Create and save application
            GlobalApply::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'date_of_birth' => $validated['date_of_birth'],
                'gender' => $validated['gender'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'country' => $validated['country'], // Save country ID
                'university' => $validated['university'], // Save university ID
                'course' => $validated['course'], // Save course ID
                'mode_of_study' => $validated['mode_of_study'],
                'address' => $validated['address'],
                'english_proficiency' => $validated['english_proficiency'],
                'visa_refusal' => $validated['visa_refusal'],
            ]);

            $notify[] = ['success', 'Application submitted successfully!'];
            return redirect()->route('apply.show')->withNotify($notify);
        } catch (\Throwable $th) {
            Log::alert($th);
            $notify[] = ['error', 'Something went wrong. Please try again later.'];
            return redirect()->route('apply.show')->withNotify($notify);
        }
    }

    // Fetch universities for a selected country (AJAX)
    public function getUniversities(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
        ]);

        $universities = University::where('country_id', $request->country_id)->get();
        return response()->json($universities);
    }

    // Fetch courses for a selected university (AJAX)
    public function getCourses(Request $request)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',
        ]);

        $courses = Course::where('university_id', $request->university_id)->get();
        return response()->json($courses);
    }

    // Show all applications (admin view)
    public function index()
    {
        $applications = GlobalApply::with('countryModal', 'universityModal', 'courseModal')->get();
        // $c = Country::all();
        // dd($c);
        // foreach ($applications as $application) {
        //     // Debug relationship
        //     if ($application->country) {
        //         echo 'Country ID: ' . $application->country->id . ' - Name: ' . $application->country->name;
        //     } else {
        //         echo 'No related country found for Application ID: ' . $application->id;
        //     }
        // }
        
        return view('admin.hhAdmin.applyForm.index', compact('applications'));
    }

    // Show the edit form for a specific application
    public function edit($id)
    {
        $application = GlobalApply::findOrFail($id);
        $countries = Country::all();
        $universities = University::all();
        $courses = Course::all();

        return view('admin.hhAdmin.applyForm.edit', compact('application', 'countries', 'universities', 'courses'));
    }

    // Update a specific application
    // public function update(Request $request, $id)
    // {
    //     $application = GlobalApply::findOrFail($id);

    //     $validated = $request->validate([
    //         'first_name' => 'required|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:globalapplies,email,' . $id,
    //         'phone' => 'required|string|max:15',
    //         'country' => 'required|exists:countries,id', // Validate country as foreign key ID
    //         'university' => 'required|exists:universities,id', // Validate university as foreign key ID
    //         'course' => 'required|exists:courses,id', // Validate course as foreign key ID
    //         'mode_of_study' => 'required|string|max:255',
    //     ]);

    //     $application->update($validated);

    //     $notify[] = ['success', 'Application updated successfully!'];
    //     return redirect()->route('globalApply.index')->withNotify($notify);
    // }

    // Delete a specific application
    public function destroy($id)
    {
        $application = GlobalApply::findOrFail($id);
        $application->delete();

        $notify[] = ['success', 'Application deleted successfully!'];
        return redirect()->route('globalApply.index')->withNotify($notify);
    }
}
