<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/assets.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/typography.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/shortcodes/shortcodes.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/color/color-1.css') }}">
	<style>
		 body{
        font-family: 'Dosis', sans-serif;
    }
		/* CEO Section Background */
		.ceo-section {
			background-color: ;
			padding: 80px 0;
		}

		/* Card Design with Gradient and Light Shadow */
		.card {
			background: #00237D; /* Soft gradient */
			color: white;
			border: none;
			border-radius: 20px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Light shadow */
			transition: all 0.4s ease; /* Smooth transition */
		}

		.card-body {
			padding: 50px;
		}

		.card-title {
			font-size: 30px;
			font-weight: 700;
		}

		.card-text {
			font-size: 18px;
			line-height: 1.7;
		}

		.ceo-image {
			border-radius: 50%;
			border: 4px solid white;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s ease;
		}

		.ceo-image:hover {
			transform: scale(1.05); /* Slight hover effect on image */
		}

		.text-end strong {
			font-size: 18px;
		}

		/* Hover Effect for the Card */
		.card:hover {
			box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15); /* Stronger shadow on hover */
			transform: translateY(-5px); /* Slight elevation */
		}
	</style>
</head>

<body id="bg">
	<div class="page-wraper">
		<!-- CEO Message Section -->
		<div id="loading-icon-bx"></div>

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" 
        style="
            background-image: url('https://media.istockphoto.com/id/1219430092/photo/word-ceo-on-white-stickers-and-a-golden-pen-on-grey-blue-background.jpg?s=612x612&w=0&k=20&c=eDN0N9oelLuYl5bOvSZxfv7m73iBsY3Y0skUv9nTq0E=');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        ">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white" style="text-align: center;">Greetings from CEO</h1>
            </div>
        </div>
    </div>
</div>

		<section class="ceo-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="card shadow-lg text-center">
							<div class="card-body">
								<!-- CEO Profile Picture -->
								<img src="https://www.hhglobaledu.co.uk/assets/img/team/shovon.jpeg" class="rounded-circle ceo-image mb-4" alt="CEO Profile Picture" width="150" height="150">
	                              
								<p class="card-text">
									Dear valued team members, students, and partners,
								</p>
								<p class="card-text">
									I am immensely proud of the work we have done together over the years. As we continue to grow and innovate, I want to take a moment to reflect on the principles that guide us: integrity, collaboration, and a relentless pursuit of excellence.
								</p>
								<p class="card-text">
									The future holds many exciting opportunities for us, and we are well-positioned to meet the challenges ahead. With your continued dedication and passion, I am confident that we will achieve great things together.
								</p>
								<p class="card-text">
									Thank you for your hard work and commitment. Let us continue to build on our success and make a positive impact on the world.
								</p>
								<p class="text-end">
									<strong>Name</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<!-- External JavaScripts -->
<script src="{{ asset('h-and-h/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/magnific-popup/magnific-popup.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/counter/waypoints-min.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/counter/counterup.min.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/masonry/masonry.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/masonry/filter.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('h-and-h/assets/js/functions.js') }}"></script>
<script src="{{ asset('h-and-h/assets/js/contact.js') }}"></script>
<script src="{{ asset('h-and-h/assets/vendors/switcher/switcher.js') }}"></script>
</body>

</html>


