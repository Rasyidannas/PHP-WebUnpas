<?php
    try{
        require_once('connect.php');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        $error = $e->getMessage();   
    }

    if(isset($error)){echo $error;}

    $sql = 'SELECT * FROM crud';
    $result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD Application in PHP & PDO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>E-mail</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Extras</th>
                </tr>
                <?php 
                    while($row = $result->fetch(PDO::FETCH_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname'] . ' ' . $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><a href="update.php?id=<?php echo $row ['id']; ?>" class="badge badge-primary">Edit</a>
                    <a href="delete.php?id=<?php echo $row ['id'] ?>" class="badge badge-danger">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>