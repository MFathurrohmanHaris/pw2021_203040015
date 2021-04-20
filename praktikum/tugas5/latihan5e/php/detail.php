<?php
// mengecek apakah ada id yang dikirim
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$buku = query("SELECT * FROM t_buku WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="detailContainer">
        <div class="gambar">
            <img src="../assets/img/<?= $buku["foto"] ?>" alt="">
        </div>
        <div class="keterangan">
            <p>Judul : <?= $buku["judul"] ?></p>
            <p>Penulis : <?= $buku["penulis"] ?></p>
            <p>penerbit : <?= $buku["penerbit"] ?></p>
            <p>tahun terbit : <?= $buku["tahunterbit"] ?></p>
            <?php if ($buku["kategori"] == 'N') : ?>
                <p>kategori : <i class="btn btn-primary text-white bi bi-book"> Novel</i></p>
            <?php else : ?>
                <p>kategori : <i class="btn btn-danger text-white bi bi-book"> Komik</i></p>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <a href="../index.php">Kembali</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>