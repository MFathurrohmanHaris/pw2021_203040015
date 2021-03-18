<?php
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 7 - 15 Maret 2021
GET & POST
*/
?>
<?php
// variable scope
// variable global
// $x = 10;
// function tampilX()
// {
//     global $x;
//     echo $x;
// }
// tampilX();

// variable superGlobal
// variable global milik PHP, merupakan array associative
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Nama Saya";
// $_GET["nrp"] = "20304015";
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
    <title>GET</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="../pertemuan7/latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"] ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>