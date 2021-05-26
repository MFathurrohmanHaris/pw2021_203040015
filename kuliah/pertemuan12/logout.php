<?php
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 12 - 6 Mei 2021
Login & Registrasi
*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
