@extends('h-and-h.layouts.app')
@section('content')


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="style.css">
    <style>

        .header {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px 0;
        }
        .banner {
            background-image: url('https://c1.wallpaperflare.com/path/575/304/979/graduation-graduation-cap-achievement-school-46a83e3799fe85a2bd12f8830477837e.jpg'); /* Replace with your banner image path */
            background-size: cover;
    background-position: center;
    height: 500px; /* Adjust this value to make the banner taller */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white; /* Text color for better contrast */
    font-size: 36px; /* Adjust font size as needed */
    font-weight: bold;
    position: relative;
        }

        .banner div {
    background-color: rgba(0, 0, 0, 0.5); /* Optional: Adds a dark overlay to make the text stand out */
    padding: 20px;
    border-radius: 8px; /* Optional: Rounds the corners of the text box */
    font-family: 'Arial', sans-serif; /* Adjust font family if needed */
}
        .university-listing {
            margin: 20px 0;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 20px;
        }
        .news-slider {
            margin: 40px 0;
        }
        .contact-form {
            margin-top: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 8px;
        }
        h2, h3 {
            font-weight: 700;
        }
        .carousel-item {
            height: 300px; /* Fixed height for news slider */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #000;
            background-color: #fff; /* White background for news items */
            border-radius: 8px;
        }
        .carousel img {
            max-height: 200px; /* Adjust image height */
            object-fit: cover; /* Maintain aspect ratio */
            border-radius: 8px;
        }
        .hover-effect:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
        }
        .card {
            transition: box-shadow 0.3s;
        }
        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        /* Button styles */
        .btn-primary {
            background-color: #D0142C;
            border-color: #D0142C;
        }
        .btn-secondary {
            background-color: #00237D;
            border-color: #00237D;
        }
        .btn-primary:hover, .btn-secondary:hover {
            filter: brightness(90%);
        }

        /* Carousel custom styles */
        .carousel-inner {
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping */
        }
        .carousel-item {
            flex: 1; /* Equal flex-grow for items */
            min-width: 50%; /* Two items visible */
        }

        .slider-item {
    text-align: center;
    color: #000;
    background-color: #fff;
    border-radius: 8px;
    padding: 10px;
    margin: 10px; /* Add spacing between items */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}
.slider-item:hover {
    transform: scale(1.05);
}
.slider img {
    border-radius: 8px;
}

    </style>


<div class="banner">
    <div>Explore the Best Universities in the {{ $country->name }}</div>
</div>

    <div class="container my-5">

        {!! $country->description !!}
<br>
<br>
<br>

