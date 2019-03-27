<?php
// include database connection file
include("../connection.php");


// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
            $id = $_GET['id'];
        $nama   =$_POST['nama'];
        $alamat=$_POST['alamat'];
        $notelp=$_POST['notelp'];
        $email=$_POST['email'];
        $type=$_POST['type']; 
// update user data
    $result = mysqli_query($mysqli, "UPDATE customer_list SET 
              nama='$nama',
              alamat='$alamat',
              notelp='$notelp',
              email ='$email',
              type  ='$type' 
        WHERE customerlist_id = $id");
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM customer_list WHERE customerlist_id='1'");

?>