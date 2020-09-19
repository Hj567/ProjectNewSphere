<?php 


$servername = 'localhost'
$username = 'root'
$password = 'root'
$dbname = 'education'

$conn = mysqli_connect($servername, $username , $password , $dbname);




if(isset($_POST['submit'])){


$file = $_FILE['file'];



$filename = $file['name'];
$filetype = $file['type'];
$fileTemp = $file['tmp_name'];
$filError = $file['error'];
$filesize = $file['size'];

$fileExt = explode(".", $filename);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg', 'png');

if (in_array($fileActualExt, $allowed)) {
	if ($fileError === 0) {
		if ($filesize < 4000) {
			
			$imageFullName = $filename . "." . uniqid("", true) . "." . $fileActualExt;
			$filedestination = "/Applications/MAMP/htdocs/ProjectNewSphere/imagephp/" . $imageFullName;
			$insert = "insert into images values ('NULL', $filedestination)";

			if(mysqli_query($insert)){

				move_uploaded_file($fileTemp, $filedestination);
				echo "file has been inserted";
			}else{

				echo "yo dip shit";
			}


		}else{

			echo "The file is too big";
			exit()

		}
	}else{

		echo "You have an error";
		exit()
	}
}else{

	echo "You need to upload a proper file type!";
	exit()

}








}

?>


<!DOCTYPE html>
<html>

<body>

<form action="Gallery-upload.php" method="post" enctype="multipart/form-data">

	<input type="file" name="file">
	<input type="submit" name="submit">	




</form>



</body>
</html>