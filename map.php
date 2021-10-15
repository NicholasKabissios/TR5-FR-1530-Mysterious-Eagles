<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
	<?php require_once('includes/head.php'); ?>

	<script>
		// API Key 
		let map; google.maps.Map;

	    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -27, lng: 133 },
        zoom: 4,
  });
}
		
	</script>
</head>

<body>

	<div id="header">
		<div id="headercontent">
			<img src="images/logo.jpg" class="left" alt="Earth cartoon with foodie planet written on it" />
			<h1>Foodie Planet</h1>
			<h2>A place to share all the great food locations you enjoy!</h2>
		</div> <!-- headercontent div end -->


		<div id="login-info">

			<?php require_once('includes/login-info.php'); ?>
			
		</div> <!-- login-info div end -->

	</div> <!-- header div end -->

	<?php require_once('includes/nav.php'); ?>
	</nav>

	<div id="menubottom"></div> <!-- border between nav bar and content, very small, 2px approx -->

	<div class="content home">
		<h2>Map</h2>
		
		<div id="map" style="width: 100%; height: 600px; position: relative; overflow: hidden;">  </div>
				

				<!-- insert myMap here -->
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACWrCR8nQ6u8sIW7E0XXSpDRCoxywjXFE&callback=initMap"; defer="" ;async=""> 
				async
				</script>

	</div><br></br>

	<div id="footer">
		<div class="left">Foodie Planet</div>
		<div class="right">Mysterious Eagles BITS</div>
	</div> <!-- footer div end-->

</body>

</html>
