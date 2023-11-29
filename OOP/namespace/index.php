<?php

require_once 'App/init.php';

//OBJECT/PEMANGGILAN CLASS
// $produk1 = new Komik("Naruto", "Massahi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();

// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo"<hr>";

//ini untuk pemangilan namespace
//shorcut
use App\Service\User as ServiceUser;//ini alias untuk namespace
new ServiceUser();
// new App\Service\User(); //ini sama dengan diatas

echo "<br>";
//shorcut
use App\Produk\User as ProdukUser;//ini alias untuk namespace
new ProdukUser();
// new App\Produk\User(); //ini sama dengan diatas
