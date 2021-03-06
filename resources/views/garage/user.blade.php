@extends('templates.garage.master')
@section('content')
<!-- container -->
	<div class="newsletter" id="contact">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h2 class="h2-tag"><span style="color: darkgray">Your car:</span><span class="car-detail">  {{ $car->name }} -  {{ $car_model->name }}</span></h2>
				<h2 class="h2-tag"><span style="color: darkgray">Service detail:</span></h2>
				@foreach($services as $service)
					<h4>{{ $service->name }}:</h4>
					<p class="p-tag"> {{ $service->description }}</p>	
				@endforeach
				<h2 class="h2-tag"><span style="color: darkgray">Garage: </span><span class="detail">{{ $garage->address }}</span></h2>
				<h2 class="h2-tag"><span style="color: darkgray">Date: </span><span class="detail">{{ $date }}</span></h2>
				<h2 class="h2-tag"><span style="color: darkgray">Time: </span><span class="detail">{{ $time }}</span></h2>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="{{ route('garage.booking', ['car_id' => $car->id, 'car_model_id' => $car_model->id]) }}" method="GET" autocomplete="off">
					{{ csrf_field() }}
					<h3 class="head">ACCOUNT USER</h3>
					<p class="urna">Do you already have account?</p>
					<h5>If you have an account, just enter your email and password.</h5>
					<div class="test">
						<p>User Name</p>
						<input type="text" name="username" class="input-tag" autocomplete="false">
					</div>
					<div class="test">
						<p>Full Name</p>
						<input type="text" name="fullname" class="input-tag">
					</div>
					<div class="test">
						<p>Address</p>
						<input type="text" name="address" class="input-tag"><br>
					</div>
					<div class="test">
						<p>Phone</p>
						<input type="text" name="phone" class="input-tag"><br>
					</div>
					<div class="test">
						<p>Email</p>
						<input type="text" name="email" class="input-tag" required=""><br>
					</div>
					<div class="test">
						<p>Password</p>
						<input type="password" name="password" class="input-tag" autocomplete="new-password" required=""><br>
					</div>
					    <input type="submit" name="" value="next" class="submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- container -->
<style type="text/css">
	.input-tag {
		width: 250px !important;
		padding: 7px !important;
		border-radius: 3px !important;
	}
	.submit {
		outline: none;
	    border: 1px solid #fc5a0a;
	    color: #fff;
	    font-size: 15px;
	    padding: 10px 15px !important;
	    width: 20% !important;
	    background: #fc5a0a;
	    margin-top: 0.8em !important;
	    border-radius: 3px;
	}
	.submit:hover {
		background: #3f51b5;
	    border: 1px solid #3f51b5;
	    color: #fff;
	}
	.w3agile_newsletter_right {
		margin: 0px !important;
	}
	.newsletter {
	    padding: 2.5em 0 7em 0;
	}
	.car-detail {
		color: brown;
		padding-bottom: 15px;
	}
	.detail {
		font-size: 20px;
   		color: darkorange;
	}
	.test {
		float: left;
		margin-left: 20px; 
	}
	.p-tag {
	    margin: 0.5em 1.5em !important;
	    color: #c15656 !important;
	}
	.h2-tag {
		margin: 6px 0px;
	}
</style>
@endsection