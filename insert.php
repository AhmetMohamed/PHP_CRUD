<?php
include "db_config.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];

    $sql = "INSERT INTO `project_table`(`name`, `email`, `phone`) VALUES ('$name','$email','$phone')";
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
        <input type="text" name="name" placeholder="Name" autocomplete="off">
        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <input type="number" name="number" placeholder="Phone" autocomplete="off">
        <button type="submit" name="submit">Submit</button>
    </form>

    <div>
        <table id="customers">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include "db_config.php";
                    $sql = "SELECT * FROM `project_table`";
                    $result = mysqli_query($connection, $sql);
                    while($row = mysqli_fetch_array($result)){

                    ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td>
                        <a href="update.php?updateID=<?php echo $row['id']  ?>"><i class='bx bx-edit bx-sm'
                                style="color: #EAA706;"></i></a>
                        <a href="delete.php?deleteID=<?php echo $row['id'] ?>"><i class='bx bxs-trash bx-sm'
                                style="color: #EAA706;"></i></a>
                    </td>
                </tr>

                    <?php
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>