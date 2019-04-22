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
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //footer -->
<!-- js files -->
<!-- swipe box js -->
<!-- <script src="/templates/garage/js/jquery-2.2.3.min.js"></script>  -->
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
