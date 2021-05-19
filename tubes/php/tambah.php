<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = '../index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="../css/tambah.css">
</head>

<body>
  <h3>Form Tambah Data Buku</h3>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="judul">Judul : </label><br>
      <input type="text" class="form-control" name="judul" id="judul" required>
    </div>
    <br>
    <div class="form-group">
      <label for="penulis">Penulis : </label><br>
      <input type="text" class="form-control" name="penulis" id="penulis" required>
    </div>
    <br>
    <div class="form-group">
      <label for="penerbit">Penerbit : </label><br>
      <input type="text" class="form-control" name="penerbit" id="penerbit" required>
    </div>
    <br>
    <div class="form-group">
      <label for="tahunterbit">Tahun terbit : </label><br>
      <input type="text" class="form-control" name="tahunterbit" id="tahunterbit" required>
    </div>
    <br>
    <div class="form-group">
      <label for="kategori">Kategori : </label><br>
      <select name="kategori" id="kategori" class="form-control" required>
        <option value="">- Pilih Kategori Buku -</option>
        <option value="N">Novel</option>
        <option value="K">Komik</option>
      </select>
    </div>
    <br>
    <div class="form-group">
      <label for="foto">Foto : </label><br>
      <input type="file" class="form-control foto" name="foto" id="foto" onchange="previewImage()">
      <br>
      <img src="../img/nophoto.jpg" width="120" style="display: block;" class="img-preview">
    </div>
    <br>
    <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button>
    <button type="submit" class="btn btn-primary">
      <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
    </button>
  </form>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="../js/bootstrap.bundle.js"></script>
  <script src="../js/script.js"></script>
</body>

</html>