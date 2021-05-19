<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
$buku = query("SELECT * FROM t_buku");

// melakukan query
if (isset($_POST['cari'])) {
  $buku = $_POST['keyword'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">

  <title>Hello, world!</title>
</head>

<body style="background-color: #f8f9fa;">
  <nav class="navbar fixed-top navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand responlogo" href="#"><img src="img/logo.png"> SELFLIBRARY</a>
      <form class="d-flex">
        <input class="form-control me-2 keyword" name="keyword" autofocus type="search" placeholder="Search" aria-label="Search">
        <a class="btn btn-outline-light" href="php/admin.php">Admin</a>
      </form>
      <a href="php/login.php" class="d-flex btn btn-outline-light">Login</a>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide myCarousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href=""><img src="img/library1.png" class="d-block w-100" alt=""></a>
      </div>
      <div class="carousel-item">
        <a href=""><img src="img/library2.png" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item">
        <a href=""><img src="img/library3.png" class="d-block w-100" alt="..."></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <main>
    <h3 class="Mnama">Buku</h3>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php if (empty($buku)) : ?>
            <h1 style="color: red;font-style: italic; text-align: center;">data buku tidak ditemukan!</h1>
          <?php endif; ?>
          <?php foreach ($buku as $b) : ?>
            <div class="col">
              <div class="card shadow-sm">
                <img src="img/<?= $b['foto']; ?>" class="card-img-top" alt="...">

                <div class="card-body">
                  <h5 class="card-title text-center"><a href="php/detail.php?id=<?= $b['id']; ?>" class="judul"><?= $b['judul']; ?></a></h5>
                  <p class="card-text"></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <!-- <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div> -->
                    <small class="text-muted"></small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-primary text-center text-lg-start" style="margin-top: 40px;">
    <!-- Copyright -->
    <div class="text-center p-3 text-white">
      © 2021 Copyright <b><a class="text-white" style="text-decoration: none;" href="https://github.com/MFathurrohmanHaris/pw2021_203040015">Muhammad Fathurrohman Haris</a></b>
    </div>
    <!-- Copyright -->
  </footer>





  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/script.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>