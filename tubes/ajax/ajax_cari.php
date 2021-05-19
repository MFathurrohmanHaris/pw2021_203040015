<?php

require '../php/functions.php';
$buku = cari($_GET['keyword']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php if (empty($buku)) : ?>
          <h1 style="color: red;font-style: italic;text-align: center; margin: 0 auto;">data buku tidak ditemukan!</h1>
        <?php endif; ?>
        <?php foreach ($buku as $b) : ?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="img/<?= $b['foto']; ?>" class="card-img-top" alt="...">

              <div class="card-body">
                <h5 class="card-title text-center"><a href="php/detail.php?id=<?= $b['id']; ?>" class="judul"><?= $b['judul']; ?></a></h5>
                <p class="card-text"></p>
                <div class="d-flex justify-content-between align-items-center">
                  <!-- <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div> -->
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>