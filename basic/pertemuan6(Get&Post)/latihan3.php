<?php 
//cek apakah tidak ada data di $_GET 
//isset adalah untuk mengecek varaibel sudah dibuat atau belum
//
    if(!isset($_GET["nama"]) ||
        !isset($_GET["nrp"]) ||
        !isset($_GET["email"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["gambar"])){
        //redirect adalah untuk mengarahkan secara paksa
        header("Location: latihan2.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <style>
    .profile-image{
        height : 100px;
        width : 100px;
        border-radius : 50%;
    }
    </style>
</head>
<body>

    <ul>
        <li> <img class = "profile-image" src="img/<?= $_GET ["gambar"];?>"></li>
        <li> Nama : <?= $_GET ["nama"]; ?></li>
        <li> NRP : <?= $_GET ["nrp"]; ?></li>
        <li> Email : <?= $_GET ["email"]; ?></li>
        <li> Jurusan : <?= $_GET ["jurusan"]; ?></li>
    </ul>
<a href="latihan2.php">Kembali</a>
</body>
</html>