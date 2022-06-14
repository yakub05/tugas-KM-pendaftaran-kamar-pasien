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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script text="text/javascript" src="js/bootstrap.min.js"></script>
 
    <title>Halaman Edit</title>
</head>
<body>
<h3 class="text-center mt-3">Form Edit Data</h3>
<div class="container-fluid">
  <div class="container">
    <form method="POST" action="proses-edit.php">
      <input type="hidden" name="id" value="<?php echo $reservasi['id_reservasi'] ?>" />
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" id="nama" value="<?=$reservasi['nama_pemesan']?>">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat" value="<?=$reservasi['alamat']?>">
      </div>
      <div class="mb-3">
        <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-select" id="jenis-kelamin" name="jenis_kelamin">
          <option value="laki-laki" <?php echo ($reservasi['jenis_kelamin'] == 'laki-laki') ? "selected": "" ?>>Laki - laki</option>
          <option value="perempuan" <?php echo ($reservasi['jenis_kelamin'] == 'perempuan') ? "selected": "" ?>>Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="no-hp" class="form-label">No. Hp</label>
        <input type="text" name="no_hp" class="form-control" id="no-hp" value="<?=$reservasi['no_hp']?>">
      </div>
      <div class="mb-3">
        <label for="tipe-kamar" class="form-label">Tipe Kamar</label>
        <select class="form-select" id="tipe-kamar" name="tipe_kamar">
          <?php
            $sql = "SELECT * from kamar";
            $query = mysqli_query($conf, $sql);
            while($kamar = mysqli_fetch_array($query)){
          ?>
          <option value="<?= $kamar['id_kamar'] ?>" <?php echo ($reservasi['id_kamar'] == $kamar['id_kamar']) ? "selected": "" ?> ><?= $kamar['nama_kamar'] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="penyakit" class="form-label">Penyakit yang di Derita </label>
        <input type="text" name="penyakit" class="form-control" id="penyakit"  value="<?=$reservasi['penyakit']?>">
      </div>
      <a href="submit.php" type="button" class="btn btn-warning">Kembali</a>
      <button type="submit" name="simpan"  class="btn btn-primary">Submit</button> 
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>