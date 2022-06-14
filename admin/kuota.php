<?php
include("../koneksi.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="fontawesome/css/all.min.css"> -->
    <script text="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/8044e957e9.js" crossorigin="anonymous"></script>

    <title>admin dashboard</title>
  </head>

  <style>
      .nav-link:hover {
          background-color: grey;
      }
      .display-4{
          font-weight: bold;
      }
      .card-body-icon{
          position: absolute;
          z-index: 0;
          top: 25px;
          right: 4px;
          opacity: 0.4;
          font-size: 90px;
      }
  </style>

  <body>
      <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Selamat Datang Admin|<b>Rs. Anwar Medika</b></a>
    </div>
  </div>
</nav>
<!-- end navbar -->

<!-- daftar isi -->
<div class="row no-gutters mt-5">
    <div class="bg-dark mt-2 pr-3 pt-4 col-md-2">
        <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="dashboard.php"><i class="fa-solid fa-gauge-high"></i>  Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="kamar.php"><i class="fa-solid fa-bed"></i>   Data Kamar Pasien</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="kuota.php"><i class="fa-solid fa-database"></i>  Data Kuota Kamar</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>  Sign Out</a><hr class="bg-secondary">
                </li>
            </ul>
        </nav>
    </div>

    <!-- dashboard content -->
    <div class="col-md-10 p-4">
      <h3><i class="fa-solid fa-database"></i>  Kuota Kamar<hr></h3>

      <div class="container-fluid">
          <div class="container">
          <table id="tab-kamar" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Tipe Kamar</th>
                <th scope="col">Kuota Kamar</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php 
                $no = 1;
                $sql = "SELECT * FROM kamar";
                $query = mysqli_query($conf, $sql);
                while($kamar = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                  <td><?= $kamar['nama_kamar'] ?></td>
                  <td><?= $kamar['kuota_kamar'] ?></td>
                  <td>
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        edit
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Kuota Kamar</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="edit_kamar.php" method="POST">
                              <div class="modal-body">
                                <input type="hidden" name="id" value="<?php echo $kamar['id_kamar'] ?>" />
                                <div class="mb-3">
                                  <label for="kuotakamar" class="form-label">Kuota Kamar</label>
                                  <input type="number" class="form-control" id="kuotakamar" name="kuota" value="<?php echo $kamar['kuota_kamar']?>">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End Modal -->
                  </td>
                </tr>
                <?php $no=$no+1; } ?>
            </tbody>
            </table>
          </div>
      </div>
      
    </div>
    
</div>
<!-- end daftar isi -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script src="./js/custom.js"></script>
  </body>
</html>