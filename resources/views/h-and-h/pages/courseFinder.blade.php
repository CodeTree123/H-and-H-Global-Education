
@extends('h-and-h.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
    <style>
        .search-section {
            background: linear-gradient(135deg, #D0142C, #00237D), url('img/find-course.jpg') no-repeat center center/cover;
            position: relative;
            padding: 60px 0;
            text-align: center;
            color: #ffffff;
        }

        .search-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 35, 125, 0.7);
            backdrop-filter: blur(1px);
            z-index: 1;
        }

        .search-section h2 {
            margin-bottom: 20px;
            font-size: 28px;
            z-index: 2;
        }

        .searchbar-container {
            position: relative;
            z-index: 2;
        }

        .searchbar {
            width: 100%;
            max-width: 600px;
            padding: 12px;
            border-radius: 5px 0 0 5px;
            outline: none;
            font-size: 16px;
            border: none;
        }

        .search-button {
            background-color: #D0142C;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 16px;
        }




        @media only screen and (max-width: 768px) {

            .search-button{
                margin-top: 10px;
            }
  
        }





        .search-button:hover {
            background-color: #B01226;
        }

        .university-section {
            padding: 40px 0;
        }

        .university-section h4 {
            font-size: 18px;
            margin-bottom: 50px;
        }

        .university-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .university-item {
            width: 100px;
            padding: 10px;
            display: flex;
            justify-content: center;
            background-color: #fff;
            border-radius: 10px;
            transition: box-shadow 0.3s, transform 0.3s;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .university-item:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }

        .university-item img {
            max-height: 40px;
            padding: 5px; /* Added padding for icons */
        }

        .toggle-section {
            margin-top: 15px;
        }

        .toggle-switch {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            background-color: #fff;
            margin-bottom: 10px;
            transition: box-shadow 0.3s;
        }

        .toggle-switch:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .toggle-switch input {
            width: 40px;
            height: 20px;
            appearance: none;
            background-color: #ccc;
            border-radius: 20px;
            position: relative;
            cursor: pointer;
        }

        .toggle-switch input:checked {
            background-color: #007bff;
        }

        .toggle-switch input::before {
            content: '';
            position: absolute;
            width: 18px;
            height: 18px;
            background-color: white;
            border-radius: 50%;
            top: 1px;
            left: 1px;
            transition: transform 0.3s;
        }

        .toggle-switch input:checked::before {
            transform: translateX(20px);
        }

        .course-card .row {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 20px;
            background-color: #fff;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .course-card .row:hover {
            /* transform: translateY(-5px); */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border: 1px solid #D0142C;
            border-top: 1px solid #00237D;
        }

        .card-body {
            font-size: 14px;
            padding: 20px;
        }

        .card-body small {
            font-size: 12px;
        }

        .card-body h5 a {
            font-size: 18px;
            font-weight: bold;
            color: #1f2a56;
            transition: color 0.3s;
        }

        .card-body h5 a:hover {
            color: #D0142C; /* Change color on hover */
        }

        .btn-outline-primary {
            border-color: #6c757d;
            color: #6c757d;
        }

        .btn-outline-primary:hover {
            background-color: #6c757d;
            color: white;
        }

        .btn-primary {
            background-color: #1f2a56;
            border-color: #1f2a56;
        }

        .btn-primary:hover {
            background-color: #14203d;
        }

        .text-warning {
            color: #f39c12;
        }

        .text-primary:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .searchbar {
                width: 80%;
            }

            .university-item {
                width: 100px;
            }
        }


        .moreinfo:hover{
            background: #D0142C;
            color: white;
        }
    </style>
    <style>
        .logo-responsive{
            width: 100px;
        }
    
        @media (max-width:768px){
            .logo-responsive{
                width: 74px;
            }
        }
        @media (max-width: 768px) {
        .topbar .contact-info {
           font-size: 15px;
           
        }
        .topbar .btn-book-meeting{
            display: none;
           }
    
    
           .navbar-brand img{
            width: 78px;
           }
           
      }
        body{width:100%}
        *{margin:0px;padding:0px;box-sizing:border-box;}
        #whats-chat{position:fixed;right:3%;bottom:10%;height:auto;width:auto;background:#25D366;padding:12.5px;border-radius:50px;}
        #whats-chat:hover{cursor:pointer;box-shadow:2px 2px 15px #ccc;bottom:11%;}
        /*===============================*/
        #chat-box{position:fixed;right:-500px;bottom:18%;width:250px;height:200px;transition:all .5s;}
        #chat-top{width:100%;line-height:2;background:rgb(18, 140, 126);color:white;text-align:center;border-radius:5px 5px 0 0;padding:0 10px;}
        #chat-msg{background:#ece5dd;padding:10px;border-radius:0 0 5px 5px;box-shadow:0 0 25px -10px #999;}
        #chat-msg p{font-size:14px;padding:5px;background:white;border-radius:0 50px 50px 50px;margin-bottom:10px;}
        #chat-form{display:flex;}
        .chat-in{width:80%;}
        #chat-form input{border-radius:5px 0 5px 5px;border:none;outline:none;font-size:14px;padding:5px;line-height:2;}
        #send-btn{width:20%;padding: 0 5px;}
        #chat-top-right{float:right;padding:5px 0;}
        #chat-box:after{content:'';
        position: absolute;
          top:58%;
          left: 90%;
          width: 0;
          height: 0;
          border-top: 25px solid transparent;
        border-bottom: 25px solid transparent; 
        
        border-right:25px solid #ece5dd;}
      .right{float:right}
      .clear{clear:both}
      /* Navbar link hover effect with bottom line */
    .navbar-nav .nav-link {
        position: relative;
        transition: color 0.3s ease;
    }
    
    .navbar-nav .nav-link:hover {
        color: #D0142C;
    }
    
    .navbar-nav .nav-link::after {
        /* content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #D0142C;
        transition: width 0.3s ease; */
    }
    
    /* .navbar-nav .nav-link:hover::after {
        width: 100%;
    } */
    
    /* Dropdown menu style */
    .dropdown-menu {
        display: none;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
    }
    
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        opacity: 1;
        visibility: visible;
        margin-top: 0; /* Dropdown animation */
    }
    
    /* Additional styling for dropdown */
    .dropdown-menu {
        border: none;
        background-color: #f8f9fa;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }
    
    .dropdown-item:hover {
        background-color: #f0f0f0;
    }
    
    /* Smooth transition for dropdown animation */
    .nav-item.dropdown .dropdown-menu {
        margin-top: 20px;
        transition: margin-top 0.3s ease;
    }
    
    /* Navbar Brand Font Styling */
    .navbar-brand span {
        transition: color 0.3s ease;
    }
    
    .navbar-brand:hover span {
        color: #D0142C;
    }
      </style>




                <div class="container-fluid">
                        <div class="search-section text-center">
                            <!-- <h2 class="text-white">List of UK Universities</h2> -->
                            <div class="searchbar-container mb-4">
                                <input type="text" class="searchbar" placeholder="Enter course name, university, or location">
                                <button class="search-button">Search</button>
                            </div>
                        </div>
                    <div class="container">
                                <div class="row ">
                                    <div class="col-md-4 " style="background-color: #EEEE;">
                                        <div class="university-section">
                                            <h3>University</h3>
                                            <div class="university-grid mt-2">
                                            @foreach($universities as $university)
                                            <div class="university-item d-flex align-items-center mb-3">
                                                <input 
                                                    type="checkbox" 
                                                    id="university{{ $university->id }}" 
                                                    class="form-check-input me-2" 
                                                    value="{{ $university->id }}" 
                                                    name="universities[]"
                                                >
                                                <label for="university{{ $university->id }}" class="d-flex align-items-center">
                                                    <img 
                                                        style="width: 80px;" 
                                                        src="{{ asset('images/' . $university->image) }}" 
                                                        alt="{{ $university->name }}" 
                                                        class="img-fluid"
                                                    >
                                                </label>
                                            </div>
                                        @endforeach

                      </div>
                    </div>
                        <!-- Filter Option ------------------------------ -->




                        <div class="toggle-section">
                            <h4>Filters</h4>
                        </div>

                        
                        <div class=" my-4">
                            <div class="row">
                            <!-- Location Filter -->
                            <div class="col-md-12">
                                <div class=" p-3 mb-3">
                                <h5 class="card-title">Location</h5>
                                @foreach($countries as $country)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="location{{ $country->id }}" value="{{ $country->id }}">
                                        <label class="form-check-label" for="location{{ $country->id }}">{{ $country->name }}</label>
                                    </div>
                                @endforeach
                                </div>
                        
                                <!-- Course type Filter -->
                                <div class=" p-3">
                                <h5 class="card-title">Course Type</h5>
                                @foreach($courseTypes as $courseType)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="type{{ $courseType->id }}" value="{{ $courseType->id }}">
                                    <label class="form-check-label" for="type{{ $courseType->id }}">{{ $courseType->name }}</label>
                                </div>
                            @endforeach
                                </div>
                            </div>
                        
                            <!-- Study Level Filter -->
                            <div class="col-md-12 mt-2">
                                <div class=" p-3 mb-3">
                                <h5 class="card-title">Study Level</h5>

                                @foreach($studyLevels as $studyLevel)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="level{{ $studyLevel->id }}" value="{{ $studyLevel->id }}">
                                        <label class="form-check-label" for="level{{ $studyLevel->id }}">{{ $studyLevel->name }}</label>
                                    </div>
                                @endforeach
                                </div>
                                <!-- Start Date Filter -->
                            </div>
                            </div>
                        </div>
                        </div>

    <div class="col-md-8">


                    <!-- COURSES----------------------------------------- -->
    <h4 class="mb-4 mt-5">Available Courses</h4>
    <div class="course-card">
         @if($findCourses->isEmpty())
        <p>No courses available for this university.</p>
        @else
        @foreach($findCourses as $findCourse)
        <div class="row g-0 mb-4">
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title d-flex flex-column align-items-start">
                        <a href="{{ route('course-finder', ['university_id' => $university->id]) }}">
                            <img style="width: 150px; margin-bottom: 8px;" src="{{ @asset('images/' . $findCourse->university->image) }}" alt="{{ $university->image }}">
                        </a>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('course.single', $findCourse->slug ?? $findCourse->id) }}"  class="me-2">{{ $findCourse->name }}</a>
                            <i class="fa-solid fa-share-from-square"></i>
                        </div>
                    </h5>
                    <p class="card-text">{!! $findCourse->description !!}</p>

                        <small>
                            <i class="bi bi-clock"></i> {{ $findCourse->duration }} &nbsp;&nbsp;
                            <!-- <i class="bi bi-star-fill text-warning"></i> 4.8 (150 reviews) -->
                        </small>
                    </p>
                </div>
            </div>
            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center bg-light p-3">
                <div class="pricing">
                    <h5>{{ $findCourse->price }}</h5>
                    <!-- <small>per year (international)</small> -->
                </div>

                <style>
                    /* Apply Now Button */
