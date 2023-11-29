<?php 
    try {
        require_once 'pdo-connect.php';
        //delete data
        $sql = "DELETE FROM crud WHERE lastname='Nur Annas'";
        //exec() untukn menjalankan program $sql dan mengembalikan nilai. Ini juga untuk ketika insert dan delete data
        $delete = $db->exec($sql);

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

    echo $delete . " Recorded Deleted from DB ";