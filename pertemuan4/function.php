<?php 
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 4 - 25 Februari 2021
Function ( User Defined Function )
*/
?>

<?php
// mengubah zona waktu default menjadi Asia
date_default_timezone_set("Asia/Bangkok");
// variabel jam diisi jam saat ini
// H ( h kapital ) merupakan format waktu jam pada date() dengan range 00 - 23
$jam = date("H");
// jika waktu saat ini == 0 atau waktu saat ini kurang dari sama dengan 11
if ($jam == 00 || $jam <= 11) {
    // maka tampilkan waktu pagi
    $waktu = "Pagi";
// selain itu jika waktu saat ini == 12 atau waktu saat ini kurang dari sama dengan 18
} else if ($jam == 12 || $jam <= 18) {
    // maka tampilkan waktu keterangan siang
    $waktu = "Siang";
} else {
    // selain itu tampilkan waktu keterangan malam
    $waktu = "Malam";
}
echo $jam;
function salam($waktu, $nama = "Admin"){
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
</head>
<body>
    <h1><?= salam($waktu, "Haris"); ?></h1>
</body>
</html>