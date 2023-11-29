<?php
    try{
        require_once('connect.php');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        $error = $e->getMessage();   
    }


    if(isset($_POST) & !empty($_POST)){
        $sql = "INSERT INTO crud (firstname, lastname, email, gender, age) VALUES(:firstName, :lastName, :email, :gender, :age)";
        //prepare() Prepares a statement for execution and returns a statement object. Ini digunakan ketika bind name
        $result= $db->prepare($sql);
        //ini menggunakan array tanpa menggunakan bindParam/bindValue
        $values = [':firstName' => 'Mr.'.$_POST['fName'],
                    ':lastName' => $_POST['lName'],
                    ':email'    => $_POST['email'],
                    ':gender'   => $_POST['gender'],
                    ':age'      => $_POST['age']
                ];
        $res = $result->execute($values);// execute() is a prepared statement .ini digunakan ketika insert data menggunakan bind name

        if($res){
            echo "Successfully inserted data";
        }else{
            echo "failed to insert data";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD Application in PHP & PDO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .form-group{
            display:flex;
            flex-direction: column;
        }
        .form-group div{
            align-self: flex-start;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <form method="POST" class="form-horizontal col-md-6 colmd-6 col-md-offset-3" style="margin: 0 auto;">
                <h2>Create Operation in CRU Aplication</h2>
                <div class="form-group">
                    <label for="input1" class="control-label">First Name</label>
                    <div class="">
                        <input type="text" name="fName" class="form-control" id="input1" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input2" class="control-label">Last Name</label>
                    <div class="">
                        <input type="text" name="lName" class="form-control" id="input2" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input3" class="control-label">E-Mail</label>
                    <div class="">
                        <input type="text" name="email" class="form-control" id="input3" placeholder="E-Mail">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input4" class="control-label">Gender</label>
                    <div class="" style="display: flex;">
                        <input type="radio" name="gender" class="form-control" id="input4" value="male" checked> Male
                        <input type="radio" name="gender" class="form-control" id="input4" value="female"> Female
                    </div>
                </div>
                <div class="form-group">
                    <label for="input5" class="control-label">Age</label>
                    <div class="">
                        <select name="age" id="input5" class="form-control">
                            <option>Select Your Age</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </div>
</body>
</html>