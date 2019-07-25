<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>App Name - @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ url('user/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url('user/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url('user/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url('user/css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ url('user/css/flexslider.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ url('user/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ url('user/css/owl.theme.default.min.css') }}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ url('user/css/bootstrap-datepicker.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ url('user/fonts/flaticon/font/flaticon.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url('user/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ url('user/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ url('user/js//respond.min.js') }}"></script>
	<![endif]-->

	</head>
	<body>
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="{{route('user.index')}}">Store</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="{{route('user.index')}}">Home</a></li>
								<li class="has-dropdown">
									<a href="{{route('user.shop')}}">Shop</a>
									<ul class="dropdown">
										<li><a href="{{ url('user/product-detail.html') }}">Product Detail</a></li>
										<li><a href="{{ url('user/cart.html') }}">Shipping Cart</a></li>
										<li><a href="{{ url('user/checkout.html') }}">Checkout</a></li>
										<li><a href="{{ url('user/order-complete.html') }}">Order Complete</a></li>
										<li><a href="{{ url('user/add-to-wishlist.html') }}">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="{{route('user.blog')}}">Blog</a></li>
								<li><a href="{{route('user.about')}}">About</a></li>
								<li><a href="{{route('user.contact')}}">Contact</a></li>
								<li class="btn-lg" data-toggle="modal" data-target="#myModal"><a href="{{ ($name_page == 'shop') ? '#' : route('user.cart') }}">
									<i class="icon-shopping-cart"></i> Cart [<span class="count_cart">{{Cart::count()}}</span>]</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<aside id="colorlib-hero" class="breadcrumbs">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url({{ url('user/images/cover-img-1.jpg') }});">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>Product Detail</h1>
				   					<h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="shop.html">Product</a></span> 
									   <span>
									   <?php 
										   switch ($name_page) {
											   case "home":
												   echo "";
												   break;
											   case "shop":
												   echo "shop";
												   break;
											   case "blog":
												   echo "blog";
												   break;
											   case "blog":
												   echo "blog";
												   break;
											   case "about":
												   echo "about";
												   break;
											   case "contact":
												   echo "contact";
												   break;
											   case "cart":
												   echo "cart";
												   break;
											   default:
												   echo "page gì đây ?";
										   }
									   ?>
									   </span>
									</h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="page">
		
		@yield('content')
		</div>

	</div>

	<div class="gototop js-top">
		<a href="{{ url('user/#') }}" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ url('user/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ url('user/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ url('user/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ url('user/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ url('user/js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ url('user/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ url('user/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ url('user/js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ url('user/js/bootstrap-datepicker.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ url('user/js/jquery.stellar.min.js') }}"></script>
	<!-- Main -->
	<script src="{{ url('user/js/main.js') }}"></script>
	
	@yield('main_js')
	</body>
</html>

