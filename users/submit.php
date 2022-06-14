<?php include("../koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script text="text/javascript" src="js/bootstrap.min.js"></script>
 
    <title>Halaman Submit</title>
</head>
<body>
<h3 class="text-center mt-3">Daftar Pemesan Kamar</h3>

<div class="container-fluid">
    <div class="container">
    <table class="table text-center table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">No. HP</th>
      <th scope="col">Tipe Kamar</th>
      <th scope="col">Penyakit yang diderita</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
      $sql = "SELECT reservasi.*, kamar.* FROM reservasi INNER JOIN kamar ON reservasi.id_kamar = kamar.id_kamar ORDER BY reservasi.id_reservasi";
      $query = mysqli_query($conf, $sql);
      // $reservasi = mysqli_fetch_array($query);
      // print_r($reservasi);
      while($reservasi = mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?= $no ?></td>
      <td><?= $reservasi['nama_pemesan'] ?></td>
      <td><?= $reservasi['alamat'] ?></td>
      <td><?= $reservasi['jenis_kelamin'] ?></td>
      <td><?= $reservasi['no_hp'] ?></td>
      <td><?= $reservasi['nama_kamar'] ?></td>
      <td><?= $reservasi['penyakit'] ?></td>
      <td class="d-flex">
        <a href="edit.php?id=<?= $reservasi['id_reservasi'] ?>" class="btn btn-warning me-2">edit</a>
        <a href="show.php?id=<?= $reservasi['id_reservasi'] ?>" class="btn btn-success me-2">lihat</a>
        <!-- <a href="hapus.php?id=<?= $reservasi['id_reservasi'] ?>" class="btn btn-danger">hapus</a> -->
      </td>
    </tr>
    <?php 
      $no=$no+1; } 
      ?>
    </tbody>
</table>
<a href="index.php" type="button" class="btn btn-primary">Kembali</a>
</div>
</div>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>