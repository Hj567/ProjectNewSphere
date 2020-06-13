<?php

$con = mysqli_connect("localhost", "root", "root");

if (!$con) {
  echo 'Not Connected';
}

if (!mysqli_select_db($con,'education')) {
  echo "database not selected";

}

        $name =  $_POST['name'];
        $lng =  $_POST['lng'];
        $lat =  $_POST['lat'];
        $message =  $_POST['message'];
        

$sql = "INSERT INTO colleges (name,lng,lat,description) VALUES ('$name', '$lng','$lat','$message')";

if (!mysqli_query($con,$sql)) {
  echo "not inserted";
} else{
  echo "Inserted";
}

header( 'Location: index.php' ) ;

?>
        





