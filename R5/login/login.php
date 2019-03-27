<?php 
include ('../connection.php');
$sql    = "SELECT * FROM user ORDER BY 'user_id' ASC";  //user fetch
$user_result  = mysqli_query ($con, $sql);
$user_  = mysqli_fetch_array($user_result);
$role = $user_['divisi'];


$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($_POST['username']) 
   && !empty($_POST['password'])) {
	
   if ($username == $user_['username'] && $password == $user_['password']) 
	  {
	  $_SESSION['valid'] = true;
	  $_SESSION['timeout'] = time();
	  $_SESSION['username'] = $user_['username'];

	  if($role =='IT')
	  {
        $link = '../engineering/index.php';
        }
        elseif($role =='MKT'){
        $link = '../marketing/home.php';
        }
	  
	//   echo 'You have entered valid use name and password';
	  echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
	   header("location: ".$link."");
	    exit();
	  }
	else 
      {
/*	  echo $username;

	  echo $password;*/
	  }
}
else
{
	echo "Please Enter Something";
}
?>