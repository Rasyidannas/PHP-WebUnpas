<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title><!--metode request POST adalah metode pengirimnan data "tanpa" melalui url dan data tersebut dapat ditangkap variabel superglobals $_POST -->
</head>
<body>
    <form action="latihan5.php" method="post">
    Masukkan nama :
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>