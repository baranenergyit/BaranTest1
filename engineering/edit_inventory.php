<?php
// include database connection file
include("../connection.php");
$id = $_POST['id'];
        $divisi             =$_POST['divisi'];
        $kategori_barang    =$_POST['kategori_barang'];
        $nama_barang        =$_POST['nama_barang'];
        $keterangan         =$_POST['keterangan'];
        $size               =$_POST['size']; 
        $warna              =$_POST['warna'];    
        $berat              =$_POST['berat'];  
        $jumlah_barang      =$_POST['jumlah_barang'];    
        $satuan             =$_POST['satuan'];    
        $harga_barang       =$_POST['harga_barang'];
        $supplier           =$_POST['supplier'];
$sql1 = "SELECT * FROM inventory_list WHERE inventory_id=$id";
$result  = mysqli_query ($con, $sql1);
$user_data  = mysqli_fetch_array($result);
// Display selected user data based on id
// Getting id from url
// Fetech user data based on id
if(isset($_POST['update']))
{   
  $sql = "    UPDATE inventory_list SET 
  divisi            ='$divisi',
  kategori_barang   ='$kategori_barang',
  nama_barang       ='$nama_barang',
  keterangan        ='$keterangan',
  size              ='$size' ,
  warna             ='$warna',
  berat             ='$berat',
  jumlah_barang     ='$jumlah_barang',
  satuan            ='$satuan',
  harga_barang      ='$harga_barang',
  supplier          ='$supplier'
  WHERE inventory_id=$id";

    mysqli_query($con,$sql);
    var_dump($sql);
    echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>"; 
    ?> <meta http-equiv="refresh" content="100;url=../engineering/"> <?PHP 
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
                <label for="divisi">Divisi</label>
                <input class="form-control col-lg-4" type="text" name="divisi" placeholder="<?php echo $user_data['divisi'];?>" />
            </div>

            <div class="form-group">
                <label for="kategori_barang">Kategori Barang</label>
                <input class="form-control col-lg-4" type="text" name="kategori_barang" placeholder="<?php echo $user_data['kategori_barang']?>" />
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input class="form-control col-lg-4" type="text" name="nama_barang" placeholder="<?php echo $user_data['nama_barang'];?>" />
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input class="form-control col-lg-4" type="text" name="keterangan" placeholder="<?php echo $user_data['keterangan'];?>" />
            </div>

            <div class="form-group">
                <label for="size">Size</label>
                <input class="form-control col-lg-4" type="text" name="size" placeholder="<?php echo $user_data['size'];?>" />
            </div>

            <div class="form-group">
                <label for="warna">Warna</label>
                <input class="form-control col-lg-4" type="text" name="warna" placeholder="<?php echo $user_data['warna'];?>" />
            </div>

            <div class="form-group">
                <label for="berat">Berat</label>
                <input class="form-control col-lg-4" type="text" name="berat" placeholder="<?php echo $user_data['berat'];?>" />
            </div>

            <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang</label>
                <input class="form-control col-lg-4" type="text" name="jumlah_barang" placeholder="<?php echo $user_data['jumlah_barang'];?>" />

            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input class="form-control col-lg-4" type="text" name="satuan" placeholder="<?php echo $user_data['satuan'];?>" />

                                        <div class="form-group">
                <label for="harga_barang">Harga Barang</label>
                <input class="form-control col-lg-4" type="text" name="harga_barang" placeholder="<?php echo $user_data['harga_barang'];?>" />

                                        <div class="form-group">
                <label for="supplier">Supplier</label>
                <input class="form-control col-lg-4" type="text" name="supplier" placeholder="<?php echo $user_data['supplier'];?>" />
            </div>

            <input type="hidden" name="id" value="<?php echo $user_data['inventory_id']?>">
                   <td><input type="submit" name="update" value="Update"></td>   
                </form>
            </center>
    </body>
</html>
<?php

