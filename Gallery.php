<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="Gallery.css">

    <meta charset="utf-8">
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes user-scalable=no"> 




<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <link rel="stylesheet"  href="animate.css">

</head>
<body>

<div class="container fadeIn animated">
	

<?php 


$dirname = "uploads/";
$images = glob($dirname."*.*");

foreach($images as $image) {
    echo '<div class="box"> <img src="'.$image.'" /></div>';
}

?>
</div>


</body>
</html>