<?php
include('../connection.php');
		$nama=$_POST['nama'];
   	$alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];
		$email=$_POST['email'];
		$jenis_barang=$_POST['jenis_barang'];  


	if(isset($_POST['submit'])){
/*		$name       = $_FILES['fileToUpload']['name'];  
		$temp_name  = $_FILES['fileToUpload']['tmp_name'];
		
		if(isset($name)){
			if(!empty($name)){       
				$location = '/var/www/html/file/';      
				if(move_uploaded_file($temp_name, $location.$name)){
						     $con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
					 		 $filename = $name;*/
							  $sql = "INSERT INTO supplier_list (nama, alamat, email, telp, jenis_barang)
							  VALUES ('$nama', '$alamat', '$email','$notelp','$jenis_barang')";
							if (mysqli_query($con, $sql)) {
								echo "New record created successfully";
								header("Location: ../engineering/index.php");
								} 
							else {
								echo "<br> Error: <" . $sql . "<br>" . mysqli_error($con);
							}	
			} 
			 else {
			echo 'You should select a file to upload    !!';
}
?>

