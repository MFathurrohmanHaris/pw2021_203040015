<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$buku = query("SELECT * FROM t_buku");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>SelfLibrary</title>
</head>

<body>
    <h1>SELFLIBRARY</h1>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>penerbit</th>
            <th>Tahun</th>
            <th>kategori</th>
        </tr>
        <?php $i = 0; ?>
        <?php foreach ($buku as $b) : ?>
            <tr>
                <td><?= $i += 1; ?></td>
                <td><img src="assets/<?= $b["foto"] ?>" alt=""></td>
                <td><?= $b["judul"] ?></td>
                <td><?= $b["penulis"] ?></td>
                <td><?= $b["penerbit"] ?></td>
                <td><?= $b["tahunterbit"] ?></td>
                <td>
                    <?php if ($b["kategori"] == "N") : ?>
                        <a class="btn btn-info text-white">Novel</a>
                    <?php else : ?>
                        <a class="btn btn-danger text-white">Komik</a>
                    <?php endif ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>