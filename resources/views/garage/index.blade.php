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
<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<!-- js chatbox -->
	<script>
        var botmanWidget = {
            // frameEndpoint: '/chat.html',
            introMessage: 'Hi, Welcome to visit our website!',
            chatServer : 'chatBot', 
            title: 'Chatbot', 
            mainColor: '#408591',
            bubbleBackground: '#03A9F4',
            aboutText: '',
            bubbleAvatarUrl: 'http://127.0.0.1:8000/templates/garage/images/chat.png',
            // desktopHeight: '350px',
            // desktopWidth: '320px',
        }; 
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
<!-- end js chatbox -->
<!-- /js files -->
</head>
<body>
<div class="main-top" id="home">
<!-- banner section -->
<div class="pogoSlider" id="js-main-slider">
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
</div>
<!-- /banner section -->
<!-- top bar -->
<div class="top-bar">
	<div class="container">
		<ul class="top-contacts">
			<li class="top-unhover"><p><span class="fa fa-phone-square" aria-hidden="true"></span> +84 905 612 866</p>
			<li class="top-hover"><p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:ocean06041996@gmail.com">ocean06041996@gmail.com</a></p>
		</ul>
		<ul class="top-links">
			<li><a href="https://www.facebook.com/ocean6496" target="_blank"><i class="fa fa-facebook"></i></a></li>
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
	                        <li><a href="{{ url('/service') }}">Exhaust</a></li>
	                        <li><a href="{{ url('/garage') }}">Batteries</a></li>
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
	<!-- Nav tabs -->
	<!--what-we-do-->
			<div class="tabs" id="about">
				<div class="container">
				<div class="t-head">
				<h3 class="head">WHY CHOOSE US?</h3>
			     <p class="urna">Vestibulum commodo urna sit amet volutpat.</p>
				 </div>
				</div>
			</div>	
			<!--//what-we-do-->
  <!--count-down -->
	<div class="count" id="service">
		<div class="container">
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">324</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Creative Design</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">543</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Happy Clients</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">434</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>People Loved</h3>
			</div>
			<div class="col-md-3 agile_count_grid">
				<div class="agile_count_grid_left">
					<span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
				</div>
				<div class="agile_count_grid_right">
					<p class="counter">234</p> 
				</div>
				<div class="clearfix"> </div>
				<h3>Save Income</h3>
			</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>
<!-- //count-down -->
<!-- work -->
	<div class="work" id="work">
		<h3 class="head">Our Works</h3>
		<p class="urna">Vestibulum commodo urna sit amet volutpat.</p>
		
		<div class="agileits_works-top">
				<div class="col-md-4 agileits_works-grid">
					<img src="/templates/garage/images/4.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-4 agileits_works-grid two">
				    <div class="wthree-text">
					   <h4>Lorem Ipsum</h4>
					   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry,Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					</div>
					
				</div>
				<div class="col-md-4 agileits_works-grid">
					<img src="/templates/garage/images/10.jpg" alt=" " class="img-responsive" />
				</div>
		    <div class="clearfix"> </div>
		</div>
		
		<div class="agileits_work_grids">
			<ul id="flexiselDemo1">			
				<li>
					<div class="agileits_work_grid view view-sixth">
						<img src="/templates/garage/images/2.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<a href="#" class="info"><i class="fa fa-cogs" aria-hidden="true"></i></a>
						</div>
					</div>
				</li>
				<li>
					<div class="agileits_work_grid view view-sixth">
						<img src="/templates/garage/images/3.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<a href="#" class="info"><i class="fa fa-car" aria-hidden="true"></i></a>
						</div>
					</div>
				</li>
				<li>
					<div class="agileits_work_grid view view-sixth">
						<img src="/templates/garage/images/4.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<a href="#" class="info"><i class="fa fa-cogs" aria-hidden="true"></i></a>
						</div>
					</div>
				</li>
				<li>
					<div class="agileits_work_grid view view-sixth">
						<img src="/templates/garage/images/5.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<a href="#" class="info"><i class="fa fa-car" aria-hidden="true"></i></a>
						</div>
					</div>
				</li>
			</ul>
	
		</div>
	</div>
<!-- //work -->
<!--team -->
<div class="team" id ="team">
		<div class="container">
			<h3 class="head">Meet Our Team</h3>
			<p class="urna">Vestibulum commodo urna sit amet volutpat.</p>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid">
					<div class="agile_team_grid_main">
						<img src="/templates/garage/images/t1.jpg" alt=" " class="img-responsive">
						<div class="p-mask">
								<ul class="top-links two">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Riya John</h3>
						<p>Car Repair</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid">
					<div class="agile_team_grid_main">
						<img src="/templates/garage/images/t2.jpg" alt=" " class="img-responsive">
						<div class="p-mask">
								<ul class="top-links two">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Williamson </h3>
						<p>Car Inspection</p>
					</div>
				</div>
					<div class="col-md-3 agile_team_grid three">
					<div class="agile_team_grid_main">
						<img src="/templates/garage/images/t3.jpg" alt=" " class="img-responsive">
						<div class="p-mask">
								<ul class="top-links two">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>Rosy John</h3>
						<p>Car Wash</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid four">
					<div class="agile_team_grid_main">
						<img src="/templates/garage/images/t4.jpg" alt=" " class="img-responsive">
						<div class="p-mask">
								<ul class="top-links two">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h3>David Pal</h3>
						<p>Car Delivery</p>
					</div>
				</div>
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
<!--Gallery-->
<div class="gallery" id="gallery">
		<div class="container">
		<h3 class="head">Our Gallery</h3>
			<p class="urna">Vestibulum commodo urna sit amet volutpat.</p>
		
				<div class="gallery-grids">
					<div class="col-md-4 baner-top">
						<a href="/templates/garage/images/1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 baner-top">
						<a href="/templates/garage/images/2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 baner-top ban-mar">
						<a href="/templates/garage/images/3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/3.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 baner-top ban-mar">
						<a href="/templates/garage/images/4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/4.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 baner-top ban-mar">
						<a href="/templates/garage/images/5.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/5.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 baner-top ban-mar">
						<a href="/templates/garage/images/6.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/6.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 baner-top">
						<a href="/templates/garage/images/7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/7.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 baner-top">
						<a href="/templates/garage/images/8.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/8.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
						<div class="col-md-4 baner-top">
						<a href="/templates/garage/images/9.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/templates/garage/images/9.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Car Towing</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			</div>
