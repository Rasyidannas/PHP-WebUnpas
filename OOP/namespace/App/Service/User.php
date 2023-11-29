<?php namespace App\Service; //ini untuk mebedakan jika memiliki nama yang sama

class User {
    public function __construct(){
        echo "ini adalah class " . __CLASS__; //class ini akan memanggil nama classnya
    }
}