<h3 class="mb-5">Universities We Partner With</h3>
<div class="container my-5">
    <div class="row gy-4">
        @foreach($country->universities as $index => $university)
            <div class="col-12 d-flex flex-column flex-md-row align-items-center mb-4 {{ $index % 2 == 0 ? 'flex-md-row' : 'flex-md-row-reverse' }}" style="padding-top: 20px; padding-bottom: 20px;">
                <!-- Image Section -->
                <div class="image-container rounded mb-3 mb-md-0" style="flex: 1; overflow: hidden;">
                    <img src="{{ asset('banners/' . $university->university_banner) }}" 
                         alt="{{ $university->name }}"
                         class="w-100"
                         style="object-fit: contain; max-height: 100vh;">
                </div>
                
                <!-- Info Section -->
                <div class="info-container px-4" style="flex: 1; padding-left: 20px;">
                    <h4 class="fw-bold text-dark mb-2">{{ $university->name }}</h4>
                    <p class="text-muted mb-3">
                       Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, quisquam voluptates. Odio porro nulla totam, suscipit exercitationem sit adipisci quibusdam omnis quis praesentium assumenda eaque unde dolores! Reprehenderit, odio non nisi rem eaque modi dolorum est, voluptas praesentium debitis odit. Vel unde adipisci quasi, atque eius ipsa iure nemo blanditiis? Lorem, ipsum dolor sit amet consectetur aipisicing elit. Fuga esse natus repellendus dolorem itaque magni officiis porro rem, numquam error.
                    </p>
                    <a href="{{ route('university.show', $university->id) }}" class="more-info-button">
                        More Info
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
 


   <style>
    /* Image Styling */
    .image-container {
        height: 250px; /* Fixed image height */
        overflow: hidden; /* Prevents showing extra part of the image */
    }

    .image-container img {
        object-fit: cover; /* Ensures images are cropped properly */
        transition: transform 0.3s ease;
    }

    /* Info Section */
    .info-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 20px;
    }

    .info-container h4 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #333;
    }

    .info-container p {
        font-size: 1rem;
        color: #777;
    }

    /* More Info Button Styling */
    .more-info-button {
        font-size: 1.2rem;
        padding: 12px 24px;
        border: 0.5px solid #d9534f; /* Red border */
        color: #d9534f; /* Red text */
        background-color: transparent;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-weight: 600;
        border-radius: 5px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .more-info-button:hover {
        background-color: #d9534f; /* Red background on hover */
        color: white; /* White text on hover */
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .col-12 {
            flex-direction: column; /* Stack image and info vertically on mobile */
        }

        .image-container {
            margin-bottom: 15px;
        }

        .info-container {
            padding-left: 15px;
            padding-right: 15px;
        }
    }

    /* Alternate Layout (Left/Right based on index) */
    .flex-md-row {
        flex-direction: row; /* Image on the left, text on the right */
    }

    .flex-md-row-reverse {
        flex-direction: row-reverse; /* Image on the right, text on the left */
    }
</style>



        
        
        

    <div class="news-slider">
            <h3>Latest News About Studying in the UK</h3>
            <div class="slider">
                <div class="slider-item">
                    <img src="https://assets.studies-overseas.com/uk_latest_visa_701a91c98b.png" class="d-block w-100" alt="News Article 1">
                    <h5>New Scholarship Opportunities for International Students</h5>
                    <p>Discover various scholarship programs available for students wishing to study in the UK.</p>
                </div>
                <div class="slider-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnT_7yVsJHKDLMfWhwl4luq2ffYOMy0xRwRqe2h8TCx5etOO0eIF7eiGJm6o_EsefmpfQ&usqp=CAU" class="d-block w-100" alt="News Article 2">
                    <h5>Top Universities in the UK for International Students</h5>
                    <p>Explore the top universities in the UK that cater to international students.</p>
                </div>
                <div class="slider-item">
                    <img src="https://sourceessay.com/essay/wp-content/uploads/2020/07/UK-Higher-Education-Post-for-Sourceessay.jpg" class="d-block w-100" alt="News Article 3">
                    <h5>Student Life in the UK: What to Expect</h5>
                    <p>A guide to understanding student life and culture in the UK.</p>
                </div>
            </div>
        </div> 
        
        <style>
            .slider-item {
                text-align: center;
                color: #000;
                background-color: #fff; /* White background for news items */
                border-radius: 8px;
                padding: 10px;
                margin: 0 10px; /* Add horizontal margin for spacing */
            }
        </style>
        

        

 <div class="contact-form">
            <h3>Contact Us</h3>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div> 



    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                slidesToShow: 2,  // Show 2 items at a time
                slidesToScroll: 1, // Scroll one item at a time
                dots: true,        // Show dots for navigation
                arrows: true,      // Show previous/next arrows
                responsive: [
                    {
                        breakpoint: 768, // For tablets
                        settings: {
                            slidesToShow: 1 // Show 1 item on smaller screens
                        }
                    }
                ]
            });
        });


        $(document).ready(function(){
        $('.slider').slick({
            slidesToShow: 3,  // Show 3 items at a time
            slidesToScroll: 1, // Scroll one item at a time
            dots: true,        // Show dots for navigation
            arrows: true,      // Show previous/next arrows
            infinite: true,    // Enable infinite scrolling
            autoplay: true,    // Enable auto-play
            autoplaySpeed: 3000, // Change slides every 3 seconds
            pauseOnHover: true, // Pause auto-play when hovered
            responsive: [
                {
                    breakpoint: 1024, // For tablets and smaller desktops
                    settings: {
                        slidesToShow: 2 // Show 2 items
                    }
                },
                {
                    breakpoint: 768, // For mobile devices
                    settings: {
                        slidesToShow: 1 // Show 1 item
                    }
                }
            ]
        });
    });
    </script>
@endsection