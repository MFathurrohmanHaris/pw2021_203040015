<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $buku = query("SELECT * FROM t_buku WHERE 
                judul LIKE '%$keyword%' OR
                penulis LIKE '%$keyword%' OR
                penerbit LIKE '%$keyword%' OR
                tahunterbit LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%'"); //search kategori pr
} else {
    $buku = query("SELECT * FROM t_buku");
}
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <a href="php/admin.php" class="btn btn-primary" style="margin: 10px 0 0 10px;">Admin</a>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">cari</button>
    </form>
    <?php if (empty($buku)) : ?>
        <div>
            <center>
                <h1>Data Tidak Ditemukan</h1>
            </center>
        </div>
    <?php else : ?>
        <div class="container">
            <p class="judul">
                <?php $i = 0;
                ++$i ?>
                <?php foreach ($buku as $b) : ?>
                    <a href="php/detail.php?id=<?= $b['id'] ?>">
                        <?= $i++ ?>
                        <?= $b["judul"] ?>
                    </a>
                <?php endforeach; ?>
            </p>
        </div>
    <?php endif; ?>

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