<?php
include('../koneksi.php');
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
  <title>Reservasi Kamar</title>
</head>
<style>
  h3{
    font-family: 'Roboto Slab', serif;
  }
  /* .table{
    border: solid 1px white;
    background-color: #8479E1;
    color: white;
  } */
</style>

<body>
  <!--Tabel Kuota Kamar -->

<h3 class="text-center mt-5">Tabel Kuota Kamar Pasien</h3>
<div class="container-fluid py-5">
  <div class="container">
<table class="table text-center table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tipe Kamar</th>
      <th scope="col">Kuota Kamar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    $sql='select * from kamar';
    $query = mysqli_query($conf, $sql);
    while ($kamar1 = mysqli_fetch_array($query)){
    ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?= $kamar1['nama_kamar'] ?></td>
      <td><?= $kamar1['kuota_kamar'] ?></td>
    </tr>
    <?php $no=$no+1; }?>
    
  </tbody>
</table>
</div>
</div>
<!--end tabel kuota-->

<!--form reservasi-->

<h3 class="text-center mt-3">Form Reservasi</h3>
<div class="container-fluid">
  <div class="container">
    <form method="post" action="pendaftaran.php">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" name="name" class="form-control" id="nama">
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat">
        </div>

        <div class="mb-3">
          <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
          <select name="jenis-kelamin" class="form-select" id="jenis-kelamin">
          <option value="laki-laki">Laki - laki</option>
          <option value="perempuan">Perempuan</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="nohp" class="form-label">No. Hp</label>
          <input type="text" name="nohp" class="form-control" id="alamat">
        </div>

        <div class="mb-3">
          <label for="tipe-kamar" class="form-label">Tipe Kamar</label>
          <select name="tipekamar" class="form-select" id="tipe-kamar">
          <?php
          $sql='select * from kamar';
          $query = mysqli_query($conf, $sql);
          while ($kamar = mysqli_fetch_array($query)){
          ?>
          <option value="<?=$kamar['id_kamar']?>"><?=$kamar['nama_kamar']?></option>
          <?php
          }
          ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="penyakit" class="form-label">Penyakit yang di Derita </label>
          <input type="text" name="penyakit" class="form-control" id="penyakit">
        </div>

        <a href="index.php" type="button" class="btn btn-warning">Kembali</a>
        <button type="submit" name="submit"  class="btn btn-primary">Submit</button> 
        </form>
  </div>
</div>
<!--end form reservasi-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>