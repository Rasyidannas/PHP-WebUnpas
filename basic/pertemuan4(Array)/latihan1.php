<?php
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//key-nya adalah index, yang di mulai dari 0

//cara membuat array
    //cara lama
$hari = array("Senin", "Selasa", "Rabu", "Kamis");

    //cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];


//menampilkan array --- ini untuk tampilan developer
//var_dump() atau print_r()
var_dump($hari);
echo"<br>";
print_r($bulan);

//menampilkan 1 elemen pada array (u/ tampilan user)
// echo $arr1[0];
// echo"<br>";
// echo $bulan[1];
// echo"<br>";

//menambahkan elemen baru pada array
//var_dump($hari); //ini untuk menampilkan array sebelum ditambah
// $hari[] = "Jum'at";
// $hari[] = "Sabtu";
// echo "<br>";
// var_dump($hari);
?>
