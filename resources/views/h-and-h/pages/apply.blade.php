@extends('h-and-h.layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <!-- Include CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">

    <!-- Include JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            color: #212529;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin: auto;
        }

        .hidden {
            display: none;
        }

        .required::after {
            content: "*";
            color: red;
            margin-left: 4px;
        }

        .list-group-item {
            font-weight: bold;
        }

        .form-control {
            background-color: #f7f4f3;
        }

        .form-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
        }

        #previewList li:first-child {
            display: none;
        }
    </style>
    @include('partials.notify')
    <div class="container py-5">
        <div class="form-container">
            <!-- Form 1: Student Form -->
            <div id="form1">
                <h2 class="text-center mb-4">Student Form</h2>
                <form id="studentForm" method="POST" action="{{ route('apply.store') }}">
                    @csrf
                    <input type="text" class="d-none" name="course_id" id="course_id">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label required">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name"
                                placeholder="Enter your first name">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label required">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name"
                                placeholder="Enter your last name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="dob" class="form-label required">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="date_of_birth">
                        </div>
                        <div class="col-md-6">
                            <label for="gender" class="form-label required">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option selected disabled>Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label required">Student Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label required">Telephone</label>
                            <input type="phone" class="form-control" id="phone" name="phone"
                                placeholder="Enter your phone number">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="country" class="form-label required">Country</label>
                            <select class="form-control" id="country" name="country">
                                <option value="" selected disabled>Select your country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Institution -->
                        <div class="col-md-6">
                            <label for="university" class="form-label required">University</label>
                            <select class="form-control" id="university" name="university" disabled>
                                <option value="" selected disabled>Select a university</option>
                            </select>
                        </div>
                    </div>

                    <!-- Mode of Study -->
                    <div class="row mb-3">
                        <!-- Course Name -->
                        <label for="course" class="form-label required">Course</label>
                        <select class="form-control" id="course" name="course" disabled>
                            <option value="" selected disabled>Select a course</option>
                        </select>
                        <div class="col-md-6 mt-3">
                            <label for="Mode_of_study" class="form-label required">Mode of study</label>
                            <input type="text" class="form-control" id="Mode_of_study" name="mode_of_study"
                                value="Enter Mode of study" placeholder="Enter Mode of study">
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label required">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="english_proficiency" class="form-label required">English Proficiency Check *</label>
                        <select class="form-control" id="english_proficiency" name="english_proficiency" required>
                            <option value="" disabled selected>Select your proficiency level</option>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                            <option value="fluent">Fluent</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Visa_Refusa" class="form-label required">Any Visa Refusal</label>
                        <select class="form-control" id="Visa_Refusa" name="visa_refusal" required>
                            <option value="" disabled selected>Select your Visa Refusal status</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <button type="button" id="nextBtn1" class="btn btn-primary w-100">Review And Submit</button>
                    </div>
                </form>
            </div>

            <!-- Form 3: Review/Confirmation -->
            <div id="form3" class="hidden">
                <h2 class="text-center mb-4">Review and Submit</h2>
                <ul id="previewList" class="list-group mb-4"></ul>
                <div class="text-end">
                    <button type="button" id="prevBtn2" class="btn btn-secondary me-2">Previous</button>
                    <button type="button" onclick="document.getElementById('studentForm').submit()" id="submitBtn"
                        class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        const form1 = document.getElementById("form1");
        const form3 = document.getElementById("form3");
        const nextBtn1 = document.getElementById("nextBtn1");
        const prevBtn2 = document.getElementById("prevBtn2");
        const submitBtn = document.getElementById("submitBtn");
        const studentForm = document.getElementById("studentForm");
        const previewList = document.getElementById("previewList");
        const validateForm = (form) => {
            let isValid = true;
            const inputs = form.querySelectorAll("input, select, textarea");
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add("is-invalid");
                    isValid = false;
                } else {
                    input.classList.remove("is-invalid");
                }
            });
            return isValid;
        };

        const collectData = () => {
            previewList.innerHTML = ""; // Clear previous data
            const inputs = form1.querySelectorAll("input, select, textarea");

            inputs.forEach(input => {
                const inputValue = input.value.trim();
                const label = input.previousElementSibling ? input.previousElementSibling.textContent.trim() :
                    "Unknown Field";

                // Only show fields with values
                if (inputValue || (input.tagName === 'SELECT' && input.selectedIndex > 0)) {
                    const item = document.createElement("li");
                    let displayLabel = label;

                    // Handle select fields differently (like country, university, course)
                    if (input.tagName === "SELECT") {
                        const selectedOption = input.options[input.selectedIndex];
                        if (selectedOption) {
                            displayLabel = `${label}: ${selectedOption.textContent.trim()}`;
                        }
                    } else {
                        displayLabel = `${label}: ${inputValue || "No Value"}`; // Default if no value is found
                    }

                    item.className = "list-group-item";
                    item.textContent = displayLabel;
                    previewList.appendChild(item);
                }
            });
        };




        nextBtn1.addEventListener("click", () => {
            if (validateForm(studentForm)) {
                form1.classList.add("hidden");
                form3.classList.remove("hidden");
                collectData();
            }
        });

        prevBtn2.addEventListener("click", () => {
            form3.classList.add("hidden");
            form1.classList.remove("hidden");
        });

        // submitBtn.addEventListener("click", () => {
        //     alert("Form submitted successfully!");
        // });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const countrySelect = document.getElementById("country");
            const universitySelect = document.getElementById("university");
            const courseSelect = document.getElementById("course");

            // Fetch Universities based on Country
            countrySelect.addEventListener("change", function() {
                const countryId = this.value;

                if (countryId) {
                    fetch('{{ route('get.universities') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                country_id: countryId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            universitySelect.innerHTML =
                                '<option value="" disabled selected>Select a university</option>';
                            data.forEach(university => {
                                universitySelect.innerHTML +=
                                    `<option value="${university.id}">${university.name}</option>`;
                            });
                            universitySelect.disabled = false;
                            courseSelect.innerHTML =
                                '<option value="" disabled selected>Select a course</option>';
                            courseSelect.disabled = true;
                        });
                }
            });

            // Fetch Courses based on University
            universitySelect.addEventListener("change", function() {
                const universityId = this.value;

                if (universityId) {
                    fetch('{{ route('get.courses') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                university_id: universityId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            courseSelect.innerHTML =
                                '<option value="" disabled selected>Select a course</option>';
                            data.forEach(course => {
                                courseSelect.innerHTML +=
                                    `<option value="${course.id}">${course.name}</option>`;
                            });
                            courseSelect.disabled = false;

                            // Add event listener to update hidden input field
                            courseSelect.addEventListener('change', function() {
                                // Get selected course ID
                                const selectedCourseId = courseSelect.value;
                                // Set the value of the hidden input field
                                document.getElementById('course_id').value = selectedCourseId;
                            });
                        });
                }
            });
        });
    </script>
@endsection
