<?php
$mahasiswa = [
    [
        "nrp" => "0821371733",
        "nama" => "Rasyid Nur Annas",
        "email" => "rasyid.smamita1415@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "rasyid.jpg"
    ],
    [
        "nrp" => "0494827223",
        "nama" => "Doddy",
        "email" => "Doddy.smamita1415@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "doddy.jpg"
    ]

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title><!--metode request GET adalah metode pengirimnan data melalui url dan data tersebut dapat ditangkap variabel superglobals $_GET -->
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
    <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <a href = "latihan3.php?
                nama=<?= $mhs["nama"];?>
                &nrp=<?= $mhs["nrp"];?>
                &email=<?= $mhs["email"];?>
                &jurusan=<?= $mhs["jurusan"];?>
                &gambar=<?= $mhs["gambar"];?>
            "> <?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
    
</body>
</html>