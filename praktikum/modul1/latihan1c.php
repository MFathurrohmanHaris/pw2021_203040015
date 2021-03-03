<?php 
/*
Muhammad Fathurrohman Haris
203040015
Rabu jam 9
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
        }
        .lingkaran {
            width:50px;
            height:50px;
            border-radius:25px;
            background-color: salmon;
            line-height:50px;
            text-align:center;
            border: 1px solid;
            margin:2px;
        }
    </style>
</head>
<body>
    <div style="width:200px;border:1px solid; padding:5px;">
    <?php for($i = 1; $i <= 3; $i++) : ?>
        <div class="container">
        <?php for($j = 1; $j <= $i; $j++) : ?>
            <div class="lingkaran"><?= $i ?></div>
        <?php endfor; ?>
        <?= "<br>" ?>
        </div>
    <?php endfor; ?>
    </div>
</body>
</html>