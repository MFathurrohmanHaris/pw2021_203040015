<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$buku = query("SELECT * FROM t_buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="../css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" href="../css/admin.css">

  <title>Admin</title>

</head>

<body>
  <nav class="navbar fixed-top navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php"><img src="../img/logo.png"> SELFLIBRARY</a>
      <a href="logout.php" class="d-flex btn btn-outline-light">LOGOUT</a>
    </div>
  </nav>

  <a href="tambah.php" class="btn btn-success tambah">Tambah Data</a>

  <table class="table table-hover">
    <tr>
      <th>#</th>
      <th>opsi</th>
      <th>foto</th>
      <th>judul</th>
      <th>penulis</th>
      <th>penerbit</th>
      <th>tahun terbit</th>
      <th>kategori</th>
    </tr>
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="8">
          <h1>Data Tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($buku as $b) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $b['id'] ?>"><button class="btn btn-warning text-white">Ubah</button></a>
            <a href="hapus.php?id=<?= $b['id'] ?>" onclick="return confirm('Hapus Data ?')"><button class="btn btn-danger">Hapus</button></a>
          </td>
          <td><img src="../img/<?= $b["foto"]; ?>" alt="<?= $b["foto"] ?>" width="100"></td>
          <td><?= $b["judul"]; ?></td>
          <td><?= $b["penulis"]; ?></td>
          <td><?= $b["penerbit"]; ?></td>
          <td><?= $b["tahunterbit"]; ?></td>
          <td>
            <?php if ($b["kategori"] == "N") : ?>
              <a href="" class="btn btn-info text-white">Novel</a>
            <?php else : ?>
              <a href="" class="btn btn-danger">Komik</a>
            <?php endif; ?>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>



  <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>