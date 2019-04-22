<!DOCTYPE HTML>
<html>
<head>
<title>Booking Garge</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Car Towing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- font files -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
	<link href="/templates/garage/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/templates/garage/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />	
	<link href="/templates/garage/css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="/templates/garage/css/swipebox.css">
	<link href="/templates/garage/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!-- /css files -->
<!-- js files -->
<script src="/templates/garage/js/modernizr.custom.js"></script>
<script src="/templates/garage/js/jquery-2.2.3.min.js"></script> 
<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<!-- /js files -->
</head>
<body>
<div class="main-top" id="home">
<!-- banner section -->
<!-- <div class="pogoSlider" id="js-main-slider">
	<div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="1000"  style="background-image:url(/templates/garage/images/banner1.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>WE <span>GIVE</span> BEST SERVICES</h3>
		</div>		
	</div>
	<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(/templates/garage/images/banner2.jpg);">
		<div class="pogoSlider-slide-element">
		<h3>CAR <span>WASH</span>. GLASSING. REPAIR</h3>
		</div>
	</div>
	<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(/templates/garage/images/banner3.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>WE <span>GIVE</span> BEST SERVICES</h3>
		</div>
	</div>
	<div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="1000"  style="background-image:url(/templates/garage/images/banner4.jpg);">
		<div class="pogoSlider-slide-element">
			
			<h3>CAR <span>WASH</span>. GLASSING. REPAIR</h3>
		</div>
	</div>
</div> -->
<!-- /banner section -->
<!-- top bar -->
<div class="top-bar">
	<div class="container">
		<ul class="top-contacts">
			<li class="top-unhover"><p><span class="fa fa-phone-square" aria-hidden="true"></span> +84 905 612 866</p>
			<li class="top-hover"><p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:ocean06041996@gmail.com">ocean06041996@gmail.com</a></p>
		</ul>
		<ul class="top-links">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
		<div class="clearfix"></div>
	</div>		
</div>
<!-- /top bar -->
<div class="header-top">
	<div class="container">
	    <nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="{{ route('garage.index') }}">CAR <span>Towing</span></a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav cl-effect-14">
					<li><a class="scroll" href="{{ route('garage.index') }}" class="active">Home</a></li>
					<li><a class="scroll" href="#about">About</a></li>
					<li class="sub-menu">
						<a class="scroll" href="#service" id="sub-menu">Services</a>
						<ul class="sub">
	                        <li><a href="{{ url('/garage') }}">Exhaust</a></li>
	                        <li><a href="">Batteries</a></li>
	                    </ul>
					</li>
					<li><a class="scroll" href="#contact">Contact</a></li>
				  </ul>
			</div>
	<!-- /.navbar-collapse -->

		</nav>	
	</div>
</div>
		<nav class="navbar-booking">
			<h1><a href="{{ route('garage.getCar') }}">BOOKING TO REPAIR YOUR CAR</a></h1>
		</nav>
</div>

<style type="text/css">
	.sub {
		position: absolute;
		display: none;
	}
	.sub-menu:hover .sub {
		display: block;
		color: red;
	}
	.sub li {
		background-color: #222222;
		list-style-type: none;
		padding: 10px;
	}
	.sub li a {
		text-decoration: none;
		color: #fff;
	}
	.navbar-booking {
		background: aquamarine;
    	text-align: center;
    	padding: 5px;
	}
	.navbar-booking a {
		text-decoration: none;
	}
</style>