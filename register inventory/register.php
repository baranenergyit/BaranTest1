<?php
include('../connection.php');
				$divisi=$_POST['divisi'];
   			$kategori=$_POST['kategori'];
   					$nama=$_POST['nama'];
		 $keterangan=$_POST['keterangan'];
					$size=$_POST['size']; 
				  $warna=$_POST['warna'];
				  $berat=$_POST['berat'];
				$jumlah=$_POST['jumlah'];
				$satuan=$_POST['satuan'];
				  $harga=$_POST['harga'];
			$supplier=$_POST['supplier'];            


	if(isset($_POST['submit'])){
/*		$name       = $_FILES['fileToUpload']['name'];  
		$temp_name  = $_FILES['fileToUpload']['tmp_name'];
		
		if(isset($name)){
			if(!empty($name)){       
				$location = '/var/www/html/file/';      
				if(move_uploaded_file($temp_name, $location.$name)){
						     $con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
					 		 $filename = $name;*/
							  $sql = "INSERT INTO inventory_list (divisi, kategori_barang, nama_barang, keterangan, size, warna, berat, jumlah_barang, satuan, harga_barang, supplier)
							  		VALUES ('$divisi', '$kategori', '$nama','$keterangan','$size','$warna','$berat','$jumlah','$satuan','$harga','$supplier')";
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

