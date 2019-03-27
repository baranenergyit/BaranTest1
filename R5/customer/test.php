<?PHP
$dbServername = "localhost";
$dbUsername = "phpmyadmin";
$dbPassword = "123";
$dbName = "baran_system";

$con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql    = "SELECT * FROM customer_list   ORDER BY 'customerlist_id' ASC";  //customer
$customer_result  = mysqli_query ($con, $sql);
?>
   
<form>
Pilih Jurusan : 
<select name="jurusan">
	<option>--- Pilih Jurusan ---</option>
	<?php
	
		while($row1  = mysqli_fetch_array($customer_result)){
			echo '<option>'.$row1['nama'].'</option>';
		}
	
	?>
</select>
<input type="submit" name="submit" value="OK" />
</form>
</p>
</div>
