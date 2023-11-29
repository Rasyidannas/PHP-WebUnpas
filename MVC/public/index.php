<?php

if(!session_id()){
    session_start();
}
require_once '../app/init.php';//in memanggil init

$app = new App;//ini untuk menjalankan class App yang ada di core