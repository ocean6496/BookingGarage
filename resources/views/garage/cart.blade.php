<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>google map location</h1>
	<div id="map" style="height: 400px"></div>
	
<script type="text/javascript">
	function initMap() {
  // The location of Uluru
  var uluru = {lat: 16.06778, lng: 108.22083};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 14, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}


</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5g2tWf5FnYgZe6ZZGOtScYrHrcSCNtwY&callback=initMap">
</script>
</body>
</html>