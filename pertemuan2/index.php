<?php 
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 2 - 11 Februari 2021
Sintaks dasar PHP
*/
?>

<?php 
// Standar Output = perintah php untuk memunculkan sesuatu ke layar
// echo, print = mencetak tulisan atau variable
// print_r = untuk mencetak isi array - debuging
// var_dump = melihat hasil variable - debuging
// echo "Muhammad Fathurrohman Haris";
// var_dump("Muhammad Fathurrohman Haris");

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
$nama = "Muhammad Fathurrohman Haris"; // variabel tidak boleh diawali dengan angka, tapi boleh mengandung angka

// penggunaan kutip 2 dan kutip 1
// Interpolasi adalah untuk mengecek apakah didalam kutip 2 (string) terdapat variabel atau tidak jika ada maka akan ditampilkan variabelnya;
// Contoh :
// echo "Halo Nama saya $nama";
// echo "<br>";
// dikutip satu Interpolasi tidak dapat digunakan
// echo 'Halo Nama saya $nama';

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Penggabungan string / concatenation / concat
// .
// $nama_depan = "Fathurrohman";
// $nama_belakang = "Haris";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Fathurrohman";
// $nama .= " ";
// $nama .= "Haris";
// echo $nama;

// Perbandingan (hanya mengcek nilai, tidak melihat tipe data)
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas (mengcek nilai beserta tipe data)
// ===, !==
// var_dump(1 === "1");

// Logika
// && (AND), || (OR), ! (NOT)
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- 1. PHP di dalam HTML -->
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <!-- HTML di dalam PHP -->
    <?php echo "<h1>Halo, Selamat Datang Fathurrohman</h1>"; ?>
</body>
</html>