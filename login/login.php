<?php
 //akses file conf database
 include('../koneksi.php');
 if (isset($_POST['login'])) {
 $user = $_POST['username'];
 $pass = $_POST['password'];
 $username = mysqli_real_escape_string($conf, $user);
 $password = mysqli_real_escape_string($conf, MD5($pass));

 //cek username dan password
 $sql="select `id`, `role` from `user`
 where `username`='$username' and `password`='$password'";
 $query = mysqli_query($conf, $sql);
 $jumlah = mysqli_num_rows($query);
 session_start();
 //get data
 while($data = mysqli_fetch_row($query)){
 $id_user = $data[0]; //1
 $level = $data[1]; //speradmin
 $_SESSION['id_user']=$id_user;
 $_SESSION['role']=$level;
 if($level=='admin'){
    header("Location:../admin/dashboard.php");
 }else{header("Location:../users/index.php");}
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
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>L O G I N</h3>
                        <p>Silahkan Anda Login </p>
                        <form  method="post" action="">

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="Username" required>
                                 <div class="valid-feedback">Username sudah valid!</div>
                                 <div class="invalid-feedback">Harus Diisi!</div>
                            </div>

                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>
                               <div class="valid-feedback">Password field is valid!</div>
                               <div class="invalid-feedback">Harus diisi ! </div>
                           </div>                  

                            <div class="form-button mt-3">
                                <button id="submit" name="login" type="submit" class="btn btn-primary" value="Submit">Login</button>
                                <a href="register.php" class="btn btn-primary">Register</a>
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