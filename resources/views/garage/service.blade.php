@extends('templates.garage.master')
@section('content')
<div class="team" id ="team">
	<div class="container">
		<h2 class="car-detail">Your car: {{ $car->name }} -  {{ $car_model->name }}</h2>
		<h3 class="head">CHOOSE OUR SERVICE</h3>
		<p class="urna">You choose car and model to book our service.</p>
		<form action="{{ route('garage.choiseGarage', ['car_id' => $car->id, 'car_model_id' => $car_model->id]) }}" method="GET">
		{{ csrf_field() }}
		<table class="table">
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Choose</th>
			</tr>
			@foreach($services as $service)
			<tr>
				<td>{{ $service->name }}</td>
				<td>{{ $service->description }}</td>
				<td><input type="checkbox" name="{{ $service->id }}"></td>
			</tr>
			@endforeach
		</table><br>
		<input type="submit" name="" value="next" class="submit">
		</form>
	</div>
</div>
<style type="text/css">
	.table tr th {
		text-align: center;
	}
	.submit {
		outline: none;
	    border: 1px solid #fc5a0a;
	    color: #fff;
	    font-size: 15px;
	    padding: 10px 15px;
	    width: 90px;
	    background: #fc5a0a;
	    margin-top: 1em;
	    border-radius: 3px;
	}
	.submit:hover {
		background: #3f51b5;
	    border: 1px solid #3f51b5;
	    color: #fff;
	}
	.car-detail {
		color: brown;
		padding-bottom: 15px;
	}
	.team {
		padding: 3em 0 !important;
	}
</style>
@endsection