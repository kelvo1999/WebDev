<?php
$databaseHost = 'localhost';
$databaseName = 'crimes'; 
$Username = 'root';
$Password = '';
$connection = mysqli_connect($databaseHost, $Username, $Password);
if (!$connection){
die("Database Connection Failed" .mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $databaseName);
if (!$select_db){
die("Database Selection Failed" .mysqli_error($connection));
}
?>