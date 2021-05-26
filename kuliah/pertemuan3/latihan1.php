<?php 
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 3 - 18 Februari 2021
Pengulangan
*/
?>

<?php 
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// didalam for ada 3 bagian : 1. inisialsasi = menentukan variable awal; 2. kondisi terminasi = memberhentikan pengulangan; 3. Increment/decrement = pengulangan bisa maju atau mundur;
// for( $i = 0; $i < 5; $i++ ) {
//     echo "Hello World!<br>";
// }

// nilai awal disimpan diluar while
// $i = 0;
// selama kondisi true maka akan dijalankan pengulangannya;
// while( $i < 5 ) {
//     echo "Hello World!<br>";
// beri increment sebelum kurung kurawal
// $i++;
// }

// while dan do.. while sama, perbedaannya ketika kondisinya false, maka akan menjalankan bracket do.. sebanyak satu kali sedangkan while, melihat kondisi terlebih dahulu, lalu menjalankan pengulangannya.
// $i = 0;
// do {
//     echo "Hello World!<br>";
// $i++;
// } while ( $i < 5 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            // for( $i = 1; $i <= 3; $i++) {
            //     echo "<tr>";
            //     for( $j = 1; $j <= 5; $j++) {
            //         echo "<td>$i,$j</td>";
            //     }
            //     echo "</tr>";
            // }
        ?>

        <!-- sintaks templating -->
        <!-- setiap kurung kurawal buka diganti titik 2 dan kurung kurawal tutup diganti dengan keyword statment end misalkan untuk for maka menjadi endfor, bila if maka menjadi endif. Ini baik digunakan jika ada kontrol flow bersarang -->
        <?php for( $i = 1; $i <= 5; $i++) : ?>
            <?php if( $i % 2 == 0) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>

            <?php for( $j = 1; $j <= 5; $j++) : ?>
                <!-- jika tag php isinya hanya untuk mencetak string atau variable maka cukup menggunakan '=', tidak perlu menggunakan 'php echo', tujuannya untuk mempersingkan sintaks.  -->
                <td> <?= "$i,$j"; ?> </td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>