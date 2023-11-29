<?php

class Produk{
// PROPERTI
    public $judul, 
            $penulis,
            $penerbit,
            $harga; 

// CONSTRUCTOR
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
        $this->judul = $judul;//$judul dibelakang itu berasal dari argument
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

//METHOD
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

//extends ini untuk menandakan anak dari produk dan akan membawa sifat dari Produk
class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);//ini untuk mamanggi cunstructor do parent

        $this->jmlHalaman=$jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." - {$this->waktuMain} Jam.";//parent ini overriding dan ini berfungsi untuk memanggil function di parent
        return $str;
    }
}


class CetakInfoProduk{
    public function cetak(Produk $produk){//arti argument ini hanya bisa dari Class Produk
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}


//OBJECT
$produk1 = new Komik("Naruto", "Massahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();


