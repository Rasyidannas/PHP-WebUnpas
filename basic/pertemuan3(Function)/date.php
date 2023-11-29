<?php
//Date
    // untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

//Time
    //UNIX Timestamp / EPOCH time
    //detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date("d M Y", time()+60*60*24*100);//ini untuk mengetahu 100 hari kedepan

//mktime
    //membuat detik sendiri
    // echo date("l", mktime(0,0,0,2,17,1999)); // urutan pada mktime (jam, menit, detik, bulan, tanggal, tahun)

//strtotime
echo date("l", strtotime("17 feb 1999"));//ini sama dengan mk time tetapi ini membaca dengan format string
?>