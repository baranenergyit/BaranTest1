<?php
include('includes/dbh.inc.php');

	  $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);



	$sql= "SELECT * FROM dt_client WHERE email = '$email' and password = '$password'";
	echo $sql;
	$result = mysqli_query($con, $sql);
	$asdf = mysqli_fetch_array($result);
	
	
		if($_POST['email'] == $email && $_POST['password'] == $password){
			?>
		<meta http-equiv="refresh" content="0; url=/baran/dashboard/" />
			<?PHP
			
		}
else{
	?>
<meta http-equiv="refresh" content="0; url=/baran/login" />
<?PHP
	
}	
	
exit;
?>