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
        <h3>Universities We Partner With</h3>
        <div class="university-carousel my-5">
            <h3 class="text-center mb-4">Universities We Partner With</h3>
            <div class="slider">
                @foreach($country->universities as $university)
                    <div class="slider-item">
                        <div class="card h-100 shadow hover-effect">
                            <div style="width: 100%; height: 300px; overflow: hidden; border-radius: 8px;">
                                <img 
                                    src="{{ asset('banners/' . $university->university_banner) }}" 
                                    class="card-img-top" 
                                    alt="{{ $university->name }}" 
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $university->name }}</h5>
                                <a style="width:200px" href="{{ route('university.show', $university->id) }}" class="btn btn-primary mt-3">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        
        
        
        

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