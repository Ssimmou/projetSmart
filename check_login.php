<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="login"; // Database name
$tbl_name="login"; // Table name



$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// username and password sent from form
$myUserName=$_POST['login'];
$myPassWord=$_POST['password'];


$myUserName = stripslashes($myUserName);
$myPassWord = stripslashes($myPassWord);


$sql="SELECT * FROM $tbl_name WHERE login='$myUserName' and password='$myPassWord'";

$result = $conn->query($sql);

$count= $result->num_rows;

$user_info = $result->fetch_assoc();

if ($count == 0) {
    
    $_SESSION["loggedIn"] = false;
    header('Location:login.php');
}else{
    $_SESSION["loggedIn"] = true;
    header("location:index.php");
}

?>