<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Country;
use App\Models\StudyLevel;
class CourseFinderController extends Controller
{
      public function index(Request $request)
        {
            $countries = Country::all();
            $universities = University::all();
            $courseTypes = CourseType::all();
            $studyLevels = StudyLevel::all();
            $selectedUniversityId = $request->query('university_id'); // Get selected university ID from the request
            // Get filter values from the request
            $selectedCountries = $request->query('countries', []);
            $selectedStudyLevels = $request->query('study_levels', []);
            $selectedCourseTypes = $request->query('course_types', []);
            
            $findCoursesQuery = Course::with(['university', 'courseType', 'studyLevel'])->select([
                'id',
                'university_id',
                'name',
                'description',
                'course_type_id',
                'study_level_id',
                'duration',
                'pathway_available',
                'created_at',
                'updated_at',
                'price',
                'slug'
            ]);
        
        // Get the filtered courses
        $findCourses = $findCoursesQuery->get();

            return view('h-and-h.pages.courseFinder', compact(
                'universities', 
                'findCourses', 
                'countries', 
                'courseTypes', 
                'studyLevels', 
            
            ));
        }
    
        public function filteredCourses(Request $request)
        {
            try {
                // Extracting filters from the request with defaults
                $locations = $request->input('location', []);
                $courseTypes = $request->input('course_type', []);
                $studyLevels = $request->input('study_level', []);
                $selectedUniversities = $request->input('selected_university', []);
        
                // Logging for debugging
                Log::info('Locations: ' . json_encode($locations));
                Log::info('Selected Universities: ' . json_encode($selectedUniversities));
        
                // Building the query with eager loading
                $query = Course::with(['university', 'courseType', 'studyLevel']);
        
                // Filtering by locations (matching country_id in university relation)
                if (!empty($locations)) {
                    $query->whereHas('university', function ($q) use ($locations) {
                        $q->whereIn('country_id', $locations);
                    });
                }
        
                // Filtering by selected universities
                if (!empty($selectedUniversities)) {
                    $query->whereHas('university', function ($q) use ($selectedUniversities) {
                        $q->whereIn('id', $selectedUniversities);
                    });
                }
        
                // Filtering by course types
                if (!empty($courseTypes)) {
                    $query->whereIn('course_type_id', $courseTypes);
                }
        
                // Filtering by study levels
                if (!empty($studyLevels)) {
                    $query->whereIn('study_level_id', $studyLevels);
                }
        
                // Execute the query
                $courses = $query->get();
        
                // Returning the response as JSON
                return response()->json([
                    'status' => 'success',
                    'data' => $courses,
                ]);
            } catch (\Exception $e) {
                // Handling errors with detailed error message for debugging
                Log::error('Error fetching courses: ' . $e->getMessage());
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed to fetch courses. Please try again.',
                    'error' => $e->getMessage(),
                ], 500);
            }
        }
}

