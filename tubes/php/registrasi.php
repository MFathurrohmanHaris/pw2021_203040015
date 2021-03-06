<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('user baru berhasil di tambahkan. Silahkan login');
          document.location.href = 'login.php';
        </script>";
  } else {
    echo "user gagal ditambahkan!";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Registrasi</title>

  <!-- bootstrap CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../css/login.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="POST" action="">
      <img class="mb-4" src="../img/logoLogin.png" alt="" width="80" height="80">
      <h1 class="h3 mb-3 fw-normal">Buat Akun</h1>

      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
        <label for="floatingInput">Username</label>
      </div>

      <div class="form-floating">
        <input type="password" name="password1" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-floating">
        <input type="password" name="password2" class="form-control" id="floatingPassword" placeholder="Konfirmasi Password">
        <label for="floatingPassword">Konfirmasi Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" name="registrasi" type="submit">Register</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
    </form>
  </main>



</body>

</html>