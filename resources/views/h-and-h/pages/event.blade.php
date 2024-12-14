<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META ============================================= -->
    
    <!-- FAVICONS ICON ============================================= -->
    
    
    <!-- PAGE TITLE HERE ============================================= -->
    <title>H & H Global Education</title>
    
    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600&display=swap" rel="stylesheet">

    <style>
         body{
        font-family: 'Dosis', sans-serif;
    }
        /* General Styles */
        .form-section {
            background-color: rgba(232, 232, 232, 0.8);
            padding: 20px;
            border-radius: 5px;
        }

        .form-section h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: rgba(0, 79, 139, 0.8);
            color: white;
        }

        .form-container {
            display: flex;
        }

        .form-container form {
            width: 100%;
        }

        .form-container .btn {
            width: 100%; /* Make button full width */
        }

        /* Important Links */
        .important-links ul li a {
            color: #e81c4c;
            text-decoration: none;
            font-size: 18px;
        }

        .important-links ul li a:hover {
            text-decoration: underline;
        }

        /* Event Section */
        .event-section {
            padding: 20px;
            border: 2px solid transparent;
            transition: border 0.3s ease;
            text-align: center;
            background-color: #f9f9f9;
        }

        .event-section:hover {
            border: 2px solid;
            border-image: linear-gradient(45deg, #D0142C, #00237D) 1;
        }

        .event-header {
            display: block;
            font-size: 20px;
            font-weight: bold;
            color: #D0142C;
            text-decoration: none;
            margin-bottom: 10px;
        }

        .event-header:hover {
            color: #00237D;
        }

        .event-subheader, .event-dates, .event-location {
            margin: 5px 0;
            color: #404040;
        }

        .event-dates i, .event-location i {
            color: #D0142C;
        }

        .btn-custom {
            background-color: #00237D;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #D0142C;
            color: white;
        }

        .event-image {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
        }

        /* Image and Layout Styling */
        .d-flex {
            display: flex;
            gap: 20px;
            justify-content: flex-start;
        }

        .img-fixed {
            width: 150px;
        }

        /* Video Container */
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Services List */
        .services-list a {
            color: red;
            text-decoration: none;
        }

        .services-list i {
            color: #0047ab;
            margin-right: 10px;
        }

        .services-list a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body id="bg">
<div class="page-wraper">
    <div id="loading-icon-bx"></div>

    <!-- Header END ==== -->

    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Inner Page Banner -->
        <div class="page-banner ovbl-dark" style="background-image: url('{{ asset('h-and-h/assets/images/banner/banner1.jpg') }}');">
        <div class="container">
                <div class="page-banner-entry text-center mb-5" style="padding: 150px;">
                    <h1 class="text-black" style="opacity: 0.8;">Upcoming Events</h1>
                </div>
            </div>
        </div>
        

        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="index.html">Home</a></li>
                    <li>Upcoming Events</li>
                </ul>
            </div>
        </div>

        <!-- Content Block -->
        <div class="content-block">
            <!-- Event Section -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="event-section mt-3">
                                <div class="row align-items-center flex-column">
                                    <div class="col-md-6">
                                        <!-- Event Image -->
                                        <img style="width: 100%;" src="https://cdn.ahzassociates.co.uk/wp-content/uploads/2024/10/14183137/UK-Universities-Application-week-AHZ-Dhanmondi-Office.webp" alt="Big Ben">
                                    </div>
                                    <div class="col-md-6 content-area">
                                        <!-- Event Details -->
                                        <a href="#" class="event-header text-nowrap">UK Universities Application Week</a>
                                        <p class="event-subheader">October 21 - October 24</p>
                                    </div>
                                </div>
                            </div>
                            <div class="event-section mt-3">
                                <div class="row align-items-center flex-column">
                                    <div class="col-md-6">
                                        <!-- Event Image -->
                                        <img style="width: 100%;" src="https://cdn.ahzassociates.co.uk/wp-content/uploads/2024/10/14183137/UK-Universities-Application-week-AHZ-Dhanmondi-Office.webp" alt="Big Ben">
                                    </div>
                                    <div class="col-md-6 content-area">
                                        <!-- Event Details -->
                                        <a href="#" class="event-header">UK Universities Application Week</a>
                                        <p class="event-subheader">October 21 - October 24</p>
                                    </div>
                                </div>
                            </div>
                            <div class="event-section mt-3">
                                <div class="row align-items-center flex-column">
                                    <div class="col-md-6">
                                        <!-- Event Image -->
                                        <img style="width: 100%;" src="https://cdn.ahzassociates.co.uk/wp-content/uploads/2024/10/14183137/UK-Universities-Application-week-AHZ-Dhanmondi-Office.webp" alt="Big Ben">
                                    </div>
                                    <div class="col-md-6 content-area">
                                        <!-- Event Details -->
                                        <a href="#" class="event-header">UK Universities Application Week</a>
                                        <p class="event-subheader">October 21 - October 24</p>
                                    </div>
                                </div>
                            </div>
                            <div class="event-section mt-3">
                                <div class="row align-items-center flex-column">
                                    <div class="col-md-6">
                                        <!-- Event Image -->
                                        <img style="width: 100%;" src="https://cdn.ahzassociates.co.uk/wp-content/uploads/2024/10/14183137/UK-Universities-Application-week-AHZ-Dhanmondi-Office.webp" alt="Big Ben">
                                    </div>
                                    <div class="col-md-6 content-area">
                                        <!-- Event Details -->
                                        <a href="#" class="event-header">UK Universities Application Week</a>
                                        <p class="event-subheader">October 21 - October 24</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Images on Right Side -->
                        <div class="col-md-5 p-3">
                            <div class="d-flex">
                                <a href="https://example.com">
                                    <img class="img-fixed" src="https://i.ytimg.com/vi/hJEbFdXEGmQ/hq720.jpg" alt="">
                                </a>
                                <a href="https://example.com">
                                    <img class="img-fixed" src="https://i.ytimg.com/vi/hJEbFdXEGmQ/hq720.jpg" alt="">
                                </a>
                            </div>
                            <div class="d-flex mt-2">
                                <a href="https://example.com">
                                    <img class="img-fixed" src="https://i.ytimg.com/vi/hJEbFdXEGmQ/hq720.jpg" alt="">
                                </a>
                                <a href="https://example.com">
                                    <img class="img-fixed" src="https://i.ytimg.com/vi/hJEbFdXEGmQ/hq720.jpg" alt="">
                                </a>
                            </div>
                            <div class="d-flex mt-2">
                                <a href="https://example.com">
                                    <img class="img-fixed" src="https://i.ytimg.com/vi/hJEbFdXEGmQ/hq720.jpg" alt="">
                                </a>
                                <a href="https://example.com">
                                    <img class="img-fixed" src="https://i.ytimg.com/vi/hJEbFdXEGmQ/hq720.jpg" alt="">
                                </a>
                            </div>
                             <!-- Important Links -->
                        <div class="important-links mt-5" style="font-family: Arial, sans-serif; color: #333;">
                            <h2 style="font-size: 24px; color: #E9814C; margin-bottom: 15px;">IMPORTANT LINKS</h2>
                            <ul style="list-style-type: none; padding-left: 0;">
                                <li style="margin-bottom: 10px;"><a href="#" style="text-decoration: none; color: #2D5BA9; font-size: 18px;"><i class="fas fa-file-alt" style="margin-right: 8px;"></i>Application Process</a></li>
                                <li style="margin-bottom: 10px;"><a href="#" style="text-decoration: none; color: #2D5BA9; font-size: 18px;"><i class="fas fa-graduation-cap" style="margin-right: 8px;"></i>UK Education Support</a></li>
                                <li style="margin-bottom: 10px;"><a href="#" style="text-decoration: none; color: #2D5BA9; font-size: 18px;"><i class="fas fa-briefcase" style="margin-right: 8px;"></i>Job Opportunity</a></li>
                                <li style="margin-bottom: 10px;"><a href="#" style="text-decoration: none; color: #2D5BA9; font-size: 18px;"><i class="fas fa-trophy" style="margin-right: 8px;"></i>Latest UK University Ranking 2024</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Block END -->
    </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
