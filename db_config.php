<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$database = 'your_db_name';

$connection = mysqli_connect($serverName, $username, $password, $database);
if(!$connection){
	echo "Error: " . mysql_connect_error($connection);
}

// Create Database
/*
$sql = "create database your_db_name";
$result = mysqli_query($connection, $sql);
if($result){
	echo "Database is created successfully";
}else {
	echo "Error";
}
*/ 

// Create Table
/*
$sql = "CREATE TABLE your_table_name
(
	id int not null auto_increment primary key,
	name text not null,
	email text not null,
	phone int not null
)
";
$result = mysqli_query($connection, $sql);
if($result) {
	echo "table is created successfully";
}else {
	echo "Error";
}
*/

?>