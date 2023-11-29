<?php

class Produk{
// PROPERTI
    public $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

//METHOD
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

//OBJECT
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3 -> getLabel();

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis=  "Neil Druckman";
$produk4->penerbit="Sony Computer";
$produk4->harga=250000;
echo "Game:". $produk4->getLabel(); 

// $produk1 = new Produk();
// $produk1->judul = "Naruto";//ini u/ mengisi/mendeklarsikan ulang properti judul
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul ="Uncharted";
// $produk2->tambahProperty = "hehe";//ini untuk mnambhakan properti
// var_dump($produk2);
// var_dump($produk2->judul);//ini hanya untul mencetak judul tidak lainnya