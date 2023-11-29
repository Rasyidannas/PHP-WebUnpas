<?php

require 'functions.php';

if(isset($_POST["register"])){

  if(registrasi($_POST) > 0){
    echo "<script>
          alert('user baru berhasil ditambahkan!');
          </script>";
  }else{
    echo mysqli_error($conn);
  }

}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Registrasi</title>
    <style>
      label{
        display: block;
      }
    </style>
  </head>
  <body>
    <h1>Halaman Registrasi</h1>

    <form class="" action="" method="post">

      <ul>
        <li>
          <label for="username">username :</label>
          <input type="text" name="username" value="" id="username">
        </li>
        <li>
          <label for="password">password :</label>
          <input type="password" name="password" value="" id="password">
        </li>
        <li>
          <label for="password2">password :</label>
          <input type="password" name="password2" value="" id="password2">
        </li>
        <li>
          <button type="submit" name="register">Register!</button>
        </li>
      </ul>

    </form>
  </body>
</html>
