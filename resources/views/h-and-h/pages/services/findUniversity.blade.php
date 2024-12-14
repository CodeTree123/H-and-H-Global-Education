<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('h-and-h.layouts.app')
@section('content')
<br>
<br>
    <style>
        .admission-services {
            background: #f8f9fa;
        }

        .admission-services .accordion-button {
            background-color: #004080;
            color: #fff;
            margin-top:15px;
        }

        .admission-services .accordion-button:not(.collapsed) {
            background-color: #0066cc;
            color: #fff;
        }

        .admission-services .accordion-body {
            background-color: #e9ecef;
            color:black;
        }

        .cardreplase {
            border: none;
            border-radius: 8px;
            background-color: #fff;
            padding:20px;
        }

        .cardreplase-body input,
        .cardreplase-body select {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
        }
     </style>

                             <section class="admission-services py-5">
                                <div>
                                    <div 
                                    class="text-center d-flex align-items-center justify-content-center mb-5" 
                                    style="
                                        background-image: url('https://c1.wallpaperflare.com/path/429/924/980/person-student-college-graduation-81aa2192edb87331b8f44563733d316b.jpg'); 
                                        background-size: cover; 
                                        background-position: center; 
                                        height: 300px; 
                                        color: white; 
                                        text-align: center;">
                                    <div>
                                        <h1 class="fw-bold">Student Admission Services</h1>
                                        <!-- <p class="text-muted">Banner Text</p> -->
                                    </div>
                                </div>



                                <div class="container">
                                <div class="row g-4 ">
                                        <!-- Left Side: Accordion -->
                                        <div class="col-md-8">
                                        <div class="accordion custom-accordion" id="servicesAccordion">
                                        @foreach($universityAddmissions as $key => $admission)
                                            <h2 class="accordion-header" id="heading{{ $key }}">
                                                <button 
                                                    class="accordion-button {{ $key == 0 ? '' : 'collapsed' }}" 
                                                    type="button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#collapse{{ $key }}" 
                                                    aria-expanded="{{ $key == 0 ? 'true' : 'false' }}">
                                                    <h5>{{ $admission['accordingTitle'] }}</h5>
                                                </button>
                                            </h2>
                                            <div 
                                                id="collapse{{ $key }}" 
                                                class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" 
                                                data-bs-parent="#servicesAccordion">
                                                <div class="accordion-body">
                                                    <p>{{ $admission['accordingcontent'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                        </div>
                                    <!-- Right Side: Form -->
                                    <div class="col-md-4">
                                    <div class="cardreplase shadow">
                                    <div class="cardreplase-body">
                                        <h5 class="cardreplase-title fw-bold text-center mb-3">Interested to Study in the UK?</h5>
                                        <form>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="First Name" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Last Name" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="email" class="form-control" placeholder="Email" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="tel" class="form-control" placeholder="Phone Number" required>
                                            </div>
                                            <div class="mb-3">
                                                <select class="form-select" required>
                                                    <option selected>Select Current Country</option>
                                                    <option value="1">Bangladesh</option>
                                                    <option value="2">India</option>
                                                    <!-- Add more countries dynamically or statically -->
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Type your desired course name">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" placeholder="Type your previous qualification">
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                                        </form>
                                        </div>
                                      </div>
                                     </div>
                                    </div>
                                </div>
                            </div>
                        </section>
@endsection
