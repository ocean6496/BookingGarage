@extends('templates.garage.master')
@section('content')
<!-- container -->
<div class="newsletter" id="contact">
	<div class="container">
		<div class="col-md-6 w3agile_newsletter_left">
			<div class="map agileits">
				<div id="googleMap" style="height: 410px"></div>
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3833.883971589609!2d108.14993639993541!3d16.07150969359228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d16.070566!2d108.1543995!4m5!1s0x314218d68e8ccb03%3A0x64dc2cb3e38bbdaf!2zNTQgTmd1eeG7hW4gTMawxqFuZyBC4bqxbmcsIEhvw6AgS2jDoW5oIELhuq9jLCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZyA1NTAwMDA!3m2!1d16.0738013!2d108.1499142!5e0!3m2!1svi!2s!4v1554518809914!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
				<div class="map-grids">
					<div class="clearfix"> </div>
				</div>		
			</div>
			<!-- <h2 class="car-detail"><span style="color: darkgray">Your car:</span> {{ $car->name }} -  {{ $car_model->name }}</h2>
			<h2 class="car-detail"><span style="color: darkgray">Service detail:</span></h2>
			@foreach($services as $service)
				<h4 style="color: brown; font-size: 22px">{{ $service->name }}:</h4>
				<p> {{ $service->description }}</p>	
			@endforeach -->
		</div>
		<div class="col-md-6 w3agile_newsletter_right">
			<form action="{{ route('garage.getUser', ['$car_id' => $car->id, 'car_model_id' => $car_model->id]) }}" method="POST">
				{{ csrf_field() }}
				<h3 class="head">CHOOSE YOUR GARAGE</h3>
				<p class="urna">You choose car and model to book our service.</p>
				<select name="garage" id="garage" required="" class="input-tag">
					<option value="">Please select your car brand</option>
					@foreach($garages as $garage)
						<option value="{{ $garage->id }}">{{ $garage->address }}</option>
					@endforeach
				</select><br /><br />
				<p class="urna">Date</p>
				<input type="text" name="date" id="datePicker" class="input-tag" placeholder="YYYY-MM-DD" required="" autocomplete="off">
				<span class="fa fa-calendar"></span>
				<p class="urna">Time</p>
				<div>
					<input type="radio" name="time" value="8:00 AM - 9:00 AM" required="">8:00 AM - 9:00 AM
					<input type="radio" name="time" value="9:30 AM - 10:30 AM" required="">9:30 AM - 10:30 AM<br>
					<input type="radio" name="time" value="11:00 AM - 12:00 AM" required="">11:00 AM - 12:00 AM
					<input type="radio" name="time" value="1:00 PM - 2:00 PM" required="">1:00 PM - 2:00 PM<br>
					<input type="radio" name="time" value="2:30 PM - 3:30 PM" required="">2:30 PM - 3:30 PM
					<input type="radio" name="time" value="4:00 PM - 5:00 PM" required="">4:00 PM - 5:00 PM
				</div>
				<input type="submit" name="" value="Next" class="submit">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- container -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<script type="text/javascript">
	function initMap(lat, lng) {
		console.log(lat)
	  
	  	if (typeof lat == 'undefined') {
	  		var location = {lat: 15.57364, lng: 108.47403};
	  	} else {
	    	var location = {lat: lat, lng: lng};
	  	}
	  
	    var map = new google.maps.Map(document.getElementById('googleMap'), {zoom: 14, center: location});
	 
	    var marker = new google.maps.Marker({position: location, map: map});
	}

	$(document).ready(function() {
		$('#garage').change(function() {
			var garage = $(this).val();
			if (garage == 1) {
				initMap(16.06778, 108.22083);
			} else if (garage == 2) {
				initMap(21.010559, 105.800362);
			} else if (garage == 3) {
				initMap(10.762622, 106.660172);
			} else if (garage == 4) {
				initMap(20.86481, 106.68345);
			} else if (garage == 5) {
				initMap(10.03711, 105.78825);
			}
		});
	});
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhq2Zqwb34Lnh1nrz7XdvJ5qmAQ8Lt_ME&callback=initMap">
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#datePicker').datepicker({
            minDate: new Date(),
            dateFormat: "yy-mm-dd"
		});
		$('.fa-calendar').click(function() {
		    $("#datePicker").focus();
		});
	});
</script>
<style type="text/css">
	.input-tag {
		width: 450px !important;
		padding: 7px !important;
		border-radius: 3px !important;
	}
	.submit {
		padding: 10px 15px !important;
	    width: 90px !important;
	    vertical-align: center !important;
	    border-radius: 3px !important;
	}
	.car-detail {
		color: brown;
		padding-bottom: 15px;
	}
	.w3agile_newsletter_right {
		margin: 0px !important;
	}
	.newsletter {
	    padding: 3.5em 0 7em 0;
	}
	.map iframe {
		min-height: 400px !important;
	}
</style>
@endsection