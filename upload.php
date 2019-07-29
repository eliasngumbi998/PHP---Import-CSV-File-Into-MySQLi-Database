<?php
	require 'conn.php';
 
	if(ISSET($_POST['upload'])){
		if($_FILES['file']['name']){
			$filename = explode(".", $_FILES['file']['name']);
			$ext=end($filename);
 
			if($ext=="csv"){
				$handler=fopen($_FILES['file']['tmp_name'], "r");
				while($data=fgetcsv($handler)){
					mysqli_query($conn, "INSERT INTO `member` VALUES('', '$data[0]', '$data[1]')") or die(mysqli_error());
				}
 
				header('location: index.php');
			}else{
				echo"<script>alert('Only csv file is allowed to be upload!')</script>";
				echo"<script>window.location='index.php'</script>";
			}	
		}
	}
?>
