<?php
//abstract class -> ini untuk membuat class tidak dapat dipanggnil selain dengan cara Inheritence
abstract class Produk{
// PROPERTI
    private $judul, //ini mencegah deklarasi ulang tetapi tidak bisa dipakai untuk anak dari class
            $penulis,
            $penerbit,
            $harga,
            $diskon;
    //protected $harga;//mencegah pendeklarasian ulang dan bisa digunakan di anak dari class

// CONSTRUCTOR --> A constructor allows you to initialize an object's properties upon creation of the object and PHP will automatically call this function when you create an object from a class.
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

    //ini syarat untuk abstract class harus memliki 1 atau lebih "abtract method"
    abstract public function getInfoProduk();//ini hanya untuk interface atau wadah kosong
    
    public function getInfo(){//ini isi dan tersambung dengan getInfoProduk
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
        $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    //ini untuk visibilty protected
    // public function getHarga(){
    //     return $this->harga;
    // }

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




