<?php
    try{
        require_once('connect.php');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        $error = $e->getMessage();   
    }

    //ini untuk menampilkan data atau select data menggunakan bind name anonymous
    $selSql = "SELECT * FROM crud WHERE id = ?";
    $selResult= $db->prepare($selSql);
    $selRes = $selResult->execute(array($_GET['id']));//ini $_GET['id'] akan melampirkan di $selSql
    $r = $selResult->fetch(PDO::FETCH_ASSOC);//ini akan mengambil data yand sudah ada berdasarkan id dan memnggil $r untuk menampilkannya


    if(isset($_POST) & !empty($_POST)){
        $sql = "UPDATE crud SET firstname = :firstName, lastname = :lastName, email = :email, gender = :gender, age = :age WHERE id = :id";
        //prepare() Prepares a statement for execution and returns a statement object. Ini digunakan ketika bind name
        $result= $db->prepare($sql);
        //ini menggunakan array tanpa menggunakan bindParam/bindValue
        $values = [':firstName' => 'Mr.'.$_POST['fName'],
                    ':lastName' => $_POST['lName'],
                    ':email'    => $_POST['email'],
                    ':gender'   => $_POST['gender'],
                    ':age'      => $_POST['age'],
                    ':id'       =>$_GET['id']
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
                        <input type="text" name="fName" class="form-control" id="input1" value="<?php echo $r['firstname']?>" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input2" class="control-label">Last Name</label>
                    <div class="">
                        <input type="text" name="lName" class="form-control" id="input2" value="<?php echo $r['lastname']?>" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input3" class="control-label">E-Mail</label>
                    <div class="">
                        <input type="text" name="email" class="form-control" id="input3" value="<?php echo $r['email']?>" placeholder="E-Mail">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input4" class="control-label">Gender</label>
                    <div class="" style="display: flex;">
                        <input type="radio" name="gender" class="form-control" id="input4" value="male" <?php if($r['gender'] === 'male'){echo "checked";} ?>> Male
                        <input type="radio" name="gender" class="form-control" id="input4" value="female" <?php if($r['gender'] === 'female'){echo "checked";} ?>> Female
                    </div>
                </div>
                <div class="form-group">
                    <label for="input5" class="control-label">Age</label>
                    <div class="">
                        <select name="age" id="input5" class="form-control">
                            <option>Select Your Age</option>
                            <option value="20" <?php if($r['age'] === '20'){echo "selected";} ?>>20</option>
                            <option value="21" <?php if($r['age'] === '21'){echo "selected";} ?>>21</option>
                            <option value="22" <?php if($r['age'] === '22'){echo "selected";} ?>>22 </option>
                            <option value="23" <?php if($r['age'] === '23'){echo "selected";} ?>>23</option>
                            <option value="24" <?php if($r['age'] === '24'){echo "selected";} ?>>24</option>
                            <option value="25" <?php if($r['age'] === '25'){echo "selected";} ?>>25</option>
                            <option value="26" <?php if($r['age'] === '26'){echo "selected";} ?>>26</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </div>
</body>
</html>