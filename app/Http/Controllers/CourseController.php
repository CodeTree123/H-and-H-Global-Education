<?php
namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\CourseMoreInfo;
use App\Models\University;
use App\Models\CourseType;
use App\Models\StudyLevel;
use Illuminate\Http\Request;
class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('admin.hhAdmin.courses.index', compact('courses'));
    }
    public function create()
    {
        $universities = University::all();
        $courseTypes = CourseType::all();
        $studyLevels = StudyLevel::all();
        return view('admin.hhAdmin.courses.create', compact('universities', 'courseTypes', 'studyLevels'));
    }



    // view more blade 
    public function view($id)
    {
        $course = Course::findOrFail($id);
        
        return view('admin.hhAdmin.courses.view', compact('course'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'tution_fees' => 'required|string',
            'course_type_id' => 'required|exists:course_types,id',
            'study_level_id' => 'required|exists:study_levels,id',
            'duration' => 'nullable|string',
            'pathway_available' => 'nullable',
            'price' => 'required|string',
            'date' => 'required|date_format:Y-m-d',
            'key_facts' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle file upload
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $fileName = time() . '_' . $file->getClientOriginalName(); 
            $iconPath = 'course/icons/' . $fileName; 
            $file->move(public_path('course/icons'), $fileName); 
        } else {
            $iconPath = null;
        }
    
        // Create the course
        $course = Course::create($request->except('icon'));
        
        $course->slug = $request->name;
        $course->save();
    
        $moreInfo = new CourseMoreInfo();
        $moreInfo->course_id = $course->id; 
        $moreInfo->description = $request->description;
        $moreInfo->icon = $iconPath; 
        $moreInfo->save();
    
        return redirect()->route('courses.index')->with('success', 'Course added successfully.');
    }

    public function moreInfostore(Request $request)
{
    // Validate the request
    $request->validate([
        'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'course_id' => 'required|integer',
        'description' => 'required|string',
    ]);

    // Handle file upload
    if ($request->hasFile('icon')) {
        // Get the uploaded file
        $file = $request->file('icon');
        // Generate a unique filename with timestamp
        $fileName = time() . '_' . $file->getClientOriginalName();
        // Move the file to the public directory
        $iconPath = 'course/icons/' . $fileName;
        $file->move(public_path('course/icons'), $fileName);
    } else {
        // If no file is uploaded, set the icon path to null
        $iconPath = null;
    }
    

    // Save the data to the database
    $more = new CourseMoreInfo();
    $more->course_id = $request->course_id;
    $more->description = $request->description;
    $more->icon = $iconPath; // Save the file path or null if no file uploaded
    $more->save();

    // Redirect with success message
    return redirect()->route('courses.index')->with('success', 'More Info added successfully.');
}

    

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $universities = University::all();
        $courseTypes = CourseType::all();
        $studyLevels = StudyLevel::all();
        return view('admin.hhAdmin.courses.edit', compact('course', 'universities', 'courseTypes', 'studyLevels'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'course_type_id' => 'required|exists:course_types,id',
            'study_level_id' => 'required|exists:study_levels,id',
            'duration' => 'nullable|string',
            'pathway_available' => 'nullable',
            

        ]);

        $course = Course::findOrFail($id);
        $course->update($request->all());
        $moreInfo =  CourseMoreInfo::where('course_id', $course->id)->first();
        $moreInfo->description = $request->description;
        $moreInfo->save();
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');

    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }

    // more info controller
    public function singleCourse($identifier)
    {
        // Attempt to find the course using `id` or `slug`.
        $course = Course::with('moreInfo')
            ->where('id', $identifier)
            ->orWhere('slug', $identifier)
            ->first();
    
        // Check if course is found; otherwise, handle the error (optional).
        if (!$course) {
            abort(404, 'Course not found');
        }
    
        return view('h-and-h.pages.moreInfo', compact('course'));
    }
    

    public function moreInfoIndex(){
        $pageTitle = "Course More Info";
        $courses = Course::all();
        $infos = CourseMoreInfo::all();
        return view('admin.hhadmin.courses.more_info.index', compact('pageTitle','infos','courses'));
    }
    public function moreInfoEdit($id){
        $pageTitle = "Course More Info Edit";
        $infos = CourseMoreInfo::find($id);
        return view('admin.hhadmin.courses.more_info.edit', compact('pageTitle','infos'));
    }
    public function moreInfoEditPost(Request $request)
    {
        $infos = CourseMoreInfo::find($request->id);
        if ($infos->icon && file_exists(public_path($infos->icon))) {
            unlink(public_path($infos->icon)); // Delete the existing icon file
        }
    
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $iconPath = 'course/icons/' . $fileName;
            $file->move(public_path('course/icons'), $fileName);
        } else {
            $iconPath = $infos->icon; 
        }
    
        $infos->description = $request->description;
        $infos->icon = $iconPath;
        $infos->save();
        return redirect()->route('course.more.info.index')
        ->with('success', 'Information updated successfully!');    }
    
    public function moreInfoDelete($id)
    {
        $infos = CourseMoreInfo::find($id);
    
        if (!$infos) {
            return response()->json(['message' => 'Course information not found'], 404);
        }
    
        // Delete the icon file if it exists
        if ($infos->icon && file_exists(public_path($infos->icon))) {
            unlink(public_path($infos->icon));
        }
    
        $infos->delete();
    
        return redirect()->route('course.more.info.index')->with('success', 'Information deleted successfully');
    }

}
