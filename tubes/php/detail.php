<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

$buku = query("SELECT * FROM t_buku WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="../css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/detail.css">

  <title>Admin</title>

</head>

<body>
  <nav class="navbar fixed-top navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php"><img src="../img/logo.png"> SELFLIBRARY</a>
      <a href="#" class="nav-link text-white">DETAIL</a>
    </div>
  </nav>

  <div class="card tengah">
    <img src="../img/<?= $buku['foto']; ?>" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title"><?= $buku['judul']; ?></h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"><?= $buku['penulis']; ?></li>
      <li class="list-group-item"><?= $buku['penerbit']; ?></li>
      <li class="list-group-item"><?= $buku['tahunterbit']; ?></li>
      <li class="list-group-item">
        <?php if ($buku["kategori"] == "N") : ?>
          <a class="btn btn-info text-white">Novel</a>
        <?php else : ?>
          <a class="btn btn-danger">Komik</a>
        <?php endif; ?>
      </li>
    </ul>
    <div class="card-body">
      <a href="../index.php" class="card-link btn btn-success">Kembali</a>
    </div>
  </div>

  <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>