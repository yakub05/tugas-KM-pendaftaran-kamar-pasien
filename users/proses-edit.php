<?php

include("../koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $nohp = $_POST['no_hp'];
    $tipekamar = $_POST['tipe_kamar'];
    $penyakit = $_POST['penyakit'];

    // buat query update
    $sql = "UPDATE reservasi SET nama_pemesan='$nama', alamat='$alamat', jenis_kelamin='$jk', no_hp='$nohp', id_kamar='$tipekamar', penyakit='$penyakit' WHERE id_reservasi=$id";
    $query = mysqli_query($conf, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: submit.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>