<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_tubes_203040015');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function upload()
{
  $nama_file = $_FILES['foto']['name'];
  $tipe_file = $_FILES['foto']['type'];
  $ukuran_file = $_FILES['foto']['size'];
  $error = $_FILES['foto']['error'];
  $tmp_file = $_FILES['foto']['tmp_name'];

  // ketika tidak ada gambar dipilih
  if ($error == 4) {
    return 'nophoto.jpg';
  }

  // cek ekstensi file
  $daftar_foto = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_foto)) {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek type file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
            alert('yang anda pilih bukan gambar!');
          </script>";
    return false;
  }

  // cek ukuran file max 5mb = 5000000
  if ($ukuran_file > 5000000) {
    echo "<script>
            alert('ukuran terlalu besar!');
          </script>";
    return false;
  }

  // lolos pengecekan maka siap upload file
  // generate nama file baru
  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../img/' . $nama_file_baru);

  return $nama_file_baru;
}

function tambah($data)
{
  $conn = koneksi();

  // $foto = htmlspecialchars($data['foto']);
  $judul = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $tahunterbit = htmlspecialchars($data['tahunterbit']);
  $kategori = htmlspecialchars($data['kategori']);

  // upload foto
  $foto = upload();
  if (!$foto) {
    return false;
  }

  $query = "INSERT INTO t_buku VALUES ('', '$foto', '$judul', '$penulis', '$penerbit', '$tahunterbit', '$kategori')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  // menghapus foto di folder img
  $buku = query("SELECT * FROM t_buku WHERE id = $id");
  if ($buku['foto'] != 'nophoto.jpg') {
    unlink('../img/' . $buku['foto']);
  }

  mysqli_query($conn, "DELETE FROM t_buku WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $foto_lama = htmlspecialchars($data['foto_lama']);
  $judul = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $tahunterbit = htmlspecialchars($data['tahunterbit']);
  $kategori = htmlspecialchars($data['kategori']);

  $foto = upload();
  if (!$foto) {
    return false;
  }

  if ($foto == 'nophoto.jpg') {
    $foto = $foto_lama;
  }

  $query = "UPDATE t_buku
            SET
            foto = '$foto',
            judul = '$judul',
            penulis = '$penulis',
            penerbit = '$penerbit',
            tahunterbit = '$tahunterbit',
            kategori = '$kategori'
            WHERE id = '$id'";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // jika username / password kosong
  if (empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('username / password tidak boleh kosong!');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM user WHERE username = '$username'")) {
    echo "<script>
          alert('username sudah terdaftar!');
          document.location.href = 'registrasi.php';
        </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password1 !== $password2) {
    echo "<script>
          alert('konfirmasi password tidak sesuai');
          document.location.href = 'registrasi.php';
        </script>";
    return false;
  }

  // jika password < 5 digit
  if (strlen($password1) < 5) {
    echo "<script>
          alert('password terlalu pendek');
          document.location.href = 'registrasi.php';
        </script>";
    return false;
  }

  // jika username dan password sudah sesuai
  // enkripsi password
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO user
              VALUES
            ('null', '$username', '$password_baru')
            ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

// function cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM t_buku
              WHERE
              judul LIKE '%$keyword%'";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
