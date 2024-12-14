
@extends('h-and-h.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<style>
       .form-container {
           background-color: #ffffff;
           width: 100%;
           max-width: 600px;
           padding: 30px;
           border-radius: 8px;
           box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
           margin: 50px auto;
       }
       h1 {
           text-align: center;
           font-size: 24px;
           margin-bottom: 30px;
           color: #202124;
       }
       .form-label {
           font-weight: bold;
           color: #202124;
           margin-bottom: 10px;
       }
       .form-control {
           border-radius: 8px;
           padding: 10px;
           font-size: 16px;
           margin-bottom: 20px;
           box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
       }
       .btn-primary {
           background-color: #4285f4;
           border-color: #4285f4;
           font-weight: bold;
           width: 100%;
           padding: 12px;
           border-radius: 8px;
       }
       .btn-primary:hover {
           background-color: #357ae8;
       }
       .invalid-feedback {
           font-size: 12px;
       }

       .form-container {
        background-color: #ffffff;
        width: 100%;
        max-width: 600px;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
    }
    h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 30px;
        color: #202124;
    }
    .form-label {
        font-weight: bold;
        color: #202124;
        margin-bottom: 10px;
    }
    .form-control {
        border-radius: 8px;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 20px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
        background-color: #4285f4;
        border-color: #4285f4;
        font-weight: bold;
        width: 100%;
        padding: 12px;
        border-radius: 8px;
    }
    .btn-primary:hover {
        background-color: #357ae8;
    }
    .modal-content {
        border-radius: 8px;
    }
    .modal-header {
        background-color: #4285f4;
        color: #fff;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }
    .table {
        width: 100%;
    }







    .form-container {
        background-color: #ffffff;
        width: 100%;
        max-width: 600px;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin: 50px auto;
    }
    h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 30px;
        color: #202124;
    }
    .form-label {
        font-weight: bold;
        color: #202124;
        margin-bottom: 10px;
    }
    .form-control {
        border-radius: 8px;
        padding: 10px;
        font-size: 16px;
        margin-bottom: 20px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    .btn-primary {
        background-color: #4285f4;
        border-color: #4285f4;
        font-weight: bold;
        width: 100%;
        padding: 12px;
        border-radius: 8px;
    }
    .btn-primary:hover {
        background-color: #357ae8;
    }
    .modal-content {
        border-radius: 8px;
    }
    .modal-header {
        background-color: #4285f4;
        color: #fff;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }
    .table {
        width: 100%;
    }
   </style>
@include('partials.notify')
<div class="form-container">
    <h1>Book a Free Counseling Session</h1>
    <form id="counselingForm" method="POST" action="{{ route('freecounselling.store') }}" novalidate>
        @csrf <!-- CSRF protection -->
        <!-- Full Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- Contact Number -->
        <div class="mb-3">
            <label for="contact" class="form-label">Contact Number</label>
            <input type="tel" class="form-control" id="contact" name="contact" required>
        </div>

        <!-- Education Level -->
        <div class="mb-3">
            <label for="education" class="form-label">Education Level</label>
            <input type="text" class="form-control" id="education" name="education" required>
        </div>

        <!-- Grade -->
        <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="text" class="form-control" id="grade" name="grade" required>
        </div>

        <!-- Institute Name -->
        <div class="mb-3">
            <label for="institute_name" class="form-label">Institute Name</label>
            <input type="text" class="form-control" id="institute_name" name="institute_name" required>
        </div>

        <!-- Graduation Year -->
        <div class="mb-3">
            <label for="graduation_year" class="form-label">Graduation Year</label>
            <input type="number" class="form-control" id="graduation_year" name="graduation_year" required>
        </div>

        <!-- Preferred Language -->
        <div class="mb-3">
            <label for="language" class="form-label">Preferred Language for Counseling</label>
            <input type="text" class="form-control" id="language" name="language" required>
        </div>


        

    <!-- Preferred Counseling Destination -->
<div class="mb-3">
    <label for="destination" class="form-label">Preferred Counseling Destination</label>
    <select class="form-control" id="destination" name="destination" required>
        <option value="" disabled selected>Select your destination</option>
        @foreach ($countries as $country)
            <option value="{{ $country->name }}">{{ $country->name }}</option>
        @endforeach
    </select>
</div>

        <!-- Current Location -->
        <div class="mb-3">
            <label for="current_location" class="form-label">Current Location</label>
            <input type="text" class="form-control" id="current_location" name="current_location" required>
        </div>

        <!-- Submit Button -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reviewModal">Review & Submit</button>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reviewModalLabel">Review Your Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr><th>Full Name</th><td id="reviewName"></td></tr>
                        <tr><th>Email</th><td id="reviewEmail"></td></tr>
                        <tr><th>Contact</th><td id="reviewContact"></td></tr>
                        <tr><th>Education Level</th><td id="reviewEducation"></td></tr>
                        <tr><th>Grade</th><td id="reviewGrade"></td></tr>
                        <tr><th>Institute</th><td id="reviewInstitute"></td></tr>
                        <tr><th>Graduation Year</th><td id="reviewYear"></td></tr>
                        <tr><th>Language</th><td id="reviewLanguage"></td></tr>
                        <tr><th>Destination</th><td id="reviewDestination"></td></tr>
                        <tr><th>Current Location</th><td id="reviewLocation"></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="counselingForm">Confirm & Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector('[data-bs-toggle="modal"]').addEventListener('click', function () {
        // Populate modal fields with input values
        document.getElementById('reviewName').innerText = document.getElementById('name').value;
        document.getElementById('reviewEmail').innerText = document.getElementById('email').value;
        document.getElementById('reviewContact').innerText = document.getElementById('contact').value;
        document.getElementById('reviewEducation').innerText = document.getElementById('education').value;
        document.getElementById('reviewGrade').innerText = document.getElementById('grade').value;
        document.getElementById('reviewInstitute').innerText = document.getElementById('institute_name').value;
        document.getElementById('reviewYear').innerText = document.getElementById('graduation_year').value;
        document.getElementById('reviewLanguage').innerText = document.getElementById('language').value;
        document.getElementById('reviewDestination').innerText = document.getElementById('destination').value;
        document.getElementById('reviewLocation').innerText = document.getElementById('current_location').value;
    });
</script>

   <!-- Bootstrap JS & Validation Script -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <script>
       // Bootstrap form validation
       (function () {
           'use strict'
           var forms = document.querySelectorAll('.needs-validation')

           Array.prototype.slice.call(forms)
               .forEach(function (form) {
                   form.addEventListener('submit', function (event) {
                       if (!form.checkValidity()) {
                           event.preventDefault()
                           event.stopPropagation()
                       }
                       form.classList.add('was-validated')
                   }, false)
               })
       })()
   </script>
@endsection