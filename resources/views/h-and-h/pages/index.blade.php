@extends('h-and-h.layouts.app')
@section('content')

<!-- BANNER SECTION -->

<!-- <div class="banner-section" id="banner-section">
    @foreach($banners as $banner)
    <div class="banner-content" style="background-image: url('{{ asset('storage/' . $banner->image) }}')">
      <h1 id="slider-heading">{{$banner->title}}</h1>
      <p id="slider-text">{{$banner->description}}</p>
      <a href="book-free-counselling.html" class="btn study-button mt-5" style="background-color: #D0142C; color: white; border-radius: 50px;">Book A Free Counselling Session Now</a>
    </div>
    @endforeach
    <button class="left-arrow">&larr;</button>
    <button class="right-arrow">&rarr;</button>
</div> -->


<div class="banner-section" id="banner-section">
    @foreach($banners as $banner)
    <div class="banner-content" style="position: relative; height: 100vh; width: 100%;">
        <div class="banner-bg" style="background-image: url('{{ asset('storage/' . $banner->image) }}'); background-size: cover; background-position: center; position: absolute; top: 0; left: 0; right: 0; bottom: 0; filter: blur(5px); z-index: -1;"></div>
        <h1 id="slider-heading">{{$banner->title}}</h1>
        <p id="slider-text">{{$banner->description}}</p>
        <a href="{{ route('freecounselling.form') }}" class="btn study-button mt-5" style="background-color: #D0142C; color: white; border-radius: 50px;">
            Book A Free Counselling Session Now 
        </a>
    </div>
    @endforeach
    <button class="left-arrow">&larr;</button>
    <button class="right-arrow">&rarr;</button>
</div>




