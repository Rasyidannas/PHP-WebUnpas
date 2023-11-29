<?php

//ini konstanta dan NAMA adalah nama dr konstanta || rasyid adalah isi dari konstanta
//DEFINE
define('NAMA', 'Rasyid');//define tidak dapat dimasukkan di class
echo NAMA;

echo "<br>";

//CONST
const UMUR = 22;//const dapat masuk di class 
echo UMUR;

echo "<hr>";

class Coba{
    const NAMA = "Ciko";
}

echo Coba::NAMA;


?>