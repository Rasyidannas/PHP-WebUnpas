<?php
class Game extends Produk Implements InfoProduk{
    public $waktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo(){//ini isi dan tersambung dengan getInfoProduk
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : ". $this->getInfo() ." - {$this->waktuMain} Jam.";//parent ini overriding dan ini berfungsi untuk memanggil function di parent
        return $str;
    }
}