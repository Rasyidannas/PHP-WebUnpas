<?php
function salam($waktu = "Datang", $nama = "Admin"){
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Rasyid"); ?></h1>
    <h1><?= salam(); ?></h1> <!--ini seharunya error karena tidak memanggil argument pada function tetapi ini berjalan karena argument di isi dengan nilai default-->
</body>
</html>