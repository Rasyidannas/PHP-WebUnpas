<?php 
    try {
        require_once 'pdo-connect.php';
        //insert data
        $sql = "INSERT INTO crud (firstname, lastname, email, gender, age) VALUES('Rasyid', 'Nur Annas', 'rasyid@gmail.com', 'male', '22')";
        //exec() untukn menjalankan program $sql dan mengembalikan nilai. Ini juga untuk ketika insert dan delete data
        $result = $db->exec($sql);

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
    // var_dump($result);
    echo $result . " Records Inserted in DB " . $db->lastInsertID();