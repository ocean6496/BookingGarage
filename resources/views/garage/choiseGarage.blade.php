@extends('templates.garage.master')
@section('content')
<!-- container -->
	<div class="newsletter" id="contact">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h2 class="car-detail">Your car: {{ $car->name }} -  {{ $car_model->name }}</h2>
				<h2 class="car-detail">Service detail:</h2>
				@foreach($services as $service)
					<h4>{{ $service->name }}:</h4>
					<p> {{ $service->description }}</p>	
				@endforeach
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="{{ route('garage.getUser', ['$car_id' => $car->id, 'car_model_id' => $car_model->id]) }}" method="GET">
					{{ csrf_field() }}
					<h3 class="head">CHOOSE YOUR GARAGE</h3>
					<p class="urna">You choose car and model to book our service.</p>
					<select name="garage" id="car" required="" class="input-tag">
						<option value="">Please select your car brand</option>
						@foreach($garages as $garage)
							<option value="{{ $garage->id }}">{{ $garage->address }}</option>
						@endforeach
					</select><br /><br />
					<p class="urna">Date</p>
					<input type="text" name="date" id="datePicker" class="input-tag" placeholder="YYYY-MM-DD" required="">
					<span class="fa fa-calendar"></span>
					<p class="urna">Time</p>
					<div>
						<input type="radio" name="time" value="10:00 AM - 14:00 AM">10:00 AM - 14:00 AM
						<input type="radio" name="time" value="10:00 AM - 14:00 AM">10:00 AM - 14:00 AM<br>
						<input type="radio" name="time" value="10:00 AM - 14:00 AM">10:00 AM - 14:00 AM
						<input type="radio" name="time" value="10:00 AM - 14:00 AM">10:00 AM - 14:00 AM<br>
						<input type="radio" name="time" value="10:00 AM - 14:00 AM">10:00 AM - 14:00 AM
						<input type="radio" name="time" value="10:00 AM - 14:00 AM">10:00 AM - 14:00 AM
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
</style>
@endsection