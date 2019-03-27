<?PHP
session_start();
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
    header("location: ../login/index.php");
  }
  // var_dump($_SESSION);
  if($_SESSION['divisi'] =='ENG'){
?>
<!DOCTYPE html> 
<html>
<head>
	<title></title>
<link rel="stylesheet" href="../style2.css">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <link href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->

 <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<!--         <a class="navbar-brand" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/#">Fixed navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
<!--               <a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/#">Home <span class="sr-only">(current)</span></a> -->


                      <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../engineering/">Home<span class="sr-only"></span></a>
            </li>
<!--             <li class="nav-item active">
              <a class="nav-link" href="../register supplier/register.html">Register Supplier <span class="sr-only"></span></a>
            </li> -->
            <li class="nav-item active">
              <a class="nav-link" href="../engineering/pilihcustomer.php">Pilih Customer<span class="sr-only"></span></a>
            </li>
          </ul>



  <ul class=" nav-tabs--vertical nav" role="navigation">
    <li class="nav-item active">
              <!-- <a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/carousel/#">Home <span class="sr-only">(current)</span></a> -->
            </li>
    </ul>
  </li>
</ul>
       <!--    <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>
    </header>
</head>

<div class ="container" align="center"> <!-- <center> -->
    <!-- <div class="row"> -->
        <div >
        		<H1>Add New Inventory</H1>
        			 <form action="register.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group" align="center">
                        <label for="divisi">Divisi</label>
                        <input class="form-control  col-lg-4" type="text" name="divisi" placeholder="Divisi" />
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori Barang</label>
                        <input class="form-control col-lg-4" type="text" name="kategori" placeholder="Kategori Barang" />
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input class="form-control col-lg-4" type="text" name="nama" placeholder="Nama Barang" />
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input class="form-control col-lg-4" type="text " name="keterangan" placeholder="Keterangan" />
                    </div>
                    <div class="form-group">
                        <label for="size">Size</label>
                        <input class="form-control col-lg-4" type="text" name="size" placeholder="Size" />
                    </div>

                    <div class="form-group" align="center">
                        <label for="warna">Warna</label>
                        <input class="form-control col-lg-4" type="text" name="warna" placeholder="Warna" />
                    </div>

                    <div class="form-group" align="center">
                        <label for="berat">Berat</label>
                        <input class="form-control col-lg-4" type="text" name="berat" placeholder="Berat" />
                    </div>

                    <div class="form-group" align="center">
                        <label for="jumlah">Jumlah Barang</label>
                        <input class="form-control col-lg-4" type="text" name="jumlah" placeholder="Jumlah" />
                    </div>

                    <div class="form-group" align="center">
                        <label for="satuan">Satuan</label>
                        <input class="form-control col-lg-4" type="text" name="satuan" placeholder="Satuan" />
                    </div>

                    <div class="form-group" align="center">
                        <label for="harga">Harga</label>
                        <input class="form-control col-lg-4" type="text" name="harga" placeholder="Harga" />
                    </div>

                    <div class="form-group" align="center">
                        <label for="supplier">Supplier</label>
                        <input class="form-control col-lg-4" type="text" name="supplier" placeholder="Supplier" />
                    </div>
                    <!-- <input type="file" name="fileToUpload" /> -->
                    <input type="submit" name="submit" />    
                </form> <!-- </center> -->
        </div>
</div>
</body>
</html>
  <?php } ?>