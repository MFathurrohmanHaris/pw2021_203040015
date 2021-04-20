<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040015");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $tahunterbit = htmlspecialchars($data['tahunterbit']);
    $kategori = htmlspecialchars($data['kategori']);

    $query = "INSERT INTO t_buku VALUES ('', '$foto', '$judul', '$penulis', '$penerbit', '$tahunterbit', '$kategori')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
