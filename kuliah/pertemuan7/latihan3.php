<?php
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 7 - 15 Maret 2021
GET & POST
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <?php if (isset($_POST["submit"])) : ?>
        <h1>Halo, Selamat datang, <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    <form action="" method="post">
        Masukan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>