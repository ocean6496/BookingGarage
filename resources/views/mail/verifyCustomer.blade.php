<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="https://drive.google.com/uc?id=1dupSDEmohDpYbe16kHJItNOmfdfx22Nn" width="280px" height="150px">
	<p><b style="font-size: 20px">Hello {{ $customer_name }}</b></p>
	<p style="padding-bottom: 5px">Welcome you to our system</p>
	<p>Your booking:</p>
	<p>Date:<b> {{ $date }}</b></p>
	<p>Time:<b> {{ $time }}</b></p>
	<p style="padding-bottom: 5px">Garage:<b> {{ $garage }}</b></p>
	<p style="padding-bottom: 10px">Click <b><a href="{{ $domain }}">here</a></b> to verify your account</p>
	<p>Thank for your booking</p>
	<p><i>Booking Garage System<i></p>
</body>
</html>