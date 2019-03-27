<?php
// include database connection file
include("../connection.php");
$id = $_POST['id'];
        $nama   =$_POST['nama'];
        $alamat=$_POST['alamat'];
        $notelp=$_POST['notelp'];
        $email=$_POST['email'];
        $type=$_POST['type'];    
        $pilihan = $_POST['pilihan'];
$sql1 = "SELECT * FROM customer_list WHERE customerlist_id=$id";
$result  = mysqli_query ($con, $sql1);
$user_data  = mysqli_fetch_array($result);
// Display selected user data based on id
// Getting id from url
// Fetech user data based on id
if(isset($_POST['update']))
{   
  $sql = "    UPDATE customer_list SET 
  nama='$nama',
  alamat='$alamat',
  notelp='$notelp',
  email ='$email',
  type  ='$type' 
  WHERE customerlist_id=$id";
    mysqli_query($con,$sql);
    var_dump($sql);
    echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>"; 
    ?> <meta http-equiv="refresh" content="1;url=../marketing/"> <?PHP 
}
if(isset($_POST['submit'])){
   $id         = $_POST['id'];
    $name       = $_FILES['fileToUpload']['name'];  
    $temp_name  = $_FILES['fileToUpload']['tmp_name'];
    var_dump($id);
    if(isset($name)){
    if(!empty($name)){    
      $location = '/var/www/html/file/raw/';      
      if(move_uploaded_file($temp_name, $location.$name)){
              $filename = $name;
              $sql = "UPDATE customer_list SET filenames='$name' WHERE customerlist_id=$id";
              var_dump($sql);

        if(mysqli_query($con, $sql)){ 
             var_dump($sql);
                      echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>"; 
                      ?>  <?PHP 
                              }
                  else{
                    var_dump($sql);
                      echo "not recorded";
                      echo "<script type='text/javascript'>alert('Not Submitted!')</script>"; 
                      ?>  <?PHP 
                      }
                                                          }
                      }
                    }                   
                              }
// Check if form is submitted for user update, then redirect to homepage after update
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>
<link rel="stylesheet" href="../style2.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->

 <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">

                      <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
<!--             <li class="nav-item active">
              <a class="nav-link" href="../register customer/register.html">Register Customer <span class="sr-only"></span></a>
            </li> -->
<!--              <li class="nav-item active">
              <a class="nav-link" href="../marketing/pilihcustomer.php">Pilih Customer<span class="sr-only">(current)</span></a>
            </li> -->

            <li class="nav-item text-nowrap">
          <a class="nav-link" href="../login/logout.php">Sign out</a>
        </li>
          </ul>
  <ul class=" nav-tabs--vertical nav" role="navigation">
    <li class="nav-item active">

            </li>
        <!-- <li class="nav-item">
           <a href="#lorem" class="nav-link active" data-toggle="tab" role="tab" aria-controls="lorem">Customer List</a>
        </li> -->
    </ul>
  </li>
</ul>
        </div>
      </nav>
    </header>
<!--         <li class="nav-item">
            <a href="../detail.php" class="nav-link" data-toggle="tab" role="tab" aria-controls="sit-amet">Home</a>
        </li> -->
       </ul>
         </div>
        <div class="right_bar ">
          <div class="tab-content ">
              <div class="tab-pane fade show active" id="lorem" role="tabpanel">
                
<body>
    <a href="index.php">Home</a>
    <br><br><br>
    <center>
    <form action ="" method="POST">
              Pilih yang ingin di edit : 
              
  <select name="pilihan">
	<option>--- Pilihan ---</option>
  
			<option value="1">Edit Detail Customer</option>;
      <option value="2">Edit File</option>;
	
</select>
<input type="hidden" name="id" value="<?php echo $user_data['customerlist_id']?>">
<input type="submit" name="ab" value="Submit" >
</form>
</center>
<?php

if($pilihan == '1'){
      ?>
        <form action="" method="POST" enctype="multipart/form-data">
                <center>
            <div class="form-group" >
                
                <label for="nama">Nama</label>
                <input class="form-control col-lg-4" type="text" name="nama" placeholder="<?php echo $user_data['nama'];?>" />
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input class="form-control col-lg-4" type="text" name="alamat" placeholder="<?php echo $user_data['alamat']?>" />
            </div>

            <div class="form-group">
                <label for="notelp">Nomor Telepon</label>
                <input class="form-control col-lg-4" type="telephone" name="notelp" placeholder="<?php echo $user_data['notelp'];?>" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control col-lg-4" type="email" name="email" placeholder="<?php echo $user_data['email'];?>" />
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-control col-lg-4" type="type" name="type" placeholder="<?php echo $user_data['type'];?>" />
            </div>
            <input type="hidden" name="id" value="<?php echo $_POST['id']?>">
                   <td><input type="submit" name="update" value="Update"></td>   
                </form>
            </center>
    <?php }
else if($pilihan == '2'){
  ?>
      <div class ="container" align="center">
      <div >
          <H1>Upload New File</H1>
          <div class="container">
        <?php
          $done = "SELECT * FROM customer_list WHERE customerlist_id = '$id'";
          function addition(){
            $GLOBALS['z'] = '$id';
                }
            $result = mysqli_query($con, $done);
            $row1  = mysqli_fetch_array($result);
        ?>
  <table class="table table-bordered">
    <thead>
      <tr>
            <td bgcolor="#44AAFF";><b>Customer ID </b></td>
            <td bgcolor="#AAAAAA";><b><?php echo $row1['customerlist_id'] ?></b></td>
           </tr>
            <tr>
            <td bgcolor="#44AAFF";><b>Name         </b></td>
            <td bgcolor="#AAAAAA";><b><?php echo $row1['nama'] ?></b></td>
           </tr>
            <tr>
            <td bgcolor="#44AAFF";><b>Address      </b></td>
            <td bgcolor="#AAAAAA";><b><?php echo $row1['alamat'] ?></ ></td>
           </tr>
           <tr>
            <td bgcolor="#44AAFF";><b>Phone        </b></td>
            <td bgcolor="#AAAAAA";><b><?php echo $row1['notelp'] ?></b></td>
                </tr>
                <tr>
                <td bgcolor="#44AAFF";><b>Email             </b></td>
                <td bgcolor="#AAAAAA";><b><?php echo $row1['email'] ?></b></td>
                </tr>
                <tr>
                <td bgcolor="#44AAFF";><b>Customer Type     </b></td>
                <td bgcolor="#AAAAAA";><b><?php echo $row1['type'] ?></b></td>
                </tr>
    </tbody>
  </table> 
             <form action="" method="POST" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?php echo $user_data['customerlist_id']?>">
                  <input type="file" name="fileToUpload" />
                  <input type="submit" name="submit" />
                  <br>
              </form> <!-- </center> -->
      </div>
 </div>
 <?php
        
     
       }
    ?>
    </body>
</html>
<?php

