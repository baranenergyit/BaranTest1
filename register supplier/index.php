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
              <a class="nav-link" href="../engineering/">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="../register supplier/">Register Supplier <span class="sr-only"></span></a>
            </li>
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
        		<H1>Register New Customer</H1>
        			 <form action="register.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group" align="center">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama" />
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input class="form-control" type="text" name="alamat" placeholder="Alamat" />
                    </div>

                    <div class="form-group">
                        <label for="notelp">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
                    </div>

                    <div class="form-group">
                        <label for="email">No Telp</label>
                        <input class="form-control" type="telephone " name="notelp" placeholder="Nomor Telepon" />
                    </div>
                    <div class="form-group">
                        <label for="type">Jenis Barang</label>
                        <input class="form-control" type="type" name="jenis_barang" placeholder="Jenis Barang" />
                    </div>
                    <!-- <input type="file" name="fileToUpload" /> -->
                    <input type="submit" name="submit" />    
                </form> <!-- </center> -->
        </div>
</div>
</body>
</html>
  <?php } ?>