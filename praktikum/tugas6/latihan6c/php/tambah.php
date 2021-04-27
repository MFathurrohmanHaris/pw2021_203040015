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
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data gagal ditambahkan');
                    document.location.href = 'admin.php';
                </script>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/tambah.css">
</head>

<body style="margin: 10px 0 0 20px;">
    <h3>Form Tambah Data Buku</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="foto">Foto : </label><br>
            <input type="text" class="form-control" name="foto" id="foto" required>
        </div>
        <br>
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
        <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button>
        <button type="submit" class="btn btn-primary">
            <a href="../index.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>