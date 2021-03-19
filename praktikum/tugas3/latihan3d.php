<?php
$statistikPemain = [
    ["nama" => "Cristiano Ronaldo", "club" => "Juventus", "main" => 100, "gol" => 76, "assist" => 30],
    ["nama" => "Lionel Messi", "club" => "Barcelona", "main" => 120, "gol" => 80, "assist" => 12],
    ["nama" => "Luca Modric", "club" => "Real Madrid", "main" => 87, "gol" => 12, "assist" => 48],
    ["nama" => "Mohammad Salah", "club" => "Liverpool", "main" => 90, "gol" => 103, "assist" => 8],
    ["nama" => "Neymar Jr", "club" => "Paris Saint Germain", "main" => 109, "gol" => 56, "assist" => 15],
    ["nama" => "Sadio Mane", "club" => "Liverpool", "main" => 63, "gol" => 30, "assist" => 70],
    ["nama" => "Zlatan Ibrahimovic", "club" => "Ac Milan", "main" => 100, "gol" => 10, "assist" => 12]
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
    <table border="1" cellspacing="0" cellpadding="1" style="font-family: Arial;">
        <tr style="text-align: left;">
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php
        $i = 0;
        $jml_main = 0;
        $jml_gol = 0;
        $jml_assist = 0;
        ?>
        <?php foreach ($statistikPemain as $sp) : ?>
            <tr>
                <td><?= $i = $i + 1 ?></td>
                <td><?= $sp["nama"]; ?></td>
                <td><?= $sp["club"]; ?></td>
                <td><?= $sp["main"]; ?></td>
                <td><?= $sp["gol"]; ?></td>
                <td><?= $sp["assist"]; ?></td>
            </tr>
            <?php $jml_main = $jml_main + $sp["main"]; ?>
            <?php $jml_gol = $jml_gol + $sp["gol"]; ?>
            <?php $jml_assist = $jml_assist + $sp["assist"]; ?>
        <?php endforeach; ?>
        <tr>
            <td>#</td>
            <th colspan="2" style="text-align: center;">Jumlah</th>
            <td><?= $jml_main ?></td>
            <td><?= $jml_gol ?></td>
            <td><?= $jml_assist ?></td>
        </tr>

    </table>
</body>

</html>