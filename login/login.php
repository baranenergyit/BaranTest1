<?php
session_start(); // Start session nya
include "koneksi.php"; // Load file koneksi.php
$username = $_POST['username']; // Ambil value username yang dikirim dari form
$password = $_POST['password']; // Ambil value password yang dikirim dari form
/*$password = md5($password);*/ // Kita enkripsi (encrypt) password tadi dengan md5
// Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
$sql = $pdo->prepare("SELECT * FROM user WHERE username=:a AND password=:b");
$sql->bindParam(':a', $username);
$sql->bindParam(':b', $password);
$sql->execute(); // Eksekusi querynya
$data = $sql->fetch(); // Ambil datanya dari hasil query tadi
// Cek apakah variabel $data ada datanya atau tidak
if( ! empty($data)){ // Jika tidak sama dengan empty (kosong)
  $_SESSION['username'] = $data['username']; // Set session untuk username (simpan username di session)
/*  $_SESSION['nama'] = $data['nama'];*/ // Set session untuk nama (simpan nama di session)
  $_SESSION['divisi'] = $data['divisi'];
  setcookie("message","delete",time()-1); // Kita delete cookie message
  // var_dump($_SESSION);
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
  }
/*  header("location: location: ../marketing/");*/ // Kita redirect ke halaman welcome.php
}else{ // Jika $data nya kosong
  // Buat sebuah cookie untuk menampung data pesan kesalahan
  ?> <center> <?php
  setcookie("message", "Maaf, Username atau Password salah", time()+3600);
  // var_dump($_SESSION);
  header("location: index.php"); // Redirect kembali ke halaman index.php
  ?></center> <?php
}
// var_dump($_SESSION);
?>