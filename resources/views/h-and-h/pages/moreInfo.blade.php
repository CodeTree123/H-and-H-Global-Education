@extends('h-and-h.layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>


<style>
  .info-card-title {
    display: flex; /* Use flexbox for alignment */
    align-items: flex-start; /* Align items at the top */
    justify-content: center; /* Center the iconInfo horizontally */
  }

  .iconInfo-large {
    margin-bottom: 5px; /* Space between iconInfo and title */
    font-size: 15px; /* Adjust iconInfo size as needed */
    color: red; /* Set iconInfo color to red */
  }
</style>


<style>
      .table-wrapper {
        /* margin: 20px; */
      }
      .highlight {
        color: #e9814c;
      }
    </style>
    <style>

      .header-info {
        background-color: #d0142c;
        color: white;
        padding: 20px 0;
        text-align: center;
        margin-bottom: 20px;
      }
      .course-info,
      .key-facts {
        padding: 30px;
        margin-bottom: 20px;
        transition: transform 0.3s;
      }

      .key-facts {
        background-color: #00237d;
        color: white;
      }
      .btn-info {
        background-color: #d0142c;
        border: none;
        color: white; /* White text */
        font-size: 14px;
        transition: background-color 0.3s; /* Smooth background transition */
      }
      .btn-info:hover {
        background-color: #a01225; /* Darker shade on hover */
      }
      h2 {
        font-size: 22px;
      }
      h3 {
        font-size: 18px;
      }
      h4 {
        font-size: 16px;
      }
      p {
        font-size: 14px;
        line-height: 1.5;
      }
      .iconInfo {
        color: #d0142c;
        margin-right: 8px;
      }
      .important-box {
        background-color: #f8f9fa;
        border: 2px dashed #2a2f6e;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
      }

      .apply-btn-info {
        background-color: #3b3f87;
        color: #fff;
        border-radius: 50px;
        padding: 10px 25px;
        transition: background-color 0.3s ease;
      }

      .apply-btn-info:hover {
        background-color: #2a2f6e;
      }

      h2 {
        font-weight: 700;
      }

      .nav-link {
        color: #3b3f87;
        font-weight: bold;
        transition: color 0.3s;
      }

      .nav-link:hover,
      .nav-link.active {
        color: #2a2f6e;
      }

      /* Custom Tab Styles */
      .nav-link {
        color: #00237d; /* Base color (Blue) */
        font-weight: 600;
        font-size: 1.1rem;
        padding: 0.75rem 1.5rem;
        border-bottom: 2px solid transparent;
        transition: color 0.3s, border-color 0.3s;
      }

      .nav-link:hover {
        color: #d0142c; /* Hover color (Red) */
        border-bottom: 2px solid #d0142c;
      }

      .nav-link.active {
        color: #d0142c; /* Active color (Red) */
        border-bottom: 2px solid #d0142c;
        background-color: #f9f9f9;
      }
      .nav-item {
        margin: 0 10px;
      }

      /* Custom styles for Why Study section */
      .why-study {
        padding: 60px 0;
        background-color: #f8f9fa;
      }

      .why-study h3 {
        text-align: center;
        margin-bottom: 40px;
        font-weight: 600;
        color: #00237d;
      }

      .study-item {
        text-align: center;
        padding: 20px;
      }

      .study-item i {
        font-size: 40px;
        color: #d0142c;
        margin-bottom: 20px;
      }

      .study-item p {
        font-size: 1rem;
        color: #333;
        line-height: 1.6;
      }
    </style>
    
    <style>
      .intro-section {
        text-align: center;
        padding: 50px 0;
      }
      .intro-text {
        margin-bottom: 30px;
      }
      .more-info-section {
        padding: 50px 0;
        background-color: #f9f9f9;
      }
      .info-card {
        border: none;
        transition: transform 0.2s;
      }
      .info-card:hover {
        transform: scale(1.05);
      }
      .info-card-title {
        font-size: 16px;
        font-weight: bold;
        color: #6a1b9a;
      }
      .info-card-text {
        color: #6a1b9a;
      }
    </style>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 course-info text-start">
          <a href="">
            <img
              style="width: 100px"
              src="{{asset('images/' .@$course->university->image)}}"
              alt="Course Logo"
              class="mb-3"
          /></a>
          <h1>{{$course->name}}</h1>
          <div>
          {!!$course->description!!}  
          </div>
          <a href="{{route('apply.CourseForm',$course->id)}}"  class="btn-info btn mt-4">
              <i class="fas fa-paper-plane"></i> Apply Now
         </a >
          <!-- <button class="btn-info"><i class="fas fa-paper-plane"></i> Apply</button> -->
        </div>
        <div
          class="col-md-6 key-facts text-start mb-5"
          style="border-radius: 15px"
        >
          <div class="p-3">
            <h3 class="">Key Facts</h3>
            <h4 class="mt-5">
              <i class="fas fa-graduation-cap iconInfo"></i> Degree: BS Kinesiology
            </h4>
            <h4 class="mt-5">
              <i class="fas fa-clock iconInfo"></i> Duration: {{$course->duration}}
            </h4>
            <h4 class="mt-5">
            <i class="fas fa-arrow-right iconInfo"></i> Pathways Available: {{ $course->pathway_available }}
            </h4>
            <h4 class="mt-5">
              <i class="fas fa-calendar-alt iconInfo"></i> Start Dates: August |
              January | May
            </h4>
            <a  href="{{ route('freecounselling.form') }}"  class=" btn btn-info btn-info-light mt-3 w-50">
              Book A Counselling Session Now
         </a>
          </div>
        </div>
      </div>
    </div>
    <br />
    <br />
    <br />

    <!-- Navigation Tabs -->
    <div class="container">
      <ul
        class="nav justify-content-center border-bottom mb-5"
        style="border: none"
      >
        <li class="nav-item">
          <a class="nav-link active" href="#overview">Overview</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#why-study">Why Study</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#your-pathway">Tuition Fees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#discover-university"
            >Scholarship</a
          >
        </li>
      </ul>
    </div>

    <!-- Main Section -->
    <div class="container" id="overview">
      <h1 class="mb-4 text-center">Degree Overview</h1>
      <div class="row">
        <div class="col-md-12">
          <div class="custom-border">
       
            {!!$course->overview!!}
          

          </div>
        </div>

      </div>
    </div>


    <div class="container why-study" id="why-study">
    <h1 class="text-center mb-5">Why Study This Course?</h1>
    @if(!empty($course->moreInfo) && is_iterable($course->moreInfo))
        <div class="row">
            @foreach($course->moreInfo as $more)
                <div class="col-md-4 study-item mb-4">
                    <div class="">
                        <img 
                            src="{{ asset($more->icon) }}" 
                            alt="Course Icon" 
                            class="img-fluid card-img-top"
                            style="width: 100px; height: 100px; object-fit: cover; margin: 20px auto;"
                        >
                        <div class="card-body text-center">
                            <p class="card-text">{!! $more->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-muted">No additional information available.</p>
    @endif
</div>
  <div class="container " id="discover-university">
    <div class="" style="margin-top:50px">
      <h1 class="text-center">Key Dates and Fees</h1>
      <div >

      <div class="table-container">
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
    </style>
    {!! $course->tution_fees !!}
</div>

        <div class="mt-4">
          <h4>Apply now</h4>
          <p>
            Applying is easy. Complete the
            <a href="#" class="text-decoration-none">online application form</a>
            and follow the instructions. If you have any queries please
            <a href="#" class="text-decoration-none">contact us</a>.
          </p>
        </div>
      </div>
    </div>

</div>

@endsection