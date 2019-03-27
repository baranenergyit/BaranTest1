<?php
include('../connection.php');
		$nama=$_POST['nama'];
   	$alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
		$email=$_POST['email'];
		$type=$_POST['type'];  


	if(isset($_POST['submit'])){
		$name       = $_FILES['fileToUpload']['name'];  
		$temp_name  = $_FILES['fileToUpload']['tmp_name'];
		
		if(isset($name)){
			if(!empty($name)){       
				$location = '/var/www/html/file/';      
				if(move_uploaded_file($temp_name, $location.$name)){
						     $con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
					 		 $filename = $name;
							  $sql = "INSERT INTO customer_list (nama, email, alamat, notelp, type, filenames)
							  VALUES ('$nama', '$email', '$alamat','$notelp','$type','$filename')";
							if (mysqli_query($con, $sql)) {
								echo "New record created successfully";
								header("Location: ../customer/index.php");
								} 
							else {
								echo "<br> Error: <" . $sql . "<br>" . mysqli_error($con);
							}	
			} 
			else
			{
				echo
			}
			}       
		}  else {
			echo 'You should select a file to upload    !!';
		}
	}
?>

