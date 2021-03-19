<?php
$pemainBola = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
$hasil = array_push($pemainBola, "Luca Modric", "Sadio Mane");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="font-family: Arial;">
    <h4>Daftar pemain bola terkenal</h4>
    <ol>
        <li><?= $pemainBola[0]; ?></li>
        <li><?= $pemainBola[1]; ?></li>
        <li><?= $pemainBola[2]; ?></li>
        <li><?= $pemainBola[3]; ?></li>
        <li><?= $pemainBola[4];  ?></li>
    </ol>
    <h4>Daftar pemain bola terkenal baru</h4>
    <ol>
        <?php sort($pemainBola); ?>
        <li><?= $pemainBola[0]; ?></li>
        <li><?= $pemainBola[1]; ?></li>
        <li><?= $pemainBola[2]; ?></li>
        <li><?= $pemainBola[3]; ?></li>
        <li><?= $pemainBola[4];  ?></li>
        <li><?= $pemainBola[5];  ?></li>
        <li><?= $pemainBola[6];  ?></li>
    </ol>
</body>

</html>