<?php 
include ('../connection.php');
$con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
 if(isset($_POST['submit'])){
    $name       = $_FILES['fileToUpload']['name'];  
    $temp_name  = $_FILES['fileToUpload']['tmp_name'];  
    if(isset($name)){
        if(!empty($name)){       
            $location = '/var/file/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully  |  '; 
                echo $temp_name; echo ' |  ';
                echo $location ; echo ' |  ';
                echo $name ;  echo ' |   ';
                 $con    = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
                 $filename = $name;
                 $sql = "INSERT INTO customer_list (filenames)
                         VALUES ('$filename_final') WHERE customerlist_id = '$id'";
                if(mysqli_query($conn, $sql)){ 
                    echo "Recorded"; 
                }
                else{
                    echo "not uploaded";
                }
                
            } 
        }       
    }  else {
        echo 'You should select a file to upload    !!';
    }
}

?>
