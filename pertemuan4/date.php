

<?php 
    // Date 
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 jan 1970
    // echo time();
    // echo date("l", time()+60*60*24*30);

    // mktime
    // membuat detik sendiri
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(5,0,0,8,31,2002));

    // strtotime
    echo date("l", strtotime("31 aug 2002"));
?>