<?php
/* 
Muhammad Fathurrohman Haris
203040015
https://github.com/MFathurrohmanHaris/pw2021_203040015
Pertemuan 12 - 6 Mei 2021
Login & Registrasi
*/
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
          </script>";
} else {
  echo "data gagal dihapus!";
}
