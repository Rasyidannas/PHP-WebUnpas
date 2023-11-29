<?php

require_once 'App/init.php';

//OBJECT/PEMANGGILAN CLASS
$produk1 = new Komik("Naruto", "Massahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo"<hr>";

new Coba();