<!-- //gallery -->
<!-- newsletter -->
	<div class="newsletter" id="contact">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Contact With us</h3>
				<p>Donec porta lacus vitae urna placerat, vitae dapibus nulla eleifend. 
					Donec aliquam neque quis felis viverra pulvinar. Aliquam erat volutpat. 
					Nam enim metus, faucibus non porttitor id, laoreet quis sapien.</p>
					<p>Lorem porta lacus vitae urna placerat, vitae dapibus nulla eleifend. 
					Donec aliquam neque quis felis viverra pulvinar. Aliquam erat volutpat. 
					Nam enim metus, faucibus non porttitor id, laoreet quis sapien.</p>
					<ul class="top-links two three">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
				    <p>Your Name </p>
				    <input type="text" name="Your Name"  required=""/>
					<p>Your Email </p>
                    <input type="email" name="Your Email"  required=""/>
					<p>Your Message </p>
					<textarea placeholder="" required=""></textarea>

					<input type="submit" value="SUBMIT">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- map -->
		<div class="map agileits">
			<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3833.883971589609!2d108.14993639993541!3d16.07150969359228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.070566!2d108.1543995!4m5!1s0x314218d68e8ccb03%3A0x64dc2cb3e38bbdaf!2zNTQgTmd1eeG7hW4gTMawxqFuZyBC4bqxbmcsIEhvw6AgS2jDoW5oIELhuq9jLCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZyA1NTAwMDA!3m2!1d16.0738013!2d108.1499142!5e0!3m2!1svi!2s!4v1554518809914!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="map-grids">
					<div class="map-grid-left">
						<ul>
								<li class="dot"><i class="fa fa-location-arrow" aria-hidden="true"></i>54 Nguyen Luong Bang, Da Nang</li>
								<li class="mobile"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +212 522 275 386</li>
								<li class="mes"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">Example @mail.com</a></li>
						</ul>
						<p class="text">OUR LOCATION </p>
						<label class="right-arrow"> </label>
					</div>
					<div class="map-grid-right">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="clearfix"> </div>
				</div>
			
		</div>
		<!-- //map -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileinfo_footer_grids">
				<div class="col-md-4 agileinfo_footer_grid">
					<h2><a href="index.html">Car <span>Towing</span></a></h2>
					<p>Etiam condimentum mi nec tortor euismod, id lobortis odio dictum. Cras 
						suscipit elit eget mi volutpat facilisis.</p>
					<ul class="top-links two three">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Contact Info</h3>
					<ul class="agileinfo_footer_grid_list">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>606/03 Truong Chinh, Cam Le <span>Da Nang City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">ocean06041996@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+0905 612 866</li>
					</ul>
				</div>
				<div class="col-md-4 agileinfo_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileinfo_footer_grid_nav">
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#home">Home</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#service">Services</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#about">About Us</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#team">Team</a></li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a class="scroll" href="#contact">Mail Us</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		
		</div>
	</div>
		<div class="w3agile_footer_copy">
				<p>&copy; 2019 Car Towing. All rights reserved | Design by <a href="http://w3layouts.com/">Ocean</a></p>
			</div>
		<!-- <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a> -->
<!-- //footer -->
<!-- js files -->
<!-- swipe box js -->
<script src="/templates/garage/js/jquery-2.2.3.min.js"></script> 
<script src="/templates/garage/js/jquery.pogo-slider.min.js"></script>
<script src="/templates/garage/js/main.js"></script>
<!-- /js files -->
	<!-- Starts-Number-Scroller-Animation-JavaScript -->
					<script src="/templates/garage/js/waypoints.min.js"></script> 
					<script src="/templates/garage/js/counterup.min.js"></script> 
					<script>
						jQuery(document).ready(function( $ ) {
							$('.counter').counterUp({
								delay: 20,
								time: 1000
							});
						});
					</script>
				<!-- //Starts-Number-Scroller-Animation-JavaScript -->
							<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="/templates/garage/js/jquery.flexisel.js"></script>
				<link rel="stylesheet" type="text/css" href="/templates/garage/css/easy-responsive-tabs.css " />
   <script src="/templates/garage/js/easyResponsiveTabs.js"></script>
   <!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
			<!--/script-->

<script type="text/javascript" src="/templates/garage/js/move-top.js"></script>
<script type="text/javascript" src="/templates/garage/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- swipe box js -->
			<script src="/templates/garage/js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
			<!-- //swipe box js -->

 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>

<!--end-smooth-scrolling-->
<script src="/templates/garage/js/bootstrap.js"></script>
</body>
</html>