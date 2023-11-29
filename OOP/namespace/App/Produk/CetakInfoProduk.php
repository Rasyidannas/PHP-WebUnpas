<?php
class CetakInfoProduk{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk){//arti argument ini hanya bisa dari Class Produk
        $this->daftarProduk[] = $produk;
    }

    public function cetak(){
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}