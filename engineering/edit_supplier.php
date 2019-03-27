<?php
// include database connection file
include("../connection.php");
$id = $_POST['id'];
        $nama         =$_POST['nama'];
        $alamat       =$_POST['alamat'];
        $email        =$_POST['email'];
        $telp       =$_POST['telp'];
        $jenis_barang =$_POST['jenis_barang'];    
$sql1 = "SELECT * FROM supplier_list WHERE supplier_id=$id";
$result  = mysqli_query ($con, $sql1);
$user_data  = mysqli_fetch_array($result);
// Display selected user data based on id
// Getting id from url
// Fetech user data based on id
if(isset($_POST['update']))
{   
  $sql = "    UPDATE supplier_list SET 
  nama     ='$nama',
  alamat   ='$alamat',
  telp     ='$telp',
  email    ='$email',
  jenis_barang     ='$jenis_barang' 
  WHERE supplier_id=$id";
    mysqli_query($con,$sql);
    var_dump($sql);
    echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>"; 
    ?> <meta http-equiv="refresh" content="1;url=../engineering/"> <?PHP 
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
                <label for="email">Email</label>
                <input class="form-control col-lg-4" type="email" name="email" placeholder="<?php echo $user_data['email'];?>" />
            </div>

            <div class="form-group">
                <label for="telp">Nomor Telepon</label>
                <input class="form-control col-lg-4" type="text" name="telp" placeholder="<?php echo $user_data['telp'];?>" />
            </div>

            <div class="form-group">
                <label for="jenis_barang">Jenis Barang</label>
                <input class="form-control col-lg-4" type="text" name="jenis_barang" placeholder="<?php echo $user_data['jenis_barang'];?>" />
            </div>
            <input type="hidden" name="id" value="<?php echo $user_data['supplier_id']?>">
                   <td><input type="submit" name="update" value="Update"></td>   
                </form>
            </center>
    </body>
</html>
<?php

