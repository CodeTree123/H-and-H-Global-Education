<style>
     /* Styles for the WhatsApp chatbot */
  #whatsapp-chatbot {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
  }
  
  .whatsapp-button {
      background-color: #25d366;
      color: white; /* Set the icon/text color to white for better contrast */
      font-size: 28px;
      padding: 15px;
      border-radius: 50%; /* Make the button a perfect circle */
      border: none; /* Remove any default border */
      cursor: pointer;
      width: 60px; /* Set width and height for consistency */
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow for depth */
  }
  
  .whatsapp-button:hover {
      background-color: #128c7e;
  }
  
  .chat-popup {
      display: none;
      position: fixed;
      bottom: 80px;
      right: 20px;
      background-color: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      padding: 20px;
      width: 300px;
      z-index: 1001;
  }
  
  .chat-popup header {
      font-size: 18px;
      margin-bottom: 10px;
      font-weight: bold;
      text-align: center;
  }
  
  .chat-popup .close-btn {
      position: absolute;
      top: 5px;
      right: 10px;
      font-size: 20px;
      cursor: pointer;
  }
  
  .chat-popup p {
      margin: 10px 0;
  }
  
  .chat-popup input {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
  }
  
  .chat-popup button {
      background-color: #25d366;
      color: white;
      border: none;
      padding: 10px;
      margin-top: 10px;
      width: 100%;
      border-radius: 5px;
      cursor: pointer;
  }
  
  .chat-popup button:hover {
      background-color: #128c7e;
  }
  
    .bg-footer {
        position: relative; /* Ensure the pseudo-element is positioned relative to this element */
        overflow: hidden; /* Prevents the pseudo-element from overflowing */
        padding: 20px; /* Optional: Adds some padding for aesthetics */
    }
    
    .bg-footer::before {
        content: ""; 
        position: absolute; 
        top: 0;
        left: 0;
        right: 0;
        bottom: 0; /* Stretch the pseudo-element to cover the entire footer */
        background-image: url('https://r4.wallpaperflare.com/wallpaper/262/774/423/space-stars-nebula-tylercreatesworlds-wallpaper-29a018cdb1da7dbb263798bff0b156ed.jpg'); /* Same image */
        background-size: cover; /* Makes the image cover the entire footer */
        background-position: center; /* Centers the image */
        background-repeat: no-repeat; /* Prevents the image from repeating */
        filter: blur(8px); /* Adjust the blur amount as needed */
        z-index: 1; /* Ensures the pseudo-element is below the content */
    }
    
    .bg-footer > * {
        position: relative; /* Ensure footer content is above the blurred background */
        z-index: 2; /* Higher z-index than the pseudo-element */
    }
    
        /* New styles for the bullet icon */
        .flag-icon {
            display: inline-block;
            width: 20px; /* Set the size of the flag icon */
            height: 12px; /* Adjust height based on your design */
            margin-right: 10px; /* Space between flag and text */
        }
    
        .accordion-button {
            display: flex; /* Align items in the button */
            align-items: center; /* Center vertically */
        }
    .slider-container {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
        position: relative; /* For positioning buttons */
    }

    .slider {
        width: 100%;
    }

    .slide {
        padding: 10px;
    }

    .slider img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .prev-btn, .next-btn {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        font-size: 18px;
        z-index: 10;
        position: absolute;
        top: 60%; 
        transform: translateY(-50%); 
    }

    .prev-btn {
        left: 10px; 
    }

    .next-btn {
        right: 10px;
    }



    .footer {
        background-color: #00237D;
        color: white;
        padding: 40px 0;
    }

    .footer a {
        color: #f1f1f1;
        text-decoration: none;
    }

    .footer h5 {
        font-weight: bold;
    }

    /* Set a fixed width and height for accordion items */
    .accordion-item {
        border: none;
        width: 300px;
        height: auto;
        margin: 0 15px;
    }

    .accordion-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* background-color: #00237D; */
        color: white;
        border: none;
        transition: background-color 0.3s;
        width: 100%;
        text-align: left;
    }

    .accordion-button:focus {
        box-shadow: none;
    }
    .accordion-body {
        /* background-color: #00237D; */
        color: white;
        /* overflow-y: auto; */
        max-height: 200px;
        padding: 15px;
    }

    .toggle-icon {
        color: #D0142C;
        font-size: 1.2rem;
    }

    /* Add flexbox for layout stability */
    .accordion-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 5px;
    }

    .footer-address p {d
        margin: 0;
    }
    /* Fix accordion button width */
    .accordion-button.collapsed {
        width: 100%;
    }

    .got-question {
        background: linear-gradient(to right, #00237D, #D0142C ); /* Gradient background */
        color: #fff; /* White text color for contrast */
        padding: 2rem; /* Add padding for spacing */
    }

    .got-question img {
        max-width: 100%; /* Make the image responsive */
        height: auto; /* Maintain aspect ratio */
    }

    .got-question h2 {
        color: #fff; /* White color for the heading */
        font-weight: bold; /* Bold font */
    }

    .form-label {
        color: #fff; /* White label color for better readability */
    }

    .form-control, .form-select {
        border: 1px solid #ccc; /* Optional border for professionalism */
    }

    .form-control:focus, .form-select:focus {
        border-color: #fff; /* Change border color on focus */
        box-shadow: 0 0 0.2rem rgba(255, 255, 255, 0.5); /* Add focus shadow */
    }

    .partner-section-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px; 
        background-color: #ffffff; 
        padding: 20px;
        border-radius: 10px;
    }
    
    .partner-section {
        width: 23%;
        background-color: #f9f9f9; 
        padding: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .partner-section:hover {
        transform: translateY(-5px); 
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); 
    }
    
    .partner-image {
        width: 100%;
        height: 200px; 
        object-fit: cover; 
        border-radius: 10px;
        margin-bottom: 10px;
    }
    
    /* Post title styling */
    .partner-section h3 {
        font-size: 18px;
        color: #333333;
        margin-bottom: 5px;
    }
    
    /* Date styling */
    .partner-date {
        font-size: 14px;
        color: #999999;
        margin-bottom: 10px;
    }
    
    /* 'Read More' link */
    .read-more {
        font-size: 14px;
        color: #D0142C;
        text-decoration: none;
        font-weight: bold;
    }
    
    .read-more:hover {
        
    }
    .show-more {
        display: block;
        margin: 30px auto 0; /* Center the button */
        padding: 12px 30px;
        background-color: #EEE;
        color: black;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .show-more:hover {
        background-color: #B01228;
        color: white;
    }
    
    #more-posts {
        display: none;
        margin-top: 40px;
    }
    .loader {
        display: none;
        margin: 20px auto;
        border: 5px solid #f3f3f3;
        border-radius: 50%;
        border-top: 5px solid #D0142C;
        width: 40px;
        height: 40px;
        animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    /* Responsive design */
    @media (max-width: 1200px) {
        .partner-section {
            width: 45%; /* Show two posts in a row */
        }
    }
    
    @media (max-width: 768px) {
        .partner-section {
            width: 100%; /* Show one post in a row */
        }
    }
    


    .profile-section {
        padding: 30px;
        background: linear-gradient(to right, #D0142C, #00237D);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        color: white;
    }

    .profiles {
        display: flex;
        justify-content: center;
        align-items: flex-start; /* Align items to the start */
        gap: 30px; /* Increase space between profiles */
        flex-wrap: wrap; /* Allow wrapping for responsive design */
    }

    .profile {
        text-align: center;
        width: 400px; /* Increased width for each profile */
        height: 400px; /* Increased height for each profile */
        background: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 20px; /* Increased padding */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .profile-img {
    width: 200px; /* Set a fixed width */
    height: 200px; /* Set a fixed height to ensure a perfect circle */
    border-radius: 50%; /* Full circle */
    margin-bottom: 15px;
    border: 3px solid #D0142C; /* Add border to the image */
    object-fit: cover; /* Ensures the image covers the entire area */
}


    h2 {
        font-family: 'Arial', sans-serif;
        font-size: 2.5em; /* Increased font size */
        margin-bottom: 20px;
    }

    p {
        font-family: 'Arial', sans-serif;
        font-size: 1em; 
        line-height: 1.4; 
        margin: 5px 0; 
    }

    .profile-content {
        overflow: hidden;
        text-overflow: ellipsis; 
        display: -webkit-box;
        -webkit-line-clamp: 4; 
        -webkit-box-orient: vertical;
    }

    .circle-img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        margin: auto;
    }
    .btn-red {
        background-color: #D0142C;
        color: white;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 20px;
    }
    .btn-red:hover {
        background-color: #D0142C;
    }
    .text-center-custom {
        text-align: center;
        margin-top: 10px;
    }
    .custom-section {
    background: linear-gradient(to bottom, #D0142C, #00237D);
    padding: 50px 0;
}


    .btn {
        background: linear-gradient(to right, #D0142C, #00237D); /* Gradient background */
        color: white; 
        border-radius: 30px; 
        border: none; 
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn:hover {
        background-color: #E9814C; /* Solid color on hover */
        color: white; 
        transform: scale(1.05); 
    }

    .services-section {
    background: linear-gradient(135deg, #D0142C, #00237D);
    border-radius: 15px;
    color: #ffffff;
    text-align: center;
}

.service-box {
    background: linear-gradient(135deg, #ffffff 0%, #f2f2f2 100%);
    border-radius: 12px;
    color: #333;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
}

.service-icon i {
    color: #00237D;
}

.service-box h5 {
    color: #333;
}

.service-box-link {
    text-decoration: none;
}

    .gallery {
        padding: 20px;
        background: linear-gradient(135deg, #D0142C, #00237D);
        color: white;
        text-align: center;
    }
    
    .gallery-item {
        border-radius: 8px;
        padding: 40px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        background: rgba(0, 0, 0, 0.5);
        transition: background 0.3s ease, color 0.3s ease;
        height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
    }
    
    .gallery-item:hover {
        background: rgba(255, 255, 255, 0.2);
        color: #000;
    }
    
    .icon {
        font-size: 80px;
        margin-bottom: 10px;
        transition: transform 0.3s ease, color 0.3s ease;
        color: white;
        animation: pulse 1.5s infinite; /* Continuous pulsing animation */
    }
    
    .icon:hover {
        transform: scale(1.1);
        color: #D0142C; /* Change color on hover */
    }
    
    .text {
        margin: 5px 0;
        font-size: 24px;
        font-weight: bold;
        color: white;
    }
    
    .description {
        font-size: 16px;
        color: #ffffff;
    }
    
    .gallery-item.active {
        background: #00237D;
        color: #D0142C;
    }

    /* Define the pulsing animation */
    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05); /* Slightly scale up */
        }
    }

    /* Custom media queries for responsiveness */
    @media (max-width: 1200px) {
        .gallery-item {
            height: 280px;
        }
    }
    
    @media (max-width: 992px) {
        .gallery-item {
            height: 260px;
        }
    }
    
    @media (max-width: 768px) {
        .gallery-item {
            height: auto;
            flex: 1 1 100%;
        }
    }

    .at-a-glance-section {
        background-color: #001e6c;
        padding: 50px 0;
    }
    .at-a-glance-card {
        text-align: center;
        color: white;
        margin-bottom: 30px;
    }
    .at-a-glance-icon {
        font-size: 50px;
        margin-bottom: 15px;
    }
    .at-a-glance-title {
        font-size: 28px;
        font-weight: bold;
    }
    .glance-info {
        background-color: #fff;
        padding: 40px;
        color: #001e6c;
        font-size: 16px;
        line-height: 1.5;
    }
    .glance-info h3 {
        color: #001e6c;
        font-weight: bold;
    }
    .glance-info p {
        margin: 0;
    }

    @media (min-width: 992px) {
    .text-res{
        flex: 0 0 auto;
        width: 26.333333%;
    }
 }

   .card {
    width: 100%; /* Full width for responsiveness */
    height: 300px; /* Set a fixed height */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: 10px;
    border-radius: 15px;
    position: relative;
    overflow: hidden;
    transition: all 0.5s ease;
    background: linear-gradient(135deg, #D0142C, ); /* Add linear gradient */
}

    .card::before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        border-radius: 15px;
        /* Set a specific background image for each card */
        background-size: cover;
        background-position: center;
        opacity: 1;
        z-index: 0; 
    }

    .card * {
        z-index: 1; /* Ensure text and images are above the background */
    }

    .image {
        width: 120px;
        height: 120px;
        background-color: #1468BF;
        border-radius: 50%;
        border: 4px solid #fefefe;
        margin-top: 30px;
        background-size: cover;
        transition: all 0.5s ease;
    }

    .card-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .card-info span {
        font-weight: 600;
        font-size: 24px;
        color: black; /* Change text color to white for contrast */
        margin-top: 15px;
        line-height: 5px;
    }

    .card-info p {
        color: rgba(255, 255, 255, 0.9); /* Slightly lighter text for better readability */
    }

    .button {
        text-decoration: none;
        background-color: #1468BF;
        color: white;
        padding: 5px 20px;
        border-radius: 5px;
        border: 1px solid white;
        transition: all 0.5s ease;
    }

    .card:hover .image {
        transform: scale(1.1); /* Slight zoom on country image */
    }

    .button:hover {
        background-color: #FF6844;
        transform: scale(1.1);
    }

.study-button {
    animation: pulse 1.2s infinite ease-in-out;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}


    body{
        font-family: 'Dosis', sans-serif;
    }

   
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
   

.navbar-nav .nav-link:hover {
    color: #D0142C;
}

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

    .service-box-link {
        text-decoration: none;
        color: inherit;
        display: block;
        width: 100%;
        /* border: 0.5px solid #D0142C;
        border-radius: 10px; */
    }

    .service-box {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 10px;
        transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .service-box:hover {
        background: linear-gradient(to bottom, #D0142C, #00237D);        
        color: #fff;
        /* transform: translateY(-10px); */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .service-box:hover .service-icon i,
    .service-box:hover h5,
    .service-box:hover p {
        color: #fff;
    }

    .service-icon {
        margin-bottom: 20px;

    }

    .service-icon i {
        color: #00237D;
        transition: color 0.3s ease;
    }

    .service-box h5 {
        font-size: 1.25rem;
        margin-top: 10px;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .service-box p {
        font-size: 1rem;
    }

    .d-flex {
        display: flex;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .d-flex .service-box {
        width: 100%;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .carousel-item {
      transition: opacity 4s ease-out;
      opacity: 0;
    }
  
    .carousel-item.active {
      opacity: 1;
    }
  
    .carousel-item {
      display: none;
    }
  
    .carousel-item.active {
      display: block;
    }
  
    /* Text animation classes */
    .banner-caption h1,
    .banner-caption p {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }
  
    .text-background {
      position: relative;
      z-index: 10;
    }
  
    .banner-caption h1.active-text,
    .banner-caption p.active-text {
      opacity: 1;
    }
    
    .banner-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }
  
    .banner-caption {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
    }
  
    .button-container a {
      margin: 0 10px;
    }

            slick-dots li.slick-active button:before {
            opacity: .75;
            color: #000;
        }
        .slick-dots li button:before {
            display: none;
        }

  
        /* Banner Slider Section Styles */
        .banner-section {
          position: relative;
          background-size: cover;
          background-position: center;
          height: 500px;
          display: flex;
          justify-content: center;
          align-items: center;
          text-align: center;
          transition: background-image 1s ease;
          animation: fadeIn 1s;
        }
    
        /* Animation */
        @keyframes fadeIn {
          from {
            opacity: 0;
          }
          to {
            opacity: 1;
          }
        }
    
        .banner-content {
          opacity: 0;
          transition: opacity 1s ease;
          color: #00237D; /* Blue color for text */
          position: absolute; /* Positioning for layering */
          display: flex; /* Use flexbox */
          flex-direction: column; /* Arrange children in a column */
          justify-content: center; /* Center vertically */
          align-items: center; /* Center horizontally */
          height: 100%; /* Take full height */
          width: 100%; /* Take full width */
        }
    
        .banner-content.active {
          opacity: 1;
        }
    
        .banner-content h1 {
          font-size: 2.5rem;
          color: #fff;
          margin-bottom: 10px;
        }
    
        .banner-content p {
          font-size: 1.2rem;
          color: #f0f0f0;
        }
    
        .apply-button {
          background-color: #D0142C; /* Red color for button */
          color: white;
          border: none;
          padding: 10px 20px;
          border-radius: 5px;
          font-size: 1rem;
          cursor: pointer;
          transition: background 0.3s ease;
        }
    
        .apply-button:hover {
          background-color: #b01324; /* Darker shade on hover */
        }
    
        .left-arrow, .right-arrow {
          position: absolute;
          top: 50%;
          background: #fff;
          border: none;
          padding: 10px;
          font-size: 20px;
          cursor: pointer;
          transform: translateY(-50%);
          transition: background 0.3s ease;
        }
    
        .left-arrow:hover, .right-arrow:hover {
          background: #ccc;
        }
    
        .left-arrow {
          left: 20px;
        }
    
        .right-arrow {
          right: 20px;
        }
    /* Card Styles */
    .destination-card {
        position: relative;
        background-color: #D0142C;
        color: white;
        border-radius: 10px; /* Rounded corners */
        overflow: hidden; /* Hide overflowing elements */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        transition: transform 0.3s, box-shadow 0.3s; /* Transition for hover effect */
        overflow: visible !important;
    
    }
    
    .destination-card:hover {
        transform: translateY(-5px); /* Lift effect on hover */
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15); /* Darker shadow on hover */
    }
    
    /* Country Icon Styles */
    .country-icon {
        width: 80px; /* Adjusted size */
        height: 80px; /* Adjusted size */
        border-radius: 50%;
        background-size: cover;
        background-position: center;
        position: absolute;
        top: -40px; /* Adjusted position for better alignment */
        left: 50%; /* Center horizontally */
        transform: translate(-50%, 0); /* Center the icon */
        border: 3px solid white; /* Optional: add a border */
        z-index: 0; /* Ensure the icon is above other elements */
    }
    
    /* Content Styles */

    /* Button Styles */
    .btn-light {
        background-color: white;
        color: #D0142C; /* Match button text color to the card */
        border: none; /* No border */
        transition: background-color 0.3s, color 0.3s; /* Transition for hover effect */
    }
    
    .btn-light:hover {
        background-color: #D0142C; /* Button color on hover */
        color: white; /* Text color on hover */
    }
    
    /* Responsive Styles */
    @media (max-width: 576px) {
        .country-icon {
            width: 60px; /* Smaller icon for mobile */
            height: 60px; /* Smaller icon for mobile */
        }
        .destination-card {
            padding: 20px; /* Adjust padding for mobile */
            top: 95px;
        }

        .left-arrow, .right-arrow{
            display: none;
        }
    }

    .navbar-toggler{
                border: none;
                font-size: 30px;
            }
</style>




<style>
    .nav-item a {
    color: #00237D;
    font-weight: bold;
}
.nav-item a:hover {
    color: red;
    font-weight: #D0142C;

}

/* top bar */
 /* Topbar styles */
 .topbar {
    background-color: #00237D;
    color: white;
    font-size: 14px;
    padding: 10px 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1030;
}
.topbar .contact-info {
    font-size: 16px;
}
.topbar .social-icons a {
    color: white;
    margin-left: 10px;
}
.topbar .social-icons a:hover {
    color: #D0142C;
}
.topbar .btn-book-meeting {
    background-color: #D0142C;
    color: white;
    /* border-radius: 20px; */
    padding: 5px 15px;
    margin-left: 15px;
}
.topbar .btn-book-meeting:hover {
    background-color: #00237D;
    color: white;
}

/* Navbar styles */
/* @media (max-width: 768px){
    nav.navbar {
        margin-top: 75px; 
    }
} */


/* Responsive styles */
@media (max-width: 768px) {
    .topbar .contact-info {
        text-align: center;
        margin-bottom: 10px;
    }
    .topbar .social-icons {
        text-align: center;
    }
}


/* banner video */
@import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');


.banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom right, rgba(208, 20, 44, 0.5), rgba(0, 35, 125, 0.5)); /* Gradient with transparency */
    opacity: 0.6;
    pointer-events: none;
}

.banner-caption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    z-index: 1;
    padding: 1rem;
    text-align: center;
}

.text-background {
    /* background: rgba(0, 0, 0, 0.5);  */
    padding: 2rem;
    border-radius: 0.5rem;
    display: inline-block; /* Adjust width to fit content */
    width: 100%;
}

.banner-caption h1 {
    font-size: 3rem; /* Adjust font size as needed */
    font-weight: 700;
    margin-bottom: 1rem;
}

.banner-caption p {
    font-size: 1.25rem; /* Slightly smaller text */
    font-weight: 300;
    margin-bottom: 2rem;
}

.button-container {
    display: flex;
    gap: 1rem; /* Adjust gap between buttons */
    justify-content: center; /* Center buttons horizontally */
}

.button-container a.btn {
    font-weight: 600;
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    transition: background-color 0.3s, color 0.3s;
}

.button-container a.btn.btn-light {
    background-color: #ffffff; /* Light button color */
    color: #000000; /* Dark text color */
}

.button-container a.btn.btn-light:hover {
    background-color: #f0f0f0; /* Lighter background on hover */
}

.become-agent {
    padding: 0.75rem 1.5rem;
    background-color: #D0142C; /* Button color */
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}

.become-agent:hover {
    background-color: #a00f2c; /* Darker shade on hover */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .banner-caption h1 {
        font-size: 2rem;
    }

    .banner-caption p {
        font-size: 1rem;
    }

    .button-container a.btn, .become-agent {
        padding: 0.5rem 1rem;
    }
}

@media (max-width: 576px) {
    .banner-caption h1 {
        font-size: 1.5rem;
    }

    .banner-caption p {
        font-size: 0.875rem;
    }

    .button-container a.btn, .become-agent {
        padding: 0.5rem 0.75rem;
    }
}



/* chat boot */
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
</style>
