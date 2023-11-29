<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

//ini akan otomatis memanggi satu persatu file secara automatis
spl_autoload_register(function($class){
    $class = explode('\\', $class); // explode ini akan membuat menjadi array dan '\\' ini untuk yang dihilangkan
    $class = end($class); //end untuk mengambil elemen terakhir
    require_once __DIR__ . '/Produk/'. $class . '.php';    
});

spl_autoload_register(function($class){
    $class = explode('\\', $class); // explode ini akan membuat menjadi array dan '\\' ini untuk yang dihilangkan
    $class = end($class); //end untuk mengambil elemen terakhir
    require_once __DIR__ . '/Service/'. $class . '.php';    
});