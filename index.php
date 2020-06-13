<!DOCTYPE html>
<html>
<head>
	<title>Access Google Maps API in PHP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		
		.container {
			height: 100vh;
			width: 100%;
		}
		#map {
			width: 100%;
			height: 100%;
			
		}
		#data, #allData {
			display: none;
		}

		.portWindow{

			height: 100%;
			width: 100%;
			z-index: 10000;
			background-color: #FFFFFF;
			opacity: 0.7;
			position: absolute;
			display: none;
		}

		.portWindow img{

			position: absolute;
			top: 35%;
			left: 30%;
			transform: translateX(-35%,-50%);
		}

.returnButton{

	color: #FFFFFF;
	padding: 45px;
	font-family: Yuanti SC;
	font-size: 16px;
	background-color: #343434;
	padding: 15px 20px 15px 20px; 
	border-radius: 100px;
	border:none;
	position: absolute;
	z-index: 1;
	top: 50px;
	left: 50px;
	outline: none;
	
}

@media (orientation: portrait) {
  .portWindow {
    display:block;
  }



  .returnButton{
z-index: -1;
  }
}





	</style>
</head>
<body>

	<a href="index.html"><button class="returnButton">Home</button></a>

<div class="portWindow">
	
<img src="Group 12.png">




</div>

	<div class="container">
		<?php 
			require 'education.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		<div id="map"></div>
	</div>
</body>


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw7sElpqjqOXkE9CRXDQyv9BpK4Leu4cI&callback=loadMap">
</script>
</html>