<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lathan1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
<!-- ini cara pertama tag htm didalam php -->
    <table border = "1" cellpadding = "10" cellspacing = "0" >
    <?php 
    for($i = 1; $i <= 3; $i++){
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++){
            echo"<td>$i, $j</td>";
        }
        echo "</tr>";
    }
    ?>
<!--Ini cara kedua dengan memisahkan tag html dan php  -->
    <table border = "1" cellpadding = "10" cellspacing = "0" >
    <?php for ($i = 1; $i <= 5; $i++): ?> <!--titik dua : disini sama dengan {-->
    <?php if ($i % 2 == 1): ?>
    <tr class = "warna-baris">
    <?php else: ?>
    <?php endif; ?>
        <?php for ($j = 1; $j <= 5; $j++):?>
        <td> <?= "$i, $j"; ?></td> <!--sama dengan = disini memiliki arti yang sama "php echo" -->
        <?php endfor; ?>
    </tr>
    <?php endfor;?> <!--endfor sama dengan } -->
    
    </table>
</body>
</html>