<?php 
    try {
        require_once 'pdo-connect.php';
        //insert data with bind name
        $sql = "INSERT INTO crud (firstname, lastname, email, gender, age) VALUES(:firstName, :lastName, :email, :gender, :age)";
        //prepare() Prepares a statement for execution and returns a statement object. Ini digunakan ketika bind name
        $result= $db->prepare($sql);
        $result->bindValue(':firstName', 'Mr.'.$_GET['fName']);//bind value agar bisa menggunakan konketinasi
        $result->bindParam(':lastName', $_GET['lName']);
        $result->bindParam(':email', $_GET['email']);
        $result->bindParam(':gender', $_GET['gender']);
        $result->bindParam(':age', $_GET['age'], PDO::PARAM_INT);//PDO::PARAM_INT u/ Represents the SQL INTEGER data type.
        $res = $result->execute();// execute() is a prepared statement .ini digunakan ketika insert data menggunakan bind name

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
    var_dump($res);