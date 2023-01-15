<?php
include "db_config.php";
if(isset($_POST['submit'])){
    $id = $_GET['updateID'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];

    $sql = "UPDATE `project_table` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    if($result){
        header("location: insert.php");
    }
    else {
        echo "Error";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Css/style.css">
    <title>CRUD</title>
</head>

<body>
    <h3>PHP CRUD WITH MYSQL</h3>
    <form action="" method="post">
        <?php 
            include "db_config.php";
            $id = $_GET['updateID'];
            $sql = "SELECT * FROM `project_table` WHERE id=$id ";
            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_array($result);
        ?>
        <input type="text" name="name" placeholder="Name" autocomplete="off" value="<?php echo $row['name'] ?>">
        <input type="text" name="email" placeholder="Email" autocomplete="off" value="<?php echo $row['email'] ?>">
        <input type="number" name="number" placeholder="Phone" autocomplete="off" value="<?php echo $row['phone'] ?>">
        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>