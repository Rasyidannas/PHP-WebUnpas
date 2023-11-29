<?php
//pengulangan pada array
//for/foreach
$angka = [1,4,1,53,50,12,91,4];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <style>
     .kotak{
        width : 50px;
        height : 50px;
        background-color: salmon;
        text-align : center;
        line-height : 50px;
        margin : 3px;
        float : left;
     }
     .clear {
         clear : both;
     }
    </style>
</head>
<body>
<!-- ini contoh for -->
    <?php for( $i = 0; $i < count($angka); $i++ ): //"count" ini untuk mengetahui jumlah elemen pada array, memiliki fungsi yang sama dengan length pd js?> 
    <div class = "kotak"><?= $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class = "clear"></div>

<!-- ini contoh foreach -->
    <?php foreach ($angka as $a) :?>
    <div class = "kotak"><?= $a; ?> </div>
    <?php endforeach; ?>
</body>
</html>

