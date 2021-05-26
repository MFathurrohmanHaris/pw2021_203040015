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
$pulau = [
    [
        "nama" => "IsLand",
        "type" => "Hutan",
        "harga" => "$250000",
        "populasi" => "5000",
        "gambar" => "pulau1.png",
    ],
    [
        "nama" => "CityLand",
        "type" => "Kota",
        "harga" => "$1000000",
        "populasi" => "50000",
        "gambar" => "pulau2.png",
    ],
    [
        "nama" => "Is",
        "type" => "Batuan",
        "harga" => "$40000",
        "populasi" => "15",
        "gambar" => "pulau3.png",
    ],
    [
        "nama" => "land-P552",
        "type" => "Kota",
        "harga" => "$2500000",
        "populasi" => "52000",
        "gambar" => "pulau4.png",
    ],
    [
        "nama" => "land-C7721",
        "type" => "Hutan",
        "harga" => "$25000",
        "populasi" => "500",
        "gambar" => "pulau5.png",
    ],
    [
        "nama" => "Land-409PQ",
        "type" => "Perumahan",
        "harga" => "$45000",
        "populasi" => "25",
        "gambar" => "pulau6.png",
    ],
    [
        "nama" => "Land-7712Z",
        "type" => "Kota",
        "harga" => "$30000000",
        "populasi" => "150000",
        "gambar" => "pulau7.png",
    ],
    [
        "nama" => "Land-ROQBZ",
        "type" => "Hutan",
        "harga" => "$1000000",
        "populasi" => "50000",
        "gambar" => "pulau8.png",
    ],
    [
        "nama" => "Land-487ZQ",
        "type" => "Batuan",
        "harga" => "$50000",
        "populasi" => "150",
        "gambar" => "pulau9.png",
    ],
    [
        "nama" => "Land-Q22ZNZB",
        "type" => "Hutan",
        "harga" => "$45000",
        "populasi" => "50",
        "gambar" => "pulau10.png",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pulau Sewaan</title>
    <style>
        .container {
            width: 1000px;
            height: 500px;
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <h1>Daftar Pulau Sewaan</h1>
    <div class="container">
        <?php foreach ($pulau as $p) : ?>
            <ul>
                <li><img src="img/<?= $p["gambar"]; ?>" alt=""></li>
                <li>Nama : <?= $p["nama"]; ?></li>
                <li>Type : <?= $p["type"]; ?></li>
                <li>Harga : <?= $p["harga"]; ?></li>
                <li>Batas Populasi : <?= $p["populasi"]; ?></li>
            </ul>
        <?php endforeach; ?>
    </div>

</body>

</html>