.apply-now-btn {
    background-color: #00237D;
    color: white;
    font-weight: bold;
    text-align: center;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.apply-now-btn:hover {
    background-color: white;
    color: #00237D;
    border: 1px solid #00237D;
    box-shadow: 0px 4px 10px rgba(0, 35, 125, 0.5);
}

/* More Info Button */
.more-info-btn {
    background-color: white;
    color: #D0142C;
    border: 1px solid #D0142C;
    font-weight: bold;
    text-align: center;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.more-info-btn:hover {
    background-color: #D0142C;
    color: white;
    box-shadow: 0px 4px 10px rgba(208, 20, 44, 0.5);
}

                </style>
                <!-- Apply Now Button -->
                <!-- Apply Now Button -->
<a href="{{ route('apply.CourseForm', $findCourse->id) }}" 
   class=" apply-now-btn mt-3 w-75">
   Apply Now
</a>
<!-- More Info Button -->
<a href="{{ route('course.single', $findCourse->slug ?? $findCourse->id) }}" 
   class=" more-info-btn mt-2 w-75">
   More Info
</a>

            </div>
        </div>
        @endforeach
       @endif

     </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.form-check-input').on('change', function() {
            // Collect selected filter values
            let locations = [];
            let courseTypes = [];
            let studyLevels = [];
            let selectedUniversities = [];

            $('input[name="universities[]"]:checked').each(function() {
                selectedUniversities.push($(this).val());
            });
            console.log(selectedUniversities);
            // Location filters
            $('input[id^="location"]:checked').each(function() {
                locations.push($(this).val());
            });

            // Course type filters
            $('input[id^="type"]:checked').each(function() {
                courseTypes.push($(this).val());
            });

            // Study level filters
            $('input[id^="level"]:checked').each(function() {
                studyLevels.push($(this).val());
            });

            console.log(locations);

            // AJAX request
            // AJAX request
            $.ajax({
                url: "{{ route('filtered.courses') }}",
                method: "GET",
                data: {
                    location: locations,
                    course_type: courseTypes,
                    study_level: studyLevels,
                    selected_university: selectedUniversities
                },
                success: function(response) {
                    let coursesContainer = $('.course-card');
                    coursesContainer.empty(); // Clear the container before appending new data
                    console.log(response);

                    if (response.status === 'success' && response.data.length > 0) {
                    // Clear the existing content in the container
                    coursesContainer.empty();

                    // Loop through the returned courses and dynamically create the new design
                    response.data.forEach(function(course) {
                        let courseCard = `
                            <div class="row g-0 mb-4 course-card">
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex flex-column align-items-start">
                                            <a href="/course-finder?university_id=${course.university.id}">
                                                <img style="width: 150px; margin-bottom: 8px;" src="/images/${course.university.image}" alt="${course.university.name}">
                                            </a>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="me-2">${course.name}</a>
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </div>
                                        </h5>
                                        <p class="card-text">${course.description}</p>
                                        <small>
                                            <i class="bi bi-clock"></i> ${course.duration} &nbsp;&nbsp;
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex flex-column justify-content-center align-items-center bg-light p-3">
                                    <div class="pricing">
                                        <h5>$${course.price}</h5>
                                    </div>
                                    <!-- Apply Now Button -->
                                    <a href="/apply/course/${course.id}" class="apply-now-btn btn  mt-3 w-75" style="background-color: #00237D; color:white;">Apply now</a>
                                    <!-- More Info Button -->
                                    <a href="/course/${course.slug ?? course.id}" 
                                        class="mt-2 w-75 more-info-btn" 
                                        style="border: 1px solid #D0142C; background-color: white; color: #D0142C; padding: 10px 20px; text-align: center; font-weight: bold; border-radius: 5px; text-decoration: none; display: inline-block; transition: background-color 0.3s ease, color 0.3s ease;">More Info</a>
                                </div>
                            </div>
                        `;
                        coursesContainer.append(courseCard);
                    });
                    } 
                    else {
                        // If no courses are found, show a message
                        coursesContainer.append('<p>No courses found for the selected criteria.</p>');
                    }
                },
                error: function(xhr, status, error) {
                    // Log the error details (optional)
                    console.error('Error:', status, error);
                    alert('Failed to fetch courses. Please try again.');
                }
            });

        });
    });
</script>

<script>
    document.querySelectorAll('.accordion-button').forEach(button => {
        button.addEventListener('click', function () {
            const icon = this.querySelector('.toggle-icon');
            if (this.classList.contains('collapsed')) {
                icon.textContent = '+'; 
            } else {
                icon.textContent = '-'; 
            }
        });
    });
</script>
@endsection