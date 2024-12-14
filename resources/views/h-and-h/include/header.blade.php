
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="border-bottom: 0.5px ridge #00237D;">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left side: Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('landing') }}">
            <img src="{{asset('h-and-h/img/handHlogo.png')}}" style="height: auto; width: 220px;" alt="Logo" class="d-inline-block align-text-top logo-responsive">
        </a>

        <!-- Toggle button for mobile devices -->
        <a  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img style="width: 40px; height: 40px;"  src="{{asset('h-and-h/img/toggle.svg')}}" alt="">
</a>
        <!-- Middle side: Navigation links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav" style="font-size: 15px;">
                <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}">HOME</a></li>
                <!-- Dropdown for COURSE FINDER -->
                <li class="nav-item"><a class="nav-link" href="{{ route('course-finder') }}">COURSE FINDER</a></li>
                
                
                
                <!-- Dropdown for STUDY OPTIONS -->
                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="studyOptionsDropdown" role="button" data-bs-toggle="dropdown">DESTINATIONS</a>
    <ul class="dropdown-menu" aria-labelledby="studyOptionsDropdown">
       
    
       @php 
        use App\Models\Country;
        $countries = Country::all();
        @endphp
        @foreach($countries as $country)
            <li>
                <a class="dropdown-item" href="{{ route('countryDestination', $country->id) }}">
                    {{ $country->name }}
                </a>
            </li>
        @endforeach
        <li><a class="dropdown-item"href="{{ route('university-finder') }}">Find University</a></li>
        <!-- <li><a class="dropdown-item" href="findScholership.html">Scholarships</a></li> -->
    </ul>
    </li>

    
                <!-- Dropdown for SERVICES -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">SERVICES</a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ route('serviceAdmission') }}">University Admission</a></li>
                        <li><a class="dropdown-item" href="{{ route('studentCounselling') }}">Student's Counseling</a></li>
                        <li><a class="dropdown-item" href="{{ route('vishaApplications') }}">Visa Application</a></li>
                         <li><a class="dropdown-item" href="{{ route('AccommodationfrontendRoute') }}">Finding Accommodation</a></li>
                        <li><a class="dropdown-item" href="{{ route('airport.Pickup') }}">Airport Pickup</a></li> 
                    </ul>
                </li>

                <!-- Dropdown for GLOBAL BRANCH -->
                @php
                    use App\Models\Branch;
                    $branches = Branch::all();
                @endphp
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="globalBranchDropdown" role="button" data-bs-toggle="dropdown">GLOBAL BRANCHES</a>
                    <ul class="dropdown-menu" aria-labelledby="globalBranchDropdown">
                        @foreach ($branches as $branch)
                            <li>
                                <a class="dropdown-item" href="{{ route('branches.show', $branch->id) }}">
                                    {{ $branch->branch_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <!-- Dropdown for NEWS & EVENTS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown">ABOUT</a>
                    <ul class="dropdown-menu" aria-labelledby="newsEventsDropdown">
                        <li><a class="dropdown-item"  href="{{ route('why.us') }}">Why Us</a></li>
                        <li><a class="dropdown-item" href="{{ route('greetings.ceo') }}">Greetings from CEO</a></li>
                        <li><a class="dropdown-item" href="{{ route('our.team') }}">Our Team</a></li>
                        <li><a class="dropdown-item" href="{{ route('news.blog') }}">News (Blogs)</a></li>
                        <li><a class="dropdown-item"href="{{ route('event') }}">Events</a></li>
                    </ul>
                </li>
                <!-- ---------------------------------------------------- -->
                <div class="d-flex align-items-center">
                    <a href="{{ route('apply.show') }}" class="btn d-block d-sm-none study-button" style="background-color: #D0142C; color: white; border-radius: 50px;">Apply Now</a>
                </div>
            </ul>
            <div class="d-none d-lg-flex align-items-center mx-4">
                <a href="{{ route('apply.show') }}"  class="btn study-button" style="background-color: #D0142C; color: white; border-radius: 50px;">    <i class="fas fa-paper-plane"></i> Apply Now</a>
            </div>
        </div>
    </div>
</nav>