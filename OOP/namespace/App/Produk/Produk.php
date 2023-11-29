<?php
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
