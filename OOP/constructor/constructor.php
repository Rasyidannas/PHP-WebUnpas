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

//OBJECT
//pruduk dipanngi dengan mengisi seperti construstor
$produk3 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Unchated", "Neil Drunman", "Sony Computer", 250000);
$produk5 = new Produk("Dragon Ball");

echo "Komik : ".$produk3 -> getLabel();
echo "<br>";
echo "Game:". $produk4->getLabel(); 
echo "<br>";
var_dump($produk5);

