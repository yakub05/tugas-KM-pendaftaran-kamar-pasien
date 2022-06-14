<?php

include("../koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM reservasi WHERE id_reservasi=$id";
    $query = mysqli_query($conf, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: kamar.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>