<div class="container" style="transform: translateY(-10vh);">
    <div class="row justify-content-center">
    @foreach ($countries as $country)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card" style="position: relative; background-image: url('{{ asset('storage/' . $country->banner) }}'); background-size: cover; background-position: center; height: 300px; color: white; border-radius: 8px; overflow: hidden;">
                    <div class="flag" style="position: absolute; top: 10px; left: 10px; width: 110px; height: 110px; overflow: hidden; border-radius: 50%;">
                        @if ($country->icon)
                            <img src="{{ asset('storage/' . $country->thumbnail) }}" alt="{{ $country->name }}" style="width: 100%; height: 100%;">
                        @endif
                    </div>
                    <a  href="{{ route('countryDestination', $country->id) }}" class="button mt-2 nav-link study-button" style="position: absolute; bottom: 20px; right: 20px; color: white; font-weight: bold; background-color: rgba(0, 0, 0, 0.5); padding: 5px 10px; border-radius: 4px;">
                        Study in {{ $country->name }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Add custom styles -->
<style>
    .study-button:hover {
        background-color: rgba(0, 0, 0, 0.8); /* Darken the background color on hover */
    }
</style>




</div>



<!-- BANNER END SECTION -->




<section class="container d-flex flex-column flex-md-row rounded" 
         style="background: linear-gradient(to right, #D0142C, #00237D); /* Gradient background */
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
                padding: 40px; 
                opacity: 1;">
    @foreach($greetings as $greeting)
        <div class="text-container order-2 order-md-1" 
             style="flex: 1; 
                    position: relative; 
                    overflow: hidden; 
                    border-radius: 20px; 
                    padding: 20px; 
                    opacity: 1; 
                    clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);"> <!-- Curved shape -->
            <h1 class="display-4" style="color: white;">{{ $greeting->title }}</h1>
            <p style="font-size: 1.2rem; color: white;" class="mt-5">
                {{ $greeting->description }}
            </p>
            {{-- <a href="#explore" class="btn mt-5" 
               style="background: linear-gradient(to right, #D0142C, #00237D); /* Gradient background */
                      color: white; 
                      padding: 12px 30px; 
                      border-radius: 30px; 
                      border: none; 
                      ">Explore Now</a> --}}
        </div>
        <div class="image-container order-1 order-md-2" 
             style="opacity: 1;"> <!-- Changed opacity to 1 -->
            <img src="{{ asset('storage/' . $greeting->image) }}" alt="Welcome Image" class="img-fluid" 
                 style="border-radius: 20px; 
                        height: auto; 
                        max-height: 400px; 
                        width: auto;"> <!-- Elliptical shape -->
        </div>
    @endforeach
</section>


<!-- free course section -->
<div class="services-section container rounded mt-5 p-5">
  
    <h3 class="text-center mb-5">
        <span style="font-size: 35px;">Discover Why H&H Global Education is Your Ultimate Partner</span>
        <br> for Study Abroad Success
    </h3>
    <div class="row text-center gy-4 gx-5">
    @foreach($whyHHneeds as $item)
        <!-- Service Item -->
        <div class="col-lg-4 col-md-6 d-flex">
            <a href="#" class="service-box-link w-100">
                <div class="service-box p-4 shadow">
                    <div class="service-icon">
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" 
                                 style="height: 80px; width: 80px; border-radius: 50%;">
                        @else
                            <img src="{{ asset('h-and-h/flag/default-image.jpg') }}" alt="Default Image" 
                                 style="height: 80px; width: 80px; border-radius: 50%;">
                        @endif
                    </div>
                    <h5 class="mt-3">{{ $item->title }}</h5>
                    <p class="mt-2">{{ $item->description }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>

</div>






<!--find university  -->
<section class="custom-section container rounded mt-5">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="https://www.shutterstock.com/image-photo/elearning-education-internet-lessons-online-600nw-2158034833.jpg" alt="Find a Course" class="circle-img">
                <div class="text-center-custom">
                    <a href="findCourse.html" class="btn btn-red">FIND A COURSE</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="https://media.istockphoto.com/id/1371896330/photo/happy-asian-woman-in-his-graduation-day.jpg?s=612x612&w=0&k=20&c=Ur3moWl1fKFms-6UACseglMjoYAynYKzsanZpgK8lFk=" alt="Find a University" class="circle-img">
                <div class="text-center-custom">
                    <a href="findUniversity.html" class="btn btn-red">FIND A UNIVERSITY</a>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="https://media.istockphoto.com/id/1406888053/photo/a-group-of-cheerful-people-at-graduation-holding-diplomas-or-certificates-up-together-and.jpg?s=612x612&w=0&k=20&c=8LRkx77cpb1clqj2tHqOY--uO8Mj6DB8Qd1Y3RdDRyQ=" alt="Find a Scholarship" class="circle-img">
                <div class="text-center-custom">
                    <a href="findScholership.html" class="btn btn-red">FIND A SCHOLARSHIP</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlRrbg9v_ZQyQ28Lb6RwQmK9cxcyzjJr7PnQ&s" alt="Find a Scholarship" class="circle-img">
                <div class="text-center-custom">
                    <a href="Applcationprocess.html" class="btn btn-red">APPLICATION PROCESS</a>
                </div>
            </div>
         
        </div>
    </div>
</section>

<section class="glance-info">
    <div class="container">
        <div class="row">
            @foreach ($quick as $item)
                <div class="col-lg-6 text-black">
                    <h3>{{ $item->title }}</h3>
                    <p class="text-black">
                        {{ $item->description }}
                    </p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="{{ $item->title }}">
                </div>
            @endforeach
        </div>
    </div>
</section>






<!-- Add Font Awesome CDN in the head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



    
    <!-- grid section -->
    {{-- <div class=" gallery container rounded">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="gallery-item">
                    <div class="icon"><i class="fas fa-graduation-cap"></i></div>
                    <div class="content">
                        <h4 class="text">Education Expo</h4>
                        <p class="description">Explore various educational opportunities across the globe.
                        </p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="gallery-item">
                    <div class="icon"><i class="fas fa-globe"></i></div>
                    <div class="content">
                        <h4 class="text">Global Opportunities</h4>
                        <p class="description">Explore various educational opportunities across the globe.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="gallery-item">
                    <div class="icon"><i class="fas fa-book"></i></div>
                    <div class="content">
                        <h4 class="text">Study Resources</h4>
                        <p class="description">Access a wide range of study materials and resources.</p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="gallery-item">
                    <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                    <div class="content">
                        <h4 class="text">Upcoming Events</h4>
                        <p class="description">Stay updated on upcoming educational events and workshops.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

   
    


<!-- A Glimpse of Our Happy Students -->
<div class="profile-section text-center container mt-5 rounded">
    <h2>what students says about us</h2>
    <div class="profiles mb-5">
    <div class="profiles">
    @foreach($studentSays as $studentSay)
        <div class="profile" id="profile{{ $loop->iteration }}">
            <img 
                src="{{ $studentSay->image ? asset('storage/'.$studentSay->image) : 'https://via.placeholder.com/150' }}" 
                alt="{{ $studentSay->title }}" 
                class="profile-img"
            >
            <div class="profile-content">
                <p><strong>{{ $studentSay->title }}</strong></p>
                <p>{{ $studentSay->description }}</p>
            </div>
        </div>
    @endforeach
</div>


    </div>
</div>




<!-- Checkout our latest Posts -->
<h2 class="text-center mt-5" style="color: #D0142C;">Find out latest study aboard news</h2>
<div class="partner-section-container container">
    @foreach($LatestAbroads as $abroadNews)
        <div class="partner-section">
            <img src="{{ $abroadNews->image ? asset('storage/'.$abroadNews->image) : 'https://via.placeholder.com/150' }}" 
                 alt="{{ $abroadNews->title }}" 
                 class="partner-image">
            <h3>{{ $abroadNews->title }}</h3>
            <p class="partner-date">{{ \Carbon\Carbon::parse($abroadNews->news_date)->format('F j, Y') }}</p>
            <a href="#" class="read-more">Read More</a>
        </div>
    @endforeach
</div>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<div class="slider-container text-center mt-5 mb-5" style="background: linear-gradient(to bottom, #D0142C, #00237D);">
    <h2 class="text-white mt-4 mb-5">Our Partner University</h2>
    <div class="slider mb-5">
        @foreach ($partnerUniversities as $partner)
            <div class="slide">
                <a href="{{ $partner->link ?? '#' }}">
                    <img style="height:150px;" src="{{ asset('storage/' . $partner->image) }}" alt="University {{ $loop->iteration }}">
                </a>
            </div>
        @endforeach
    </div>
    <button class="prev-btn">&#10094;</button>
    <button class="next-btn">&#10095;</button>
</div>
<section class="got-question py-5">
    <div class="container">
        <h2 class="text-center mb-4">Got a Question?</h2>
        <div class="row justify-content-center">
            <div class="col-md-5 d-flex align-items-center">
                <img src="https://cdn.pixabay.com/photo/2017/07/10/23/43/question-mark-2492009_1280.jpg" alt="Question" class="img-fluid rounded">
            </div>
            <div class="col-md-5">
                <form>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control form-control-sm" id="firstName" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control form-control-sm" id="lastName" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control form-control-sm" id="email" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control form-control-sm" id="phone" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="city" class="form-label">Your City</label>
                            <input type="text" class="form-control form-control-sm" id="city" required>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="destination" class="form-label">Preferred Study Destination</label>
                            <select class="form-select form-select-sm" id="destination" required>
                                <option value="" disabled selected>Select your destination</option>
                                <option value="USA">USA</option>
                                <option value="UK">UK</option>
                                <option value="Canada">Canada</option>
                                <option value="Australia">Australia</option>
                                <option value="Germany">Germany</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3 col-12">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control form-control-sm" id="message" rows="3" required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn text-white w-100" style="border-radius:5px"><b>Submit</b></button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- WhatsApp Button -->
<div id="whatsapp-chatbot">
<div class="whatsapp-button" onclick="toggleChatPopup()">
    <i class="fab fa-whatsapp"></i>
</div>
</div>
<!-- WhatsApp Chat Popup -->
<div id="chat-popup" class="chat-popup">
<header>
    WhatsApp Chat
    <span class="close-btn" onclick="toggleChatPopup()">×</span>
</header>
<p>Hi! How can we help you?</p>
<input type="text" id="userMessage" placeholder="Type your message here...">
<button onclick="sendMessage()">Send</button>
</div>


<script>
    let currentSlide = 0;
    const slides = $('.banner-content');
    const totalSlides = slides.length;

    // Create an array of image URLs dynamically using PHP Blade syntax
    const bannerImages = @json($banners->map(fn($banner) => asset('storage/' . $banner->image)));

    function showSlide(index) {
        slides.removeClass('active');
        slides.eq(index).addClass('active');

        // Change the background image of the banner section
        $('#banner-section').css('background-image', `url(${bannerImages[index]})`);
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    $(document).ready(function() {
        // Show the first slide initially
        showSlide(currentSlide);

        // Auto-slide every 5 seconds
        setInterval(nextSlide, 5000);

        // Navigation buttons
        $('.right-arrow').click(nextSlide);
        $('.left-arrow').click(prevSlide);
    });
</script>

@endsection