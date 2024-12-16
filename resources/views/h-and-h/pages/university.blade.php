@extends('h-and-h.layouts.app')
@section('content')

<style>
.logo-image {
    max-width: 100%;  /* Ensures image scales down on smaller screens */
    height: auto;
    border-radius: 10px;  /* Optional: Adds rounded corners to the image */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);  /* Optional: Adds a subtle shadow around the image */
}
    /* Banner Style */
    .banner {
        background-image: url('{{ asset('banners/' . $university->university_banner) }}');
        background-size: cover;
        background-position: center;
        height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        position: relative;
        border-bottom: 10px solid #D0142C; /* Red border for visual separation */
    }

    .banner h1 {
        font-size: 3rem;
        font-weight: bold;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    /* Info Section */
    .info-section {
        position: absolute;
        bottom: 20px;
        right: 20px;
        background-color: rgba(0, 0, 0, 0.7);
        padding: 20px;
        border-radius: 8px;
        color: white;
        text-align: left;
        max-width: 400px;
    }

    .info-section .btn {
        margin-top: 20px;
        background-color: #D0142C;
        color: white;
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    .info-section .btn:hover {
        background-color: #9e102c;
    }

    /* Tabs Styles */
    .nav-tabs {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .nav-tabs {
    --bs-nav-tabs-border-width: 0; /* Set the border width to 0 to hide it */
    border: none; /* Ensure there's no visible border around the nav-tabs */
}

    .nav-tabs .nav-link {
        color: #000; /* Default text color */
        border: 1px solid #E9814C; /* Border for each tab */
        border-radius: 25px 25px 0 0; /* Rounded corners for tabs */
        margin: 0 5px; /* Space between tabs */
        padding: 10px 20px; /* Padding for better appearance */
        font-weight: bold;
    }

    .nav-tabs .nav-link.active {
        background-color: #E9814C; /* Active tab background */
        color: #fff; /* Active tab text color */
        border-bottom: 2px solid white; /* Align with tab content */
    }

    /* Tab Content Styles */
 

    /* Section Titles */
    .section h3 {
        font-size: 2rem;
        font-weight: bold;
        color: #D0142C;
        margin-bottom: 15px;
    }

    /* Responsiveness for Mobile Devices */
    @media (max-width: 768px) {
        .banner h1 {
            font-size: 2rem; /* Smaller title for mobile */
        }

        .info-section {
            bottom: 10px;
            right: 10px;
            max-width: 90%;
            font-size: 0.9rem;
        }

        .nav-tabs {
            flex-direction: column; /* Stack tabs for mobile */
        }

        .nav-tabs .nav-link {
            margin-bottom: 5px; /* Space between stacked tabs */
        }
    }
</style>


<style>
        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container table th {
            background-color: #f2f2f2; /* Header er color */
            padding: 10px;
            border: 1px solid #ddd;
        }

        .table-container table td {
            background-color: #fafafa; /* Row er background color */
            padding: 10px;
            border: 1px solid #ddd;
        }

        .table-container table tr:nth-child(even) td {
            background-color: #e9f5ff; /* Alternate row er color */
        }
        /* Banner Style */
.banner {
    background-image: url('{{ asset('banners/' . $university->university_banner) }}');
    background-size: cover;
    background-position: center;
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    position: relative;
    border-bottom: 10px solid #D0142C; /* Red border for visual separation */
}

.banner h1 {
    font-size: 3rem;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
}

/* Info Section */
.info-section {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 8px;
    color: white;
    text-align: left;
    max-width: 400px;
}

.info-section .btn {
    margin-top: 20px;
    background-color: #D0142C;
    color: white;
    border-radius: 25px;
    padding: 10px 20px;
    font-weight: bold;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s ease;
}

.info-section .btn:hover {
    background-color: #9e102c;
}

/* Responsive Banner Adjustments */
@media (max-width: 1024px) {
    .banner {
        height: 500px; /* Slightly smaller banner on tablets and below */
    }

    .banner h1 {
        font-size: 2.5rem; /* Slightly smaller title for tablets */
    }

    .info-section {
        max-width: 90%; /* Max width adjusted for smaller screens */
        bottom: 15px;
        right: 15px;
    }
}

@media (max-width: 768px) {
    .banner {
        height: 400px; /* Smaller banner on mobile devices */
    }

    .banner h1 {
        font-size: 2rem; /* Smaller title for mobile */
    }

    .info-section {
        max-width: 90%; /* Info section takes up more width */
        bottom: 10px;
        right: 10px;
        font-size: 0.9rem; /* Adjust text size */
    }

    /* Make the image inside the info section responsive */
    .logo-image {
        max-width: 60%; /* Ensure the logo fits well on mobile */
        height: auto;
    }
}
    </style>

<div class="banner">
    <h1>Welcome to {{ $university->name }}</h1>
    <div class="info-section">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('images/' . $university->image) }}" alt="{{ $university->name }} Image" class="img-fluid logo-image">
            </div>
            <div class="col-md-9">
                <h3>{{ $university->name }}</h3>
                <p><strong>Location:</strong> {{ $university->location }}</p>
                <p><strong>Country:</strong> {{ $university->country->name }}</p>
            </div>
        </div>
        <!-- <a href="#learnMore" class="btn btn-primary mt-4">Learn More</a> -->
    </div>
</div>


<div class="container mt-5">
    <!-- Smart Tab System -->
    <ul class="nav nav-tabs mb-3" id="universityTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" href="#overview" role="tab">Overview</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="#entryRequirements" role="tab">Entry Requirements</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="#englishRequirements" role="tab">English Language Requirements</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="#tuitionFees" role="tab">Tuition Fees</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" href="#scholarships" role="tab">Scholarships</a>
        </li>
    </ul>

    <!-- Content Sections -->
    <div class="tab-content">
        <div class="section mt-5" id="overview">
            <h3>Overview</h3>
             <div class="table">
    {!! $university->overview !!}

  </div>        </div>

        <div class="section mt-5" id="entryRequirements">
            <h3>Entry Requirements</h3>
<div class="table-container">
{!! $university->entry_requirements!!}

</div>
        </div>

        <div class="section mt-5" id="englishRequirements">
            <h3>English Language Requirements</h3>
            <div class="table-container">
            {!! $university->english_language!!}
        </div>

        </div>

        <div class="section mt-5" id="tuitionFees">
            <h3>Tuition Fees</h3>

            <div class="table-container">
            {!! $university->tuition_fees!!}  
            </div>
            
         </div>

        <div class="section mt-5" id="scholarships">
            <h3>Scholarships</h3>

            <div class="table-container">
            {!! $university->scholarships!!} 

            </div>

        </div>
    </div>
</div>


<script>
    // Smooth scrolling to sections
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            targetElement.scrollIntoView({ behavior: 'smooth' });
            // Activate the clicked tab
            document.querySelectorAll('.nav-link').forEach(tab => tab.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>

@endsection
