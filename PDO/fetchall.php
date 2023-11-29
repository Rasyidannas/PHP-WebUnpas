<?php 
    try {
        require_once 'pdo-connect.php';
        $sql = "SELECT * FROM crud";
        //ini untuk menapilkan data/query data dari $db
        $result = $db->query($sql);
        //FETCHALL INI MENJADIKAN INDUK MEMILIKI INDEX ARRAY
        // $all = $result->fetchAll(PDO::FETCH_ASSOC);//ini mengubah index array menjadi kata
        $all = $result->fetchAll(PDO::FETCH_NUM);//ini mengubah index array menjadi angka
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
    echo "<pre>";
    print_r($all);
    echo "</pre>";
?>