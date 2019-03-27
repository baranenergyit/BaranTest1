<?php
include('../connection.php');
		$nama=$_POST['nama'];
   		$alamat=$_POST['alamat'];
 	    $notelp=$_POST['notelp'];
		$email=$_POST['email'];
		$type=$_POST['type'];  

        $sql = "SELECT * FROM customer_list
				WHERE customerlist_id = $id";
								  
    $result  = mysqli_query ($con, $sql);
    $row1  = mysqli_fetch_array($result);  


	if(isset($_POST['submit'])){
		$name       = $_FILES['fileToUpload']['name'];  
		$temp_name  = $_FILES['fileToUpload']['tmp_name'];
		
		if(isset($name)){
			if(!empty($name)){    
				$location = '/var/www/html/file/raw/';      
				if(move_uploaded_file($temp_name, $location.$name)){
						    
							  $filename = $name;
							  $sql = "INSERT INTO customer_list 
							  		(nama, 
							  		 email, 
							  		 alamat, 
							  		 notelp, 
							  		 type, 
							  		 filenames,
									 status)

							  VALUES ('$nama', 
							  		  '$email', 
							  		  '$alamat',
							  		  '$notelp',
							  		  '$type',
							  		  '$filename',
									  'Pending')";
						
					
		if(mysqli_query($con, $sql)){ 
			var_dump('$sql');
                        echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>"; 
                        ?> <meta http-equiv="refresh" content="1;url=../marketing/"> <?PHP 
                        
                    }
                    else{
                        echo "not recorded";
                        echo "<script type='text/javascript'>alert('Not Submitted!')</script>"; 
                        ?> <meta http-equiv="refresh" content="1;url=../marketing/"> <?PHP 
                    }
	}

}

}

}

	
?>

