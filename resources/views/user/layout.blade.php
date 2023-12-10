<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('frontend') }}/img/logo.png" type="image/png">
	<title>
		@yield('title')
	</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/vendors/linericon/style.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand" href="index.html"><img src="{{ asset('frontend') }}/img/logo.png" alt=""  style="height: 50px; width: 50px"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('user_about') }}">About</a></li>
							<li class="nav-item submenu dropdown">
								<a class="nav-link" href="#">Portfolio</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{ route('user_portfolio') }}">Portfolio</a></li>
									<li class="nav-item"><a class="nav-link" href="{{ route('user_portfolio_details') }}">Portrfolio Details</a>
								</ul>
							</li>
							
							
							<li class="nav-item"><a class="nav-link" href="{{ route('user_resume') }}">Resume</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('user_contact') }}">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	

    @yield('content')



    <!--================ Start Footer Area =================-->
	<footer class="footer_area section_gap">
		<div class="container">
			<div class="row footer_inner justify-content-center">
				<div class="col-lg-6 text-center">
					<aside class="f_widget social_widget">
						<div class="f_logo">
							<img src="{{ asset('frontend') }}/img/logo.png" alt="" style="height: 70px; width: 70px">
						</div>
						<div class="f_title">
							<h4 style="color: #CC4643">Follow Me</h4>
						</div>
						<ul class="list">
							<li><a href="https://www.facebook.com/mominul.islam.35912672" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://github.com/mominmunnaf" target="_blank"><i class="fa fa-github"></i></a></li>
							<li><a href="https://www.munnaf.xyz" target="_blank"><i class="fa fa-globe"></i></a></li>
						</ul>
					</aside>
					<div class="copyright">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <a href="https://www.munnaf.xyz" target="_blank">Momin Munnaf</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('frontend') }}/js/jquery-3.2.1.min.js"></script>
	<script src="{{ asset('frontend') }}/js/popper.js"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend') }}/js/stellar.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('frontend') }}/vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="{{ asset('frontend') }}/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="{{ asset('frontend') }}/vendors/isotope/isotope-min.js"></script>
	<script src="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.ajaxchimp.min.js"></script>
	<script src="{{ asset('frontend') }}/js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('frontend') }}/js/gmaps.min.js"></script>
	<script src="{{ asset('frontend') }}/js/theme.js"></script>
</body>

</html>