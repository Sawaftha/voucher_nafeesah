<?php
include ("globals.php");
ob_start();

session_start();
// Create connection
$conn = mysqli_connect(server, username, password,db_name);

mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>