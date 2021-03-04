<?php 
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 5 - 04 Maret 2021
*/
?>
<?php
// ini merupakan array numerik, dimana indexnya berdasarkan angka
// bila penempatan isi elemennya salah misal nrp dan nama tertukar isi indexnya, masih akan tetap dijalankan
// cara memperbaikinya dengan mengubah array numerik menjadi array asosiatif yang dimana indexnya berasosiasi dengan nilainya
$mahasiswa = [
    ["Muhammad Fathurrohman Haris", "203040015", "Teknik Informatika", "203040015@unpas.ac.id"],
    ["Muhammad Imam Ansori", "203020022", "Teknik Industri", "203040022@unpas.ac.id"],
    ["203010021", "Muhammad Nasrullah Fatah", "Teknik Mesin", "203040021@unpas.ac.id"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>