<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$buku = query("SELECT * FROM t_buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <h1>SELFLIBRARY</h1>
    <div class="add">
        <a href="tambah.php" class="btn btn-success">Tambah Data</a>
    </div>
    <table class="table table-hover">
        <tr>
            <td>#</td>
            <td>opsi</td>
            <td>foto</td>
            <td>judul</td>
            <td>penulis</td>
            <td>penerbit</td>
            <td>tahun terbit</td>
            <td>kategori</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($buku as $b) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $b['id'] ?>"><button class="btn btn-warning text-white">Ubah</button></a>
                    <a href="hapus.php?id=<?= $b['id'] ?>" onclick="return confirm('Hapus Data ?')"><button class="btn btn-danger">Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $b["foto"]; ?>" alt="<?= $b["foto"] ?>"></td>
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
    </table>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>