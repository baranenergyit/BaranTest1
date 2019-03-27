<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['divisi'])){ // Jika session username ada berarti dia sudah login
  if ($_SESSION['divisi']== 'SE') {
  	# code...
  	// var_dump($_SESSION['username']);
  	header("location: ../se/ ");
  }
  if ($_SESSION['divisi']== 'ENG') {
  	# code...
  	// var_dump($_SESSION['username']);
  	header("location: ../engineering/ ");
  }
    if ($_SESSION['divisi']== 'MKT') {
    # code...
    // var_dump($_SESSION['username']);
    header("location: ../marketing/ ");
  } // Kita Redirect ke halaman welcome.php
}
?>
<html>
<head>
  <title>Halaman Sebelum Login</title>
  <link rel="stylesheet" type="text/css" href="../login/style.css">
</head>
<body>
  <br/>
  <br/>
  <center><h2>Baran System Login</h2></center>  
  <br/>
    <div style="color: red;margin-bottom: 15px;">
    <?php
    // Cek apakah terdapat cookie dengan nama message
    if(isset($_COOKIE["message"])){ // Jika ada
      echo $_COOKIE["message"]; // Tampilkan pesannya
      // var_dump($_SESSION['username']);
    }
    ?>
  </div>
  <div class="login">
  <br/>
    <form action="login.php" method="post" onSubmit="return validasi()">
      <div>
        <label>Username:</label>
        <input type="text" name="username" id="username" />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" name="password" id="password" />
      </div>      
      <div>
        <input type="submit" value="Login" class="tombol">
      </div>
    </form>
  </div>
</body>
</html>