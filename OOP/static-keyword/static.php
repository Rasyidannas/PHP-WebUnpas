<?php
//static keyword memiliki nilai tetap atau bisa melanjutkan ketika dideklarasi dengan nama lain
//Static methods can be called directly - without creating an instance of the class first.
class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "Halo" . self::$angka++. "kali.";//self ini untuk mmanggil angka karena masih didalam class
    }
}

echo ContohStatic::$angka;//ini cara memanggil keywords static
echo"<br>";
echo ContohStatic::halo();
echo "<hr>";
$nextCall = new ContohStatic;
echo $nextCall->halo();