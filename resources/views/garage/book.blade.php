@extends('templates.garage.master')
@section('content')
<div class="team" id ="team">
	<div class="container">
		<form action="{{ route('garage.service') }}" method="POST">
			{{ csrf_field() }}
			<h3 class="head">CHOOSE YOUR CAR</h3>
			<p class="urna">You choose car and model to book our service.</p>
			<label>Car</label><br>
			<select name="car" id="car" required="" class="input-lg m-bot15">
				<option value="">Please select your car brand</option>
				@foreach($cars as $car)
				<option value="{{ $car->id }}">{{ $car->name }}</option>
				@endforeach
			</select><br /><br />
			<label>Car Model</label><br>
			<select name="car_model" required="" class="input-lg m-bot15">
				<option value="">Please select your car before</option>
			</select><br /><br>
			<input type="submit" name="" value="Next" class="submit">
		</form>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#car').change(function() {
			var car_id = $(this).val(); 
			if (car_id != '') { 
				console.log(car_id);
				$.ajax({
	                url: '/get-car-model/'+car_id,
	                type:"GET",
	                dataType:"json",
	                beforeSend: function(){
	                    $('#loader').css("visibility", "visible");
	                },
	                success:function(data) {

	                    $('select[name="car_model"]').empty();

	                    $('select[name="car_model"]').append('<option value="">Please select your car model</option>');

	                    $.each(data, function(key, value){
	                        $('select[name="car_model"]').append('<option value="'+ key +'">' + value + '</option>');
	                    });
	                },
	                complete: function(){
	                    $('#loader').css("visibility", "hidden");
	                }
	            });
			} else {
				$('select[name="car_model"]').empty();

                $('select[name="car_model"]').append('<option value="">Please select your car before</option>');
			}
		});
	});
</script>
<style type="text/css">
	input, select, textarea {
		width: 300px;
		padding: 7px;
		border-radius: 3px;
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
	}
	.submit:hover {
		background: #3f51b5;
	    border: 1px solid #3f51b5;
	    color: #fff;
	}
</style>
@endsection