<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script text="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Pemesanan Kamar Pasien</title>
</head>

<style>
    .nav-link:hover {
      background-color: purple;
    }
    .banner {
        height:80vh;
        background:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('image/bg1.jpg');
        background-size:cover;
        background-position:center;
    }
    .banner-content{
        height:100%;
        color:white;
        display: flex;
        justify-content:center;
        align-items:center;
    }
</style>
<body id="page-top">
    <!--  navbar -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: slateblue">
  <div class="container-fluid">
    <span class="navbar-brand" href="#">RS. Anwar Medika</span>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item mx-2">
          <a class="nav-link" aria-current="page" href="#banner">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#profile">Profile</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#pesan_kamar">Pesan kamar</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!--end navbar-->
    
    <!--banner-->
    <div class="container-fluid banner" id="banner">
        <div class="container banner-content col-lg-6">
            <div class="text-center">
                <p class="fs-1">
                    Selamat Datang di RS. Anwar Medika
                </p>
                <p class="d-none d-sm-block">
                    Pada website ini pasien dapat memesan kamar yang telah disediakan oleh pihak Rumah Sakit. Tentukan pilihan anda dan semoga lekas sembuh
                </p>
            </div>
        </div>
    </div>
    <!--end banner-->

    <!--profile rs-->
    <div class="my-5 container" id="profile">
        <h2 class="text-center mb-5">Profile RS. Anwar Medika</h2>
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Apa itu RS Anwar Medika?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi porro ut odio, ratione sapiente iure labore sit eum? Voluptates assumenda soluta pariatur laudantium ex ratione facilis, optio minima commodi eaque laborum, qui consectetur odio aut explicabo voluptatibus. Commodi accusamus, provident minus quam fugiat iure voluptas! Incidunt vero nam culpa laudantium.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Apa sih Fasilitas di Rs. Anwar Medika?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. In eaque nesciunt dolores asperiores provident, veritatis quas sit nulla quis nihil. Praesentium pariatur ab eveniet facilis, temporibus distinctio eligendi eaque sunt rerum quidem soluta fugit at esse vero voluptatum quasi deleniti. Dolore magni aliquam consequuntur repellat placeat assumenda repudiandae vel illum.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Bagaimana Cara Mendaftar Kamar Pasien?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto tempora culpa porro facere, sequi laudantium dicta a animi. Alias saepe dolorum fugit. Quibusdam porro fuga in voluptatibus aut. Aliquam dignissimos rerum ea aperiam voluptas dicta quibusdam repellat tempora. Similique libero provident fugit ipsum. Possimus quam perferendis distinctio optio neque laudantium.
      </div>
    </div>
  </div>
</div>
</div>
    <!--end profile rs-->

    <!--pesan kamar-->
    <div class="container-fluid py-5" id="pesan_kamar">
        <div class="container">
            <h2 class="text-center mb-5">Daftar Kamar Rs. Anwar Medika</h2>
        <div id="carouselExampleCaptions" class="carousel slide col-lg-6 offset-lg-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/slide1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kamar Pasien VIP</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/slide2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kamar Pasien BPJS</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/slide3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kamar Pasien Covid</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <h5 class="text-center mt-5">Klik Tombol Dibawah Untuk Pesan Kamar</h5>
  <div class="center-block">
        </div>
</div>
<div class="text-center">
<a href="./tambah.php" class="btn btn-primary mt-3">Pesan kamar</a>
</div>
        </div>
    </div>
    <!--end pesan kamar-->

    <div class="container-fluid pt-5 pb-5 kontak" id="contact">
      <div class="container">
        <h2 class="display-3 text-center" id="kontak">Contact</h2>
        <p class="text-center">
          Send questions
        </p>
        <div class="row pb-3">
          <div class="col-md-6">
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Name"
            />
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Email"
            />
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="No. Phone"
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
          <button type="button" class="btn btn-danger btn-lg">
            Send
          </button>
        </div>
      </div>
    </div>

    <div class="container text-center pt-5 pb-5">
      Copyright &copy; 2022 Slamet Mochamad Yakub
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>