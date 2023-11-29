<?php
//INTERFACE -> ini hanya berisi wadah kosong atau interface dan akan terkoneksi jika melakukan IMPLEMENTS
interface InfoProduk{
    public function getInfoProduk();
}


abstract class Produk{
// PROPERTI
    protected $judul, //ini bisa dipakai untuk anak dari class karena protected
            $penulis,
            $penerbit,
            $harga,
            $diskon;
    //protected $harga;//mencegah pendeklarasian ulang dan bisa digunakan di anak dari class

// CONSTRUCTOR
    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
        $this->judul = $judul;//$judul dibelakang itu berasal dari argument
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //SETTER & GETTER
    //ini setter yang berisi pendeklarasian ulang
    public function setJudul($judul){
        // if( !is_string($judul) ){
        //     throw new Exception("Judul harus string");//ini untuk mengisi erro
        // }

        $this->judul=$judul;
    }


    //ini getter
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
         $this->penulis=$penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }


    public function setPenerbit($penerbit){
        $this->penerbit=$penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

//METHOD
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    
    //Abstract method
    abstract public function getInfo();
}

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


//OBJECT/PEMANGGILAN CLASS
$produk1 = new Komik("Naruto", "Massahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();




