<center>
<?php
include ('../connection.php');
$id     = $_POST['id']; 
$con    = mysqli_connect($dbServername, 
                         $dbUsername, 
                         $dbPassword, 
                         $dbName);
                         $sql = "SELECT * FROM customer_list
                                  WHERE customerlist_id = $id";
$result  = mysqli_query ($con, $sql);
$row1  = mysqli_fetch_array($result);
// $a = $row1['filenames'];
// $fileName = basename($a);
// $filePath = '/var/www/html/file/raw/'.$fileName;
    ?>
    <meta http-equiv='refresh' content='0; URL=../file/raw/<?php echo $row1['filenames'] ?>'> 
<html>
<body>
    <br><br><br><br>
<form id='the-form' 
      method='post' 
      enctype='multipart/form-data' 
      action='../se/detail.php'
      >
<input type='hidden' name='customer' value='<?php echo $id ?>'>
<p id="the-button" style="display">
Click the button if page doesn't redirect within 3 seconds.
<br>
<br><input type="submit" value="Click this button">
</p>
</form>
</body>
</html>
<?php
    if ($row1['status'] == 'Pending'){
        $sql = "UPDATE customer_list SET status='On Process' , download_ts = CURRENT_TIME() WHERE customerlist_id=$id";
        echo "Status Updated"; 
    if(mysqli_query($con, $sql)){ 
        echo "Recorded"; 
    }
    else{
        echo "not recorded";   
    }
    }
    else {
    if(mysqli_query($con, $sql)){ 
        echo "Recorded But, Not Updated"; 
    }
    else{
        echo "Not Recorded, Not Updated";   
    }
    }
?>
</center>