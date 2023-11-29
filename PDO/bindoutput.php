<?php 
    try {
        require_once 'pdo-connect.php';
        $sql = "SELECT * FROM crud";
        $result = $db->prepare($sql);
        $result->execute();
        //bindColumn -> Bind a column to a PHP variable
        $result->bindColumn('firstname', $fname);
        $result->bindColumn('lastname', $lname);
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
    while($row = $result->fetch()){
        echo $fname . " " . $lname . "<br>";
    }
?>