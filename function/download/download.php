<?php
include ('../connection.php');
$id         = $_POST['id']; 
$con    = mysqli_connect($dbServername, 
                         $dbUsername, 
                         $dbPassword, 
                         $dbName);
                         $sql = "SELECT * FROM customer_list
                                  WHERE customerlist_id = $id";
$result  = mysqli_query ($con, $sql);
$row1  = mysqli_fetch_array($result);
$a = $row1['filenames'];
$fileName = basename($a);
$filePath = '/var/file/raw/'.$fileName;
if(!empty($fileName) && file_exists($filePath)){
    // Define headers
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$fileName");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    
    // Read the file
    readfile($filePath);
    exit;
    }
else{
    echo 'The file does not exist.';
    echo $fileName; 
    echo $filePath; 
}

?>