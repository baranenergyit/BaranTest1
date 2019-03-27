<?php

include("../connection.php");

if( isset($_POST['id']) ){

    // ambil id dari query string
    $id = $_POST['id'];

    // buat query hapus
    $sql = "DELETE FROM inventory_list WHERE inventory_id=$id";
    // $query = mysqli_query($con, $sql);

    // apakah query hapus berhasil?
    if( mysqli_query($con, $sql) )
    {
        header('Location: index.php');
    } else {
        var_dump($sql);
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>