<?php 
//ini memanggil file function.php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");
//ini menapilkan semua data dalam database
// while ($mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }

/*-----INI CONTOH PENGAMBILAN ATAU MENAMPILKAN DATA PADA DATABASE-----*/
//ambil data (fetch) mahasiswa dari object result

//mysqli_fetch_row -->mengembalikan array numerik
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);

//mysqli_fetch_assoc -->mengembalikan array assosiative
// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["jurusan"]);

//mysqli_fetch_array -->mengembalikan dua nilai assosiative dan numerik
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs["email"]);

//mysqli_fetch_object -->
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs -> nrp)S; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border ="1" cellpadding = "10" cellspacing = "0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    <?php $i = 1;  ?>
    <?php foreach($mahasiswa as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"];?>" alt="" width = "70px"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>