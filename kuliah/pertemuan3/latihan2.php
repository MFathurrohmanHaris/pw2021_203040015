<?php 
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 3 - 18 Februari 2021
Pengkondisian / Percabangan
*/
?>

<?php 
// Pengkondisian / Percabangan
// if
// if else
// if else if else
// ternary = untuk mengganti if else yang sederhana
// switch = meringkas if else yang banyak

$x = 2;
if( $x < 20 ) {
    // selama kondisi bernilai true maka jalankan statment ini (baris 22)
    echo "Benar";
    // selain dari itu maka lakukan yang lain
} else if ( $x == 20 ) {
    // else if adalah pengkondisian antara if dan else, fungsinya untuk memberikan kondisi kedua setelah if bila,kondisi pada if tidak dijalankan
    echo "Bingo!";
} else {
    // else adalah langkah terakhir di pengkondisian bila kondisi diatas tidak di jalankan ( false )
    echo "Salah";
}
?>