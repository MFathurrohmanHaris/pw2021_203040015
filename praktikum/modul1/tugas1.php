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
            display:flex;
        }
        .kotak {
            width:40px;
            height:40px;
            border:1px solid;
            margin: 1px;
        }
    </style>
</head>
<body>
    <div style="border:1px solid;padding:5px;width:265px;">
        <?php for($i = 1; $i <= 6; $i++) : ?>
            <div class="container">
            <?php for($j = 1; $j <= 6; $j++) : ?>
                <?php if($i % 2 == 0) : ?>
                    <?php if($i % 2 == 0 && $j % 2 == 0) : ?>
                        <div class="kotak" style="background-color:lightblue"></div>
                    <?php else : ?>
                        <div class="kotak" style="background-color:salmon"></div>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if($j % 2 == 0) : ?>
                        <div class="kotak" style="background-color:salmon"></div>
                    <?php else : ?>
                        <div class="kotak" style="background-color:lightblue"></div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endfor; ?>
            </div>
        <?php endfor; ?>
    </div>
</body>
</html>