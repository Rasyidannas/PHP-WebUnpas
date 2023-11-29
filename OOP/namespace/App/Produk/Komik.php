<?php
//extends ini untuk menandakan anak dari produk dan akan membawa sifat dari Produk || implements adalah pemanggilan untuk Interface
class Komik extends Produk Implements InfoProduk{
    public $jmlHalaman;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);//ini untuk mamanggi cunstructor do parent

        $this->jmlHalaman=$jmlHalaman;
    }

    public function getInfo(){//ini isi dan tersambung dengan getInfoProduk
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}