<?php
$pemainClub = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="font-family:Arial;border:1px solid;padding:5px 150px 5px 10px;width:fit-content">
        <h4 style="margin-top: 5px;">Daftar pemain bola terkenal dan clubnya</h4>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <?php foreach ($pemainClub as $pemain => $club) : ?>
                    <th style="text-align: left;"><?= $pemain ?></th>
                    <th style="padding: 2px 5px 2px 5px;">:</th>
                    <td><?= $club ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</body>

</html>