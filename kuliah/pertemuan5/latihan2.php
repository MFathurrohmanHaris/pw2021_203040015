<?php 
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 5 - 04 Maret 2021
*/
?>
<?php 
// Pengulangan pada Array
// menggunakan for / foreach
$angka = [22,25,16,12,14,90,99,88];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear:both;}
    </style>
</head>
<body>
    <!-- count untuk menghitung berapa jumlah elemen yang ada didalam array -->
    <?php for($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
        <!-- variabel baru $a untuk merepresentasikan setiap elemen yang ada pada array $angka -->
        <!-- contoh, array adalah jamak, variabel baru sebagai singular jika dalam bahasa inggris students as student -->
    <?php foreach($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>