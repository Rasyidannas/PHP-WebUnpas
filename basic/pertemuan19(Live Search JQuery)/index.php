<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

//ini memanggil file function.php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari ditekan
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .loader{
        width: 100px;
        position: absolute;
        top: 100px;
        left: 290px;
        z-index: -1;
        display: none;
      }
    </style>
    <title>Halaman Admin</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

  <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus
        placeholder="masukkan keyword pencarian..." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>
        <img src="img/loader.gif" class="loader" alt="">
    </form>

    <br>
    <div id="container">
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
                  <a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> |
                  <a href="hapus.php?id=<?= $row["id"];?>" onclick = "return confirm('yakin');">Hapus</a>
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
    </div>


</body>
</html>
