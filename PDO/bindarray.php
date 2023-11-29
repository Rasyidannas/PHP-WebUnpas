<?php 
    try {
        require_once 'pdo-connect.php';
        //insert data with bind name
        $sql = "INSERT INTO crud (firstname, lastname, email, gender, age) VALUES(:firstName, :lastName, :email, :gender, :age)";
        //prepare() Prepares a statement for execution and returns a statement object. Ini digunakan ketika bind name
        $result= $db->prepare($sql);
        //ini menggunakan array tanpa menggunakan bindParam/bindValue
        $values = [':firstName' => 'Mr.'.$_GET['fName'],
                    ':lastName' => $_GET['lName'],
                    ':email'    => $_GET['email'],
                    ':gender'   => $_GET['gender'],
                    ':age'      => $_GET['age']
                ];
        $res = $result->execute($values);// execute() is a prepared statement .ini digunakan ketika insert data menggunakan bind name

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