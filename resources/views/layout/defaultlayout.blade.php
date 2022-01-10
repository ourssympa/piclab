<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from arty.flatheme.net/home/agency-clean-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 10:31:40 GMT -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
        <meta name="keywords" content="">
		<title>PicLab</title>
		<!-- Favicon -->
        <link href="../assets/images/favicon.png" rel="shortcut icon">
		<!-- CSS -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link href="{{ asset('fontaw/css/all.css') }}" rel="stylesheet">
		<link href="../assets/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="../assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="../assets/plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
		<link href="../assets/plugins/justified-gallery/justified-gallery.min.css" rel="stylesheet">
		<link href="../assets/plugins/sal/sal.min.css" rel="stylesheet">
		<link href="../assets/css/main.css" rel="stylesheet">

		<!-- Fonts/Icons -->
		<link href="../assets/plugins/font-awesome/css/all.css" rel="stylesheet">
		<link href="../assets/plugins/themify/themify-icons.min.css" rel="stylesheet">
		<link href="../assets/plugins/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
	</head>
	<body data-preloader="4">

		<div class="wrapper">

			<!-- Purchase Button -->


			<!-- Scroll to Top -->
			<div class="scrolltotop">
				<a class="button-circle button-circle-sm button-circle-blue" href="#"><i class="ti-arrow-up"></i></a>
			</div>
			<!-- end Scroll to Top -->

			<!-- Header -->
			<div class="header absolute-light">
				<div class="container">
					<div class="logo">
						<h4 class="uppercase letter-spacing-2"><a href="">PicLab</a></h4>
					</div>
					<div class="header-menu-wrapper">
						<!-- Menu -->
						<ul class="header-menu">
							<li class="m-item">
								<a class="m-link" href="{{ route('images') }}">Accueil</a>

							</li>
							<li class="m-item">
								<a class="m-link" href="{{ route('menu',['cat'=>"university"]) }}">University</a>

							</li>
							<li class="m-item">
								<a class="m-link" href="{{ route('menu',['cat'=>"dark"]) }}">Dark</a>

							</li>
							<li class="m-item">
								<a class="m-link"  href="{{ route('menu',['cat'=>"porfolio"]) }}">Porfolio</a>

							</li>
							<li class="m-item">
								<a class="m-link"  href="{{ route('menu',['cat'=>"shop"]) }}">Shop</a>

							</li>

							<li class="m-item">
								<a class="m-link" href="#">Elements</a>

							</li>
						</ul>
						<!-- Extra -->
						<div class="header-menu-extra">
							<ul class="list-inline">
                                @if(!Auth::user())
                                <li class="m-item">
                                    <i class="fas fa-user"></i>
                                    <a class="m-link" href="{{ route('login') }}"> connexion</a>

                                </li>
                                @endif
                                @if(Auth::user())

                                    <li class="m-item">
                                        <i class="fas fa-user-slash"></i>
                                        <a class="m-link" href="{{ route('logout') }}"> Deconnexion</a>

                                    </li>

                                @endif

						</div>
						<!-- Close Button -->
						<button class="close-button">
							<span></span>
						</button>
					</div><!-- end header-menu-wrapper -->
					<!-- Menu Toggle on Mobile -->
					<button class="m-toggle">
						<span></span>
					</button>
				</div><!-- end container -->
			</div>
			<!-- end Header -->

			<!-- Hero section -->
			<div class="section-2xl " style="background-image: url({{ asset("lucas-chizzali-oMQa_9YL984-unsplash.jpg") }});background-size: cover;background-repeat: no-repeat;" >
				<div class="container">
					<div class="row">
						<div class="col-13 col-lg-13 offset-lg-1 col-xl-9 offset-xl-2">
							<h1 class="display-4 font-weight-semi-bold uppercase letter-spacing-2 line-height-150 text text-white">Piclab toute la magie des photos</h1>

									<div class="">
                                        <form action="{{ route('recherche') }}" method="post" class="w-full flex justify-between mx-3">
										@csrf
                                        <input type="text" name="recherche" class="w-2/3  bg-white font-weight-bold text text-xl text-dark" placeholder="rechercher vos photos" >
										<div class="flex justify-between w-1/3">
										<input type="submit" class=" w-full bg-white text-xl font-semibold" value="Recherche">

										</div>
									</form>



								</div>

						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Hero section -->
			<!-- About section -->
            @yield('section')
			<!-- end About section -->

			<!-- Services section -->
			<div class="section padding-top-0">
				<div class="container text-center">
					<div class="row">
						<div class="col-12 col-lg-4" data-sal="slide-up" data-sal-delay="100">
							<div class="f-box style-1">
								<div class="f-box-icon">
									<i class="ti-star"></i>
								</div>
								<h5 class="font-weight-normal">Marketing</h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
						</div>
						<div class="col-12 col-lg-4" data-sal="slide-up" data-sal-delay="250">
							<div class="f-box style-1">
								<div class="f-box-icon">
									<i class="ti-camera"></i>
								</div>
								<h5 class="font-weight-normal">Photoshoot</h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
						</div>
						<div class="col-12 col-lg-4" data-sal="slide-up" data-sal-delay="400">
							<div class="f-box style-1">
								<div class="f-box-icon">
									<i class="ti-announcement"></i>
								</div>
								<h5 class="font-weight-normal">Branding</h5>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
							</div>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Services section -->

			<!-- Portfolio section -->
			<div class="section-lg bg-dark">
				<div class="container-fluid padding-0">
					<div class="owl-carousel portfolio-carousel">
						<div class="portfolio-carousel-item">
							<a href="https://arty.flatheme.net/portfolio/single/portfolio-single-1.html">
								<div class="portfolio-img">
									<img src="../assets/images/p-carousel-a-1.jpg" alt="">
								</div>
								<div class="portfolio-title">
									<div class="line">
										<span>Project</span>
									</div>
									<div class="line">
										<span>Title</span>
									</div>
								</div>
							</a>
						</div>
						<div class="portfolio-carousel-item">
							<a href="https://arty.flatheme.net/portfolio/single/portfolio-single-1.html">
								<div class="portfolio-img">
									<img src="../assets/images/p-carousel-a-2.jpg" alt="">
								</div>
								<div class="portfolio-title">
									<div class="line">
										<span>Project</span>
									</div>
									<div class="line">
										<span>Title</span>
									</div>
								</div>
							</a>
						</div>
						<div class="portfolio-carousel-item">
							<a href="https://arty.flatheme.net/portfolio/single/portfolio-single-1.html">
								<div class="portfolio-img">
									<img src="../assets/images/p-carousel-a-3.jpg" alt="">
								</div>
								<div class="portfolio-title">
									<div class="line">
										<span>Project</span>
									</div>
									<div class="line">
										<span>Title</span>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div><!-- end container-fluid -->
			</div>
			<!-- end Portfolio section -->

			<!-- Clients section -->
			<div class="section">
			 section 2 galery photo
			</div>
			<!-- end Clients section -->

			<!-- Testimonial section -->
			<div class="section padding-top-0">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-4" data-sal="fade" data-sal-delay="100">
							<div class="testimonial-box">
								<div class="quote">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								</div>
								<div class="avatar">
									<img src="../assets/images/avatar-1.jpg" alt="">
									<div>
										<h6 class="font-weight-medium">Rebecca Lewis</h6>
										<span>Entrepreneur</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4" data-sal="fade" data-sal-delay="250">
							<div class="testimonial-box">
								<div class="quote">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								</div>
								<div class="avatar">
									<img src="../assets/images/avatar-2.jpg" alt="">
									<div>
										<h6 class="font-weight-medium">Elizabeth Jason</h6>
										<span>Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4" data-sal="fade" data-sal-delay="400">
							<div class="testimonial-box">
								<div class="quote">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								</div>
								<div class="avatar">
									<img src="../assets/images/avatar-3.jpg" alt="">
									<div>
										<h6 class="font-weight-medium">Jude Martinez</h6>
										<span>Creative Director</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Testimonial section -->

			<!-- Parallax section -->
			<div class="section-xl bg-image parallax-bg" data-bg-src="../assets/images/agency-clean-1-parallax.jpg">
				<div class="bg-dark-05">
					<div class="container text-center">
						<div class="row">
							<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
								<h1 class="" data-sal="slide-up" data-sal-delay="200">We Are Ready, Are You?</h1>
								<div class="margin-top-30" data-sal="slide-up" data-sal-delay="400">
									<a class="button button-xl button-fancy-1-outline-white" href="#">Get In Touch</a>
								</div>
							</div>
						</div><!-- end row -->
					</div><!-- end container -->
				</div>
			</div>
			<!-- end Parallax section -->

			<!-- Footer -->
			<div class="section bg-dark">
				<div class="container">
					<div class="row col-spacing-40">
						<div class="col-12 col-lg-7">
							<h6 class="font-weight-medium margin-lg-bottom-20">About us</h6>
							<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
							<ul class="list-inline-sm margin-top-20 margin-lg-top-30">
								<li><a class="button-circle button-circle-sm button-circle-white" href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a class="button-circle button-circle-sm button-circle-white" href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a class="button-circle button-circle-sm button-circle-white" href="#"><i class="fab fa-pinterest"></i></a></li>
								<li><a class="button-circle button-circle-sm button-circle-white" href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						<div class="col-12 col-lg-5">
							<div class="row">
								<div class="col-6">
									<h6 class="font-weight-medium margin-lg-bottom-20">Useful links</h6>
									<ul class="list-dash font-lg-small">
										<li><a href="#">Clients</a></li>
										<li><a href="#">Contact</a></li>
										<li><a href="#">Our Team</a></li>
										<li><a href="#">Services</a></li>
									</ul>
								</div>
								<div class="col-6">
									<h6 class="font-weight-medium margin-lg-bottom-20">Additional links</h6>
									<ul class="list-dash font-lg-small">
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Prices</a></li>
										<li><a href="#">Process</a></li>
										<li><a href="#">Terms of Use</a></li>
									</ul>
								</div>
							</div><!-- end row(inner) -->
						</div>
					</div><!-- end row -->
				</div><!-- end container -->
			</div>
			<!-- end Footer -->

		</div><!-- end wrapper -->

		<!-- ***** JAVASCRIPTS ***** -->
		<script src="../assets/plugins/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUma4oJ7_6VbfGNdUYdv6VQ0Ph07Fz0k8"></script>
		<script src="../../polyfill.io/v3/polyfill.minc677.js?features=IntersectionObserver"></script>
		<script src="../assets/plugins/plugins.js"></script>
		<script src="../assets/js/functions.min.js"></script>
	</body>

<!-- Mirrored from arty.flatheme.net/home/agency-clean-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Dec 2021 10:31:47 GMT -->
</html>
