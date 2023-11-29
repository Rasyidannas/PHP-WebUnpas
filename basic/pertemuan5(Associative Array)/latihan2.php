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

// echo $mahasiswa[0]["nama"]; //ini contoh menapilkan array bersarang

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiative</title>
    <style>
    .profile-image{
        height : 100px;
        width : 100px;
        border-radius : 50%;
    }
    </style>

    
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs):?>
    <ul>
        <li><img class = "profile-image" src="img/<?= $mhs["gambar"]; ?>"></li>
        <li>Nama : <?= $mhs["nama"]; ?>  </li>
        <li>NRP : <?= $mhs["nrp"]; ?> </li>
        <li>Email : <?= $mhs["email"]; ?> </li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?> </li>
    </ul>
<?php endforeach;?>
    
</body>
</html>