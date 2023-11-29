<?php
//Variabel Scope
$x = 10;

function tampilX(){
    $a = 20;
    echo $a;
    
    echo "<br>";

    global $x;//ini agar variabel di global scope dapat daikses dalam local scope
    echo $x;

    // echo $x; //ini tidak akan muncul karena php tanpa keyword 'global' tidak mendefiniskan $x sebagai global scope
}

tampilX();

echo"<br>";

//Variabel Superglobals - variabel yang sudah ditetapkan php dan bisa diakses difile php. Superglobals termasuk array associative
//Contoh I
$_GET ["nama"] = ["Rasyid Nur Annas"];

var_dump ($_GET);


?>

