<center>
<?php
include ('../connection.php');
$id     = $_POST['id']; 
$sql    = mysqli_connect($dbServername, 
                         $dbUsername, 
                         $dbPassword, 
                         $dbName);
                         $sql = "SELECT * FROM customer_list
                                  WHERE customerlist_id = $id";
$result  = mysqli_query ($con, $sql);
$row1  = mysqli_fetch_array($result);
// $a = $row1['filesnames_final'];
// $fileName = basename($a);
// $filePath = '/var/www/html/file/final/'.$fileName;
?>
  <meta http-equiv='refresh' content='1; URL=../file/final/<?php echo $row1['filesnames_final'] ?>'>   
<html>
<body><br><br><br><br>
<form id='the-form' 
      method='post' 
      enctype='multipart/form-data' 
      action='../marketing/'
      >
      
<input type='hidden' name='customer' value='<?php echo $id ?>'>
<p id="the-button" style="display">
<br>
<br><input type="submit" value="Click this button to redirect">
</p>
</form>
</body>
</html>
</center>