<?php 
    try {
        require_once 'pdo-connect.php';
        $sql = "SELECT * FROM crud";
        //ini untuk menapilkan data/query data dari $db
        $rows = $db->query($sql);
        //errorInfo() is error information associated with the last operation on the database handle
        $errorInfo = $db->errorInfo();
        // print_r($errorInfo);
        if(isset($errorInfo[2])){
            $error = $errorInfo[2];//ini untuk mendeklarasikan error sesuai isi function errorInfo()
        }
    }catch (Exception $e){
        $error = $e->getMessage();
    }

    if(isset($error)){echo "Errors : ". $error;}
    foreach($rows as $row){//ini memanggil $rows dan mencetaknya
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
        echo $row['firstname'] . " " . $row['lastname'] . "<br>";
    }
?>