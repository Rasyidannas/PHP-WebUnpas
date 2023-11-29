<?php

class Produk{
// PROPERTI
    public $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

// CONSTRUCTOR
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
        $this->judul = $judul;//$judul dibelakang itu berasal dari argument
        $this->penulis = $penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

//METHOD
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){//arti argument ini hanya bisa dari Class Produk
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
        return $str;
    }
}


//OBJECT
$produk1 = new Produk("Naruto", "Massahi Kishimoto", "Shonen Jump", 30000);
// pamanggilan class CatakInfoProduk
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

