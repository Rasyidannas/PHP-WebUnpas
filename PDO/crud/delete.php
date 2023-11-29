<?php
    try{
        require_once('connect.php');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        $error = $e->getMessage();   
    }

     //ini untuk menampilkan data atau select data menggunakan bind name anonymous
    $delSql = "DELETE FROM crud WHERE id = ?";
    $result= $db->prepare($delSql);
    $res = $result->execute(array($_GET['id']));//ini $_GET['id'] akan melampirkan di $delSql

    if($res){
        header('location: view.php');
    }else{
        echo "failed to insert data";
    }
?>