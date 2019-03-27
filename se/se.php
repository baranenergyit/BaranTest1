<?php

if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
    header("location: ../login/index.php");
  }
  if($_SESSION['divisi'] =='SE'){
?>