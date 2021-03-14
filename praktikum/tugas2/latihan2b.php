<?php
$jawabanIsset = "Isset adalah = salah satu fungsi php, guna untuk memeriksa suatu objek dari nilai inputan form <br><br>";
$jawabanEmpty = "Empty adalah = untuk memeriksa apakah suatu variabel kosong atau tidak. Fungsi ini mengembalikan nilai salah jika variabel ada dan tidak kosong, jika tidak maka mengembalikan nilai benar.";

function soal($style)
{
    return "<div style='$style;'>" . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] . "</div>";
}
echo soal("font: 14px Arial");
