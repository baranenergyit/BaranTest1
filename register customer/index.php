<?PHP

session_start();

if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../login/index.php");
}
var_dump($_SESSION);
if($_SESSION['divisi'] =='MKT'){
  
?>
<!DOCTYPE html> 
<html>
<head>
	<title></title>
<link rel="stylesheet" href="../style2.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag -->

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
              <a class="nav-link" href="../marketing/">Home <span class="sr-only"></span></a>
            </li>
            <!-- <li class="nav-item active">
              <a class="nav-link" href="../marketing/pilihcustomer.php">Pilih Customer<span class="sr-only">(current)</span></a>
            </li> -->
          </ul>
  <ul class=" nav-tabs--vertical nav" role="navigation">
    <li class="nav-item active">
            </li>
    </ul>
  </li>
</ul>
        </div>
      </nav>
    </header>
</head>
<div class ="container" align="center">
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
                        <label for="notelp">Nomor Telepon</label>
                        <input class="form-control" type="telephone" name="notelp" placeholder="Nomor Telepon" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input class="form-control" type="type" name="type" placeholder="Jenis" />
                    </div>
                    <input type="file" name="fileToUpload" />
                    <input type="submit" name="submit" />    
                </form> <!-- </center> -->
        </div>
</div>
</body>
</html>
<?php }
else
header("location: ../login/index.php");?>