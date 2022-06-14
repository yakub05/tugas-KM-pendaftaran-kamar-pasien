<?php 
 
 include("../koneksi.php");
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location:login.php");
}
 
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    echo $_POST['register'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO `user` (`username`, `nama`, `role`, `password`)
    VALUES ('$username', '$name', '$role', '$password')";
    $result = mysqli_query($conf, $sql);
    echo $result;
    if ($result) {
        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
        echo $_POST['register'];
        header("Location:login.php");
    } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }
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
    <link rel="stylesheet" href="style.css">
    <script text="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Halaman Login</title>
</head>
<body>
<div class="form-body">
        <div class="row">
            <div class="form-holder mt-1">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Form Registrasi</h3>
                        <p>Silahkan Registrasi Data Anda</p>
                        <form method="post" action="">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" required>
                               <!-- <div class="valid-feedback">Nama lengkap sudah valid!</div>
                               <div class="invalid-feedback">Harus diisi !</div> -->
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="Username" required>
                                 <!-- <div class="valid-feedback">Username sudah valid!</div>
                                 <div class="invalid-feedback">Harus Diisi!</div> -->
                            </div>

                           <div class="col-md-12">
                                <select name="role" class="form-select mt-3" required>
                                      <option selected disabled value="">Role</option>
                                      <option  value="admin">Admin</option>
                                      <option  value="user">Users</option>
                               </select>
                                <!-- <div class="valid-feedback">posisi anda sudah direkam !</div>
                                <div class="invalid-feedback">tolong isi role anda !</div> -->
                           </div>


                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>
                               <!-- <div class="valid-feedback">Password field is valid!</div>
                               <div class="invalid-feedback">Harus diisi ! </div> -->
                           </div>

                        <div class="form-check mt-2">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">Konfirmasi data anda</label>
                         <!-- <div class="invalid-feedback">Tolong isi dengan lengkap data anda!</div> -->
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" name="register" type="submit" class="btn btn-primary" value="register">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="script.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>