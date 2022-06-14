<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){

    // ambil data dari formulir
    $nama = $_POST['name'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis-kelamin'];
    $nohp = $_POST['nohp'];
    $tipekamar = $_POST['tipekamar'];
    $penyakit = $_POST['penyakit'];

    // buat query
    $sql = "INSERT INTO reservasi (nama_pemesan, alamat, jenis_kelamin, no_hp, id_kamar, penyakit) VALUE ('$nama', '$alamat', '$jk', '$nohp', '$tipekamar', '$penyakit')";
    $query = mysqli_query($conf, $sql);

    // buat query
    $sql1 = "UPDATE kamar SET kuota_kamar=kuota_kamar-1 where id_kamar= $tipekamar";
    $query1 = mysqli_query($conf, $sql1);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: submit.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: tambah.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>