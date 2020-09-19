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
        $date =  $_POST['date'];

$sql = "INSERT INTO colleges (name,lng,lat,description,Date) VALUES ('$name', '$lng','$lat','$message','$date')";

if (!mysqli_query($con,$sql)) {
  echo "not inserted";
} else{
  echo "Inserted";
}

header( 'Location: index.php' ) ;

?>
        





