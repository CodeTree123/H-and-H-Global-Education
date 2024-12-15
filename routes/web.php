<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseMoreInfo;
use App\Http\Controllers\CourseFinderController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\countryDestinationController;
use App\Http\Controllers\GlobalApplyController;
use App\Http\Controllers\QuickOverviewController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\FreeCounsellingController;
use App\Http\Controllers\UniversityAdmissionController;
use App\Http\Controllers\StudentCounsellingController;
use App\Http\Controllers\VisaApplicationController;
use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\AirportPickupController;
use App\Http\Controllers\WhyUsController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\UniversityFinderController;
use App\Http\Controllers\CeoGreetingController;


Route::get('/clear', function(){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

// User Support Ticket
Route::controller('TicketController')->prefix('ticket')->name('ticket.')->group(function () {
    Route::get('/', 'supportTicket')->name('index');
    Route::get('new', 'openSupportTicket')->name('open');
    Route::post('create', 'storeSupportTicket')->name('store');
    Route::get('view/{ticket}', 'viewTicket')->name('view');
    Route::post('reply/{ticket}', 'replyTicket')->name('reply');
    Route::post('close/{ticket}', 'closeTicket')->name('close');
    Route::get('download/{ticket}', 'ticketDownload')->name('download');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

   Route::controller('SiteController')->group(function () {
    // h and h --------------------------routes
   // quicloverview frontend
    Route::get('/', 'handH')->name('landing');

    Route::get('/serviceAdmission-index', 'srAdmission')->name('serviceAdmission');

    Route::get('/student/counselling', 'ScounsellinG')->name('studentCounselling');
    Route::get('/visa/application', 'vishaApplication')->name('vishaApplications');
    Route::get('/finding/accommodation', 'Accommodationfrontend')->name('AccommodationfrontendRoute');
    Route::get('/airport/pickup', 'AirportPickupFrontend')->name('airport.Pickup');




    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'contactSubmit')->name('contact.submit');
    Route::get('/change/{lang?}', 'changeLanguage')->name('lang');

    Route::get('cookie-policy', 'cookiePolicy')->name('cookie.policy');

    Route::get('/cookie/accept', 'cookieAccept')->name('cookie.accept');

    Route::get('blog/{slug}/{id}', 'blogDetails')->name('blog.details');

    Route::get('policy/{slug}/{id}', 'policyPages')->name('policy.pages');

    Route::get('placeholder-image/{size}', 'placeholderImage')->name('placeholder.image');
});




// banner route
Route::get('/banner', [App\Http\Controllers\BannerController::class, 'index'])->name('banner.index');
Route::get('/banner/create', [App\Http\Controllers\BannerController::class, 'create'])->name('banner.create');
Route::post('/banner/store', [App\Http\Controllers\BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit');
Route::post('/banner/update/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.update');
Route::delete('/banner/delete/{id}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banner.delete');


// Student Say Routes
// Student Say Routes
Route::get('/students-says', [App\Http\Controllers\StudentSayController::class, 'index'])->name('students_says.index');
Route::get('/students-says/create', [App\Http\Controllers\StudentSayController::class, 'create'])->name('students_says.create');
Route::post('/students-says/store', [App\Http\Controllers\StudentSayController::class, 'store'])->name('students_says.store');
Route::get('/students-says/edit/{studentSay}', [App\Http\Controllers\StudentSayController::class, 'edit'])->name('students_says.edit');
Route::put('/students-says/update/{studentSay}', [App\Http\Controllers\StudentSayController::class, 'update'])->name('students_says.update');
Route::delete('/students-says/delete/{studentSay}', [App\Http\Controllers\StudentSayController::class, 'destroy'])->name('students_says.delete');

// "Latest Abroad News" section


Route::get('/latest-abroad-news', [App\Http\Controllers\LatestAbroadNewsController::class, 'index'])->name('latest_abroad_news.index');
Route::get('/latest-abroad-news/create', [App\Http\Controllers\LatestAbroadNewsController::class, 'create'])->name('latest_abroad_news.create');
Route::post('/latest-abroad-news/store', [App\Http\Controllers\LatestAbroadNewsController::class, 'store'])->name('latest_abroad_news.store');
Route::get('/latest-abroad-news/edit/{latestAbroadNews}', [App\Http\Controllers\LatestAbroadNewsController::class, 'edit'])->name('latest_abroad_news.edit');
Route::put('/latest-abroad-news/update/{latestAbroadNews}', [App\Http\Controllers\LatestAbroadNewsController::class, 'update'])->name('latest_abroad_news.update');
Route::delete('/latest-abroad-news/delete/{latestAbroadNews}', [App\Http\Controllers\LatestAbroadNewsController::class, 'destroy'])->name('latest_abroad_news.destroy');





// Routes for University Partners:
Route::get('/university-partners', [App\Http\Controllers\UniversityPartnerController::class, 'index'])->name('university_partners.index');
Route::get('/university-partners/create', [App\Http\Controllers\UniversityPartnerController::class, 'create'])->name('university_partners.create');
Route::post('/university-partners/store', [App\Http\Controllers\UniversityPartnerController::class, 'store'])->name('university_partners.store');
Route::get('/university-partners/edit/{universityPartner}', [App\Http\Controllers\UniversityPartnerController::class, 'edit'])->name('university_partners.edit');
Route::put('/university-partners/update/{universityPartner}', [App\Http\Controllers\UniversityPartnerController::class, 'update'])->name('university_partners.update');
Route::delete('/university-partners/{universityPartner}', [App\Http\Controllers\UniversityPartnerController::class, 'destroy'])->name('university_partners.destroy');



// find university



// Greetings Section
Route::get('/greetings', [App\Http\Controllers\GreetingsController::class, 'index'])->name('greetings.index');
Route::get('/greetings/create', [App\Http\Controllers\GreetingsController::class, 'create'])->name('greetings.create');
Route::post('/greetings/store', [App\Http\Controllers\GreetingsController::class, 'store'])->name('greetings.store');
Route::get('/greetings/edit/{id}', [App\Http\Controllers\GreetingsController::class, 'edit'])->name('greetings.edit');
Route::put('/greetings/update/{id}', [App\Http\Controllers\GreetingsController::class, 'update'])->name('greetings.update');
Route::delete('/greetings/delete/{id}', [App\Http\Controllers\GreetingsController::class, 'destroy'])->name('greetings.delete');




// Why H&H Global Education Routes
Route::get('/why-h-h', [App\Http\Controllers\WhyHHController::class, 'index'])->name('whyH&H.index');
Route::get('/why-h-h/create', [App\Http\Controllers\WhyHHController::class, 'create'])->name('whyH&H.create');
Route::post('/why-h-h/store', [App\Http\Controllers\WhyHHController::class, 'store'])->name('whyH&H.store');
Route::get('/why-h-h/edit/{id}', [App\Http\Controllers\WhyHHController::class, 'edit'])->name('whyH&H.edit');
Route::put('/why-h-h/update/{id}', [App\Http\Controllers\WhyHHController::class, 'update'])->name('whyH&H.update');
Route::delete('/why-h-h/delete/{id}', [App\Http\Controllers\WhyHHController::class, 'destroy'])->name('whyH&H.delete');



// Quick Overview Routes
Route::get('/quick-overview', [App\Http\Controllers\QuickOverviewController::class, 'index'])->name('quick_overview.index');
Route::get('/quick-overview/create', [App\Http\Controllers\QuickOverviewController::class, 'create'])->name('quick_overview.create');
Route::post('/quick-overview/store', [App\Http\Controllers\QuickOverviewController::class, 'store'])->name('quick_overview.store');
Route::get('/quick-overview/edit/{id}', [App\Http\Controllers\QuickOverviewController::class, 'edit'])->name('quick_overview.edit');
Route::put('/quick-overview/update/{id}', [QuickOverviewController::class, 'update'])->name('quick_overview.update');
Route::delete('/quick-overview/delete/{id}', [QuickOverviewController::class, 'destroy'])->name('quick_overview.delete');












// Country routes
Route::get('/countries', [App\Http\Controllers\CountryController::class, 'index'])->name('countries.index');
Route::get('/countries/create', [App\Http\Controllers\CountryController::class, 'create'])->name('countries.create');
Route::post('/countries/store', [App\Http\Controllers\CountryController::class, 'store'])->name('countries.store');
Route::get('/countries/edit/{id}', [App\Http\Controllers\CountryController::class, 'edit'])->name('countries.edit');
Route::put('/countries/update/{id}', [App\Http\Controllers\CountryController::class, 'update'])->name('countries.update');
Route::delete('/countries/{id}', [App\Http\Controllers\CountryController::class, 'destroy'])->name('countries.destroy');




// University routes
Route::get('/universities', [App\Http\Controllers\UniversityController::class, 'index'])->name('universities.index');
Route::get('/universities/create', [App\Http\Controllers\UniversityController::class, 'create'])->name('universities.create');
Route::post('/universities/store', [App\Http\Controllers\UniversityController::class, 'store'])->name('universities.store');
Route::get('/universities/edit/{id}', [App\Http\Controllers\UniversityController::class, 'edit'])->name('universities.edit');
Route::put('/universities/update/{id}', [App\Http\Controllers\UniversityController::class, 'update'])->name('universities.update');
Route::delete('/universities/{id}', [App\Http\Controllers\UniversityController::class, 'destroy'])->name('universities.destroy');





// Course Routes
Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [App\Http\Controllers\CourseController::class, 'create'])->name('courses.create');
Route::post('/courses/store', [App\Http\Controllers\CourseController::class, 'store'])->name('courses.store');
Route::post('/courses/store/info', [App\Http\Controllers\CourseController::class, 'moreInfostore'])->name('courses.more.info');
Route::get('/courses/edit/{id}', [App\Http\Controllers\CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/update/{id}', [App\Http\Controllers\CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{id}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('courses.destroy');
// Add this in your web.php for viewing course details
Route::get('courses/view/{id}', [App\Http\Controllers\CourseController::class, 'view'])->name('courses.view');


// CourseType routes
Route::get('/course-types', [App\Http\Controllers\CourseTypeController::class, 'index'])->name('course-types.index');
Route::get('/course-types/create', [App\Http\Controllers\CourseTypeController::class, 'create'])->name('course-types.create');
Route::post('/course-types', [App\Http\Controllers\CourseTypeController::class, 'store'])->name('course-types.store');
Route::get('/course-types/{id}/edit', [App\Http\Controllers\CourseTypeController::class, 'edit'])->name('course-types.edit');
Route::put('/course-types/{id}', [App\Http\Controllers\CourseTypeController::class, 'update'])->name('course-types.update');
Route::delete('/course-types/{id}', [App\Http\Controllers\CourseTypeController::class, 'destroy'])->name('course-types.destroy');


// Study Level routes
Route::get('/study-levels', [App\Http\Controllers\StudyLevelController::class, 'index'])->name('study-levels.index');
Route::get('/study-levels/create', [App\Http\Controllers\StudyLevelController::class, 'create'])->name('study-levels.create');
Route::post('/study-levels/store', [App\Http\Controllers\StudyLevelController::class, 'store'])->name('study-levels.store');
Route::get('/study-levels/edit/{id}', [App\Http\Controllers\StudyLevelController::class, 'edit'])->name('study-levels.edit');
Route::put('/study-levels/update/{id}', [App\Http\Controllers\StudyLevelController::class, 'update'])->name('study-levels.update');
Route::delete('/study-levels/{id}', [App\Http\Controllers\StudyLevelController::class, 'destroy'])->name('study-levels.destroy');

// course Finder 
Route::get('/course-finder', [App\Http\Controllers\CourseFinderController::class, 'index'])->name('course-finder');
Route::get('/course/{identifier}', [App\Http\Controllers\CourseController::class, 'singleCourse'])->name('course.single');




// University Destination
Route::get('/countryDestination/{id}', [App\Http\Controllers\countryDestinationController::class, 'index'])->name('countryDestination');
Route::get('/university-destination/{id}', [App\Http\Controllers\countryDestination::class, 'show'])->name('university.destination.show');




// songle university route 
Route::get('/university/pages/{id}', [App\Http\Controllers\UniversityController::class, 'show'])->name('university.show');


// Location routes
Route::get('/locations', [App\Http\Controllers\LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/create', [App\Http\Controllers\LocationController::class, 'create'])->name('locations.create');
Route::post('/locations/store', [App\Http\Controllers\LocationController::class, 'store'])->name('locations.store');
Route::get('/locations/edit/{id}', [App\Http\Controllers\LocationController::class, 'edit'])->name('locations.edit');
Route::put('/locations/update/{id}', [App\Http\Controllers\LocationController::class, 'update'])->name('locations.update');
Route::delete('/locations/{location}', [App\Http\Controllers\LocationController::class, 'destroy'])->name('locations.destroy');



// branch
Route::get('/branches', [App\Http\Controllers\BranchController::class, 'index'])->name('branches.index');
Route::get('/branches/{id}', [App\Http\Controllers\BranchController::class, 'show'])->name('branches.show'); 
Route::get('/branchesAdmin/create', [App\Http\Controllers\BranchController::class, 'create'])->name('branches.create');
Route::post('/branches/store', [App\Http\Controllers\BranchController::class, 'store'])->name('branches.store');
Route::get('/branches/edit/{id}', [App\Http\Controllers\BranchController::class, 'edit'])->name('branches.edit');
Route::put('/branches/update/{id}', [App\Http\Controllers\BranchController::class, 'update'])->name('branches.update');
Route::delete('/branches/{branch}', [App\Http\Controllers\BranchController::class, 'destroy'])->name('branches.destroy');





// Route to display the application form
Route::get('/apply', [GlobalApplyController::class, 'showForm'])->name('apply.show');
Route::get('/apply/course/{id}', [GlobalApplyController::class, 'selectedCourseForm'])->name('apply.CourseForm');
// Route to handle the submission of the form
Route::post('/apply/store', [GlobalApplyController::class, 'store'])->name('apply.store');
// Route to fetch universities based on the selected country
Route::post('/get-universities', [GlobalApplyController::class, 'getUniversities'])->name('get.universities');
// Route to fetch courses based on the selected university
Route::post('/get-courses', [GlobalApplyController::class, 'getCourses'])->name('get.courses');


// free counselling apply form

// Frontend Route
Route::get('/free-counseling', [FreeCounsellingController::class, 'showForm'])->name('freecounselling.form');
Route::post('/free-counseling/submit', [FreeCounsellingController::class, 'store'])->name('freecounselling.store');
// Admin Panel Routes
Route::get('/admin/free-counsellings', [FreeCounsellingController::class, 'index'])->name('freecounselling.index');





// show data admin
Route::get('/admin/global-apply', [GlobalApplyController::class, 'index'])->name('globalApply.index');
Route::get('/global-apply/{id}/edit', [GlobalApplyController::class, 'edit'])->name('globalApply.edit');
Route::put('/global-apply/{id}', [GlobalApplyController::class, 'update'])->name('globalApply.update');
Route::delete('/global-apply/{id}', [GlobalApplyController::class, 'destroy'])->name('globalApply.destroy');







use App\Http\Controllers\ServiceController;

Route::get('/student-admission', [ServiceController::class, 'studentAdmission'])->name('student.admission');
Route::get('/student-counseling', [ServiceController::class, 'studentCounseling'])->name('student.counseling');
Route::get('/visa-application', [ServiceController::class, 'visaApplication'])->name('visa.application');
Route::get('/student-accommodation', [ServiceController::class, 'studentAccommodation'])->name('student.accommodation');
Route::get('/airport-pickup', [ServiceController::class, 'airportPickup'])->name('airport.pickup');

// About Section

Route::get('/why-us', [ServiceController::class, 'whyUs'])->name('why.us');
Route::get('/greetings-ceo', [ServiceController::class, 'greetingsCEO'])->name('greetings.ceo');
Route::get('/news-blog', [ServiceController::class, 'newsBlog'])->name('news.blog');
Route::get('/our-team', [ServiceController::class, 'ourTeam'])->name('our.team');
Route::get('/our-event', [ServiceController::class, 'eventSection'])->name('event');










// index more info
Route::get('/course/more/info', [CourseController::class, 'moreInfoIndex'])->name('course.more.info.index');
Route::get('/course/more/info/edit/{id}', [CourseController::class, 'moreInfoEdit'])->name('course.more.info.edit');
Route::post('/course/more/info/edit/post', [CourseController::class, 'moreInfoEditPost'])->name('course.more.info.edit.post');
Route::get('admin/hhadmin/courses/more_info/index', [CourseController::class, 'index'])->name('admin.hhadmin.courses.more_info.index');

Route::delete('/course/more/info/delete/{id}', [CourseController::class, 'moreInfoDelete'])->name('course.more.info.delete');

// services module 
Route::get('/university-admissions', [UniversityAdmissionController::class, 'index'])->name('university-admissions.index');
Route::get('/university-admissions/create', [UniversityAdmissionController::class, 'create'])->name('university-admissions.create');
Route::post('/university-admissions', [UniversityAdmissionController::class, 'store'])->name('university-admissions.store');
Route::get('/university-admissions/{id}/edit', [UniversityAdmissionController::class, 'edit'])->name('university-admissions.edit');
Route::put('/university-admissions/{id}', [UniversityAdmissionController::class, 'update'])->name('university-admissions.update');
Route::delete('/university-admissions/{id}', [UniversityAdmissionController::class, 'destroy'])->name('university-admissions.destroy');

 

// Student-counselling
Route::get('/student-counselling', [StudentCounsellingController::class, 'index'])->name('student-counselling.index');
Route::get('/student-counselling/create', [StudentCounsellingController::class, 'create'])->name('student-counselling.create');
Route::post('/student-counselling', [StudentCounsellingController::class, 'store'])->name('student-counselling.store');
Route::get('/student-counselling/{id}/edit', [StudentCounsellingController::class, 'edit'])->name('student-counselling.edit');
Route::put('/student-counselling/{id}', [StudentCounsellingController::class, 'update'])->name('student-counselling.update');
Route::delete('/student-counselling/{id}', [StudentCounsellingController::class, 'destroy'])->name('student-counselling.destroy');




// visha Application
Route::get('/visa-applicationsss', [VisaApplicationController::class, 'index'])->name('visa-application.index');
Route::get('/visa-application/create', [VisaApplicationController::class, 'create'])->name('visa-application.create');
Route::post('/visa-application', [VisaApplicationController::class, 'store'])->name('visa-application.store');
Route::get('/visa-application/{id}/edit', [VisaApplicationController::class, 'edit'])->name('visa-application.edit');
Route::put('/visa-application/{id}', [VisaApplicationController::class, 'update'])->name('visa-application.update');
Route::delete('/visa-application/{id}', [VisaApplicationController::class, 'destroy'])->name('visa-application.destroy');



// Accommodation 

Route::get('/accommodation', [AccommodationController::class, 'index'])->name('accommodation.index');
Route::get('/accommodation/create', [AccommodationController::class, 'create'])->name('accommodation.create');
Route::post('/accommodation', [AccommodationController::class, 'store'])->name('accommodation.store');
Route::get('/accommodation/{id}/edit', [AccommodationController::class, 'edit'])->name('accommodation.edit');
Route::put('/accommodation/{id}', [AccommodationController::class, 'update'])->name('accommodation.update');
Route::delete('/accommodation/{id}', [AccommodationController::class, 'destroy'])->name('accommodation.destroy');




// Airport Pickup module
Route::get('/airport-pickup', [AirportPickupController::class, 'index'])->name('airport-pickup.index');
Route::get('/airport-pickup/create', [AirportPickupController::class, 'create'])->name('airport-pickup.create');
Route::post('/airport-pickup', [AirportPickupController::class, 'store'])->name('airport-pickup.store');
Route::get('/airport-pickup/{id}/edit', [AirportPickupController::class, 'edit'])->name('airport-pickup.edit');
Route::put('/airport-pickup/{id}', [AirportPickupController::class, 'update'])->name('airport-pickup.update');
Route::delete('/airport-pickup/{id}', [AirportPickupController::class, 'destroy'])->name('airport-pickup.destroy');



















// university finder

Route::get('/find-universities', [UniversityFinderController::class, 'index'])->name('university-finder');




Route::get('/all/courses', [CourseFinderController::class, 'index'])->name('course-finder');
// Course filter Section
Route::get('/filter-courses', [CourseFinderController::class, 'index'])->name('filter.courses');
Route::get('/filtered', [CourseFinderController::class, 'filteredCourses'])->name('filtered.courses');































// About Section
Route::post('/missions', [MissionController::class, 'store'])->name('missions.store');
Route::get('/why-us-index', [WhyUsController::class, 'index'])->name('why-us.index');
Route::get('/missions/create', [MissionController::class, 'create'])->name('missions.create');
Route::get('/missions/{id}/edit', [MissionController::class, 'edit'])->name('missions.edit');
Route::put('/missions/{id}', [MissionController::class, 'update'])->name('missions.update');
Route::delete('/missions/{id}', [MissionController::class, 'destroy'])->name('missions.destroy');



// greetings form ceo admin

// Display all records
Route::get('/ceo-greetings', [CeoGreetingController::class, 'index'])->name('ceo-greetings.index');

// Show form to create a new record
Route::get('/ceo-greetings/create', [CeoGreetingController::class, 'create'])->name('ceo-greetings.create');

// Store a new record
Route::post('/ceo-greetings', [CeoGreetingController::class, 'store'])->name('ceo-greetings.store');

// Show form to edit a specific record
Route::get('/ceo-greetings/{id}/edit', [CeoGreetingController::class, 'edit'])->name('ceo-greetings.edit');

// Update a specific record
Route::put('/ceo-greetings/{id}', [CeoGreetingController::class, 'update'])->name('ceo-greetings.update');

// Delete a specific record
Route::delete('/ceo-greetings/{id}', [CeoGreetingController::class, 'destroy'])->name('ceo-greetings.destroy');
