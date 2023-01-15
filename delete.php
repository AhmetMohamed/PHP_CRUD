<?php
include "db_config.php";
$id = $_GET['deleteID'];
$sql = "DELETE FROM `project_table` WHERE id=$id";
$result = mysqli_query($connection, $sql);
if($result){
	header("location: insert.php");
}else {
	echo "ERROR";
}

?>