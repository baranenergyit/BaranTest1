<?php 
include ('../connection.php');
$con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$id     = $_POST['id']; 

$tmbh = $_POST['tmbh'];


$sql = "UPDATE inventory_list SET jumlah_barang = '$tmbh' WHERE inventory_id=$id";
if(mysqli_query($con, $sql)){ 
        echo "Recorded"; 

        echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>"; 
                         ?> <meta http-equiv="refresh" content="1;url=../engineering/"> <?PHP 
    }
    else{
        echo "not recorded";
        
    }
?>