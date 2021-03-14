<?php
function tumpukanBola($tumpukan)
{
    for ($i = 1; $i <= $tumpukan; $i++) {
        echo "<div style='display:flex;border:1px; width:1000px'>";
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='bola'>$i</div>";
        }
        echo "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bola {
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 20px;
            text-align: center;
            background-color: salmon;
            border: 1px solid;
            margin: 1px;
        }

        .border {
            border: 1px solid;
            height: 220px;
            padding: 10px;
            width: 230px;
        }
    </style>
</head>

<body>
    <div class="border">
        <?php tumpukanBola(5) ?>
    </div>
</body>

</html>