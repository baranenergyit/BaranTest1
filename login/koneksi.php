<?php
$host = 'localhost'; // Nama hostnya
$username = 'phpmyadmin'; // Username
$password = '123'; // Password (Isi jika menggunakan password)
$database = 'baran_system'; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>