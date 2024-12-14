<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<!-- DESCRIPTION -->
<meta name="description" content="H & H Global Education" />
<!-- OG -->
<meta property="og:title" content="H & H Global Education" />
<meta name="format-detection" content="telephone=no">
<!-- PAGE TITLE HERE ============================================= -->
<title>H & H Global Education</title>
<!-- MOBILE SPECIFIC ============================================= -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- All PLUGINS CSS ============================================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/assets.css') }}">

<!-- TYPOGRAPHY ============================================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/typography.css') }}">

<!-- SHORTCODES ============================================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/shortcodes/shortcodes.css') }}">

<!-- STYLESHEETS ============================================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/style.css') }}">
<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/css/color/color-1.css') }}">

<!-- REVOLUTION SLIDER CSS ============================================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/vendors/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/vendors/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('h-and-h/assets/vendors/revolution/css/navigation.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600&display=swap" rel="stylesheet">


</head>


<style>
	 body{
        font-family: 'Dosis', sans-serif;
    }
	/* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
</style>
<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>

			<!-- Content -->
			<div class="page-content bg-white">
				<!-- inner page banner -->
				<div class="page-banner ovbl-dark" style="background-image: url('{{ asset('h-and-h/assets/images/banner/banner2.jpg') }}');">
				<div class="container">
						<div class="page-banner-entry">
							<h1 class="text-white">OUR TEAM</h1>
						 </div>
					</div>
				</div>

		</div>

		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
		
		<!-- Team -->
		<section id="team" class="pb-5">
			<div class="container">
				<div class="row">
					<!-- Team member -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" >
							<div class="mainflip flip-0">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="https://www.hhglobaledu.co.uk/assets/img/team/shovon.jpeg" alt="card image"></p>
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.</p>
											<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="backside">
									<div class="card">
										<div class="card-body text-center mt-4">
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-twitter"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./Team member -->
					<!-- Team member -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="https://www.hhglobaledu.co.uk/assets/img/team/mizan.jpg" alt="card image"></p>
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.</p>
											<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="backside">
									<div class="card">
										<div class="card-body text-center mt-4">
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-twitter"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./Team member -->
					<!-- Team member -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="https://www.hhglobaledu.co.uk/assets/img/team/arafat.jpg" alt="card image"></p>
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.</p>
											<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="backside">
									<div class="card">
										<div class="card-body text-center mt-4">
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-twitter"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./Team member -->
					<!-- Team member -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="https://www.hhglobaledu.co.uk/assets/img/team/subhash.jpg" alt="card image"></p>
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.</p>
											<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="backside">
									<div class="card">
										<div class="card-body text-center mt-4">
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-twitter"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./Team member -->
					<!-- Team member -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="https://www.hhglobaledu.co.uk/assets/img/team/majhar.jpg" alt="card image"></p>
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.</p>
											<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="backside">
									<div class="card">
										<div class="card-body text-center mt-4">
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-twitter"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./Team member -->
					<!-- Team member -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip" ontouchstart="this.classList.toggle('hover');">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="https://www.hhglobaledu.co.uk/assets/img/team/shaz.jpg" alt="card image"></p>
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.</p>
											<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
										</div>
									</div>
								</div>
								<div class="backside">
									<div class="card">
										<div class="card-body text-center mt-4">
											<h4 class="card-title">Name</h4>
											<p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-twitter"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ./Team member -->
		
				</div>
			</div>
		</section>

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