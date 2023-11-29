<?php
// standard output
// echo, print
// print_r()
// var_dump() ini mencetak dan menampilkan length juga
echo "Hello World";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penulisan syntax php</title>
</head>
<body>
<h1>Halo, Selamat datang <?php echo"Rasyid";?> </h1> <!--  1 Php didalam Html dan recomended -->
<?php
echo "<h1> Halo, selamat datang</h1>"//2 Html didalam php dan tidak disarankan
?>    
</body>
</html>

<?php
// Variabel dan tipe data
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Rasyid";

echo "Selamat datang $nama"; //ini pemanggilan variabel atau string interpolasi hanya bekerja pada petik dua


//Operator
//aritmatika
//+ - * %

$x = 10;
$y = 20;
echo $x * $y;


//Concatenation
$namaDepan = "Rasyid";
$namaBelakang = "Nur Annas";
echo $namaDepan . " " . $namaBelakang;


//Assigment
//=, +=, -=, *=, %=, .=
$x = 1;
$x = 5; //ini akan menimpa x diatas
$x -= 5; //ini akan mengurangi nilai x
echo $x;

$nama = "Rasyid";
$nama .= " ";
$nama .= "Galih";
echo $nama;


//Perbandingan
//<, >, <=, >=, ==, !=
var_dump(1 == 5);

//identitas | ini untuk membandingkan tipe data dari suatu nilai juga
//===, !==
var_dump(1 === "1");

//Logika
//&&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 5 || $x % 2 == 0);
?>
