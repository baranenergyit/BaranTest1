<?php 
include ('../connection.php');
 if(isset($_POST['submit'])){
    $name       = $_FILES['fileToUpload']['name'];  
    $temp_name  = $_FILES['fileToUpload']['tmp_name'];
    $id         = $_POST['id'];

    $con    = mysqli_connect($dbServername, 
                         $dbUsername, 
                         $dbPassword, 
                         $dbName);
                         $sql = "SELECT * FROM customer_list
                                  WHERE customerlist_id = $id";
    $result  = mysqli_query ($con, $sql);
    $row1  = mysqli_fetch_array($result);  
    if(isset($name)){
        if(!empty($name)){       
            $location = '/var/www/html/file/final/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                // echo 'File uploaded successfully  |  '; 
                // echo $temp_name; echo ' |  ';
                // echo $location ; echo ' |  ';
                // echo $name ;     echo ' |  ';
                // echo $id ;       echo ' |  ';
                
                 

                 $sql = "UPDATE customer_list SET filesnames_final='$name' WHERE customerlist_id=$id";
                 
                 if ($row1['status'] == 'On Process')
                {
                    $sql = "UPDATE customer_list SET status='Done', upload_ts = CURRENT_TIME()  WHERE customerlist_id=$id";
                if(mysqli_query($con, $sql)){
                    var_dump($sql); 
                    echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>"; 
                         ?> <meta http-equiv="refresh" content="1;url=../se/"> <?PHP 
                }
                else{
                    echo "not recorded";  
                }
                }
                else 
                {
                    if(mysqli_query($con, $sql))
                    { 
                        var_dump($sql); 
                        echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>"; 
                        ?> <meta http-equiv="refresh" content="10;url=../se/pilihcustomer.php"> <?PHP 
                        header("Location: ../se/"); 
                    }
                    else
                    {
                        var_dump($sql); 
                        echo "not recorded";
                        echo "<script type='text/javascript'>alert('Not Submitted!')</script>"; 
                        ?> <meta http-equiv="refresh" content="10;url=../se/"> <?PHP 
                    }
                }
            } 
        }       
    }  else {
        echo 'You should select a file to upload    !!';
        echo "<script type='text/javascript'>alert('You should select a file to upload    !!')</script>"; 
    }
}

?>
