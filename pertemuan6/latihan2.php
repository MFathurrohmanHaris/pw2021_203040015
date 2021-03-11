<?php
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 6 - 11 Maret 2021
Array Associative
*/
?>
<?php
// $mahasiswa = [
//     ["Muhammad Fathurrohman Haris", "203040015", "203040015@mail.unpas.ac.id", "Teknik Informatika"],
//     ["203020022", "Muhammad Imam Ansori", "203040022@unpas.ac.id", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuail
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Muhammad Fathurrohman Haris",
        "nrp" => "203040015",
        "email" => "203040015@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "haris.png"
    ],
    [
        "nrp" => "203020022",
        "nama" => "Muhammad Imam Ansori",
        "email" => "203020022@unpas.ac.id",
        "jurusan" => "Teknik Industri",
        "gambar" => "imam.png"
    ]
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
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>