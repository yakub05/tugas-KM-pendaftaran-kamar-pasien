<?php 
  include("../koneksi.php"); 

  // kalau tidak ada id di query string
  if( !isset($_GET['id']) ){
    header('Location: index.php');
  }

  //ambil id dari query string
  $id = $_GET['id'];

  // buat query untuk ambil data dari database
  $sql = "SELECT reservasi.*, kamar.* FROM reservasi INNER JOIN kamar ON reservasi.id_kamar = kamar.id_kamar where id_reservasi = $id";
  $query = mysqli_query($conf, $sql);
  $reservasi = mysqli_fetch_assoc($query);

  // jika data yang di-edit tidak ditemukan
  if( mysqli_num_rows($query) < 1 ){
      die("data tidak ditemukan...");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script text="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <h3 class="text-center mt-5">Bukti Pendaftaran</h3>
            <div class="w-100 d-flex justify-content-center mt-3">
                <div class="card w-25">
                    <div class="card-body">
                        <p>nama : <?= $reservasi['nama_pemesan']?></p>
                        <p>alamat : <?= $reservasi['alamat']?></p>
                        <p>jenis kelamin : <?= $reservasi['jenis_kelamin']?></p>
                        <p>No. HP : <?= $reservasi['no_hp']?></p>
                        <p>Tipe Kamar : <?= $reservasi['nama_kamar']?></p>
                        <p>Penyakit : <?= $reservasi['penyakit']?></p>
                    </div>
                    <a href="index.php" type="button" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>