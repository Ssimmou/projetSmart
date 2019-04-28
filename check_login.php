<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="login"; // Database name
$tbl_name="login"; // Table name

// Connect to server and select database.


$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// username and password sent from form
$myusername=$_POST['login'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);


$sql="SELECT * FROM $tbl_name WHERE login='$myusername' and password='$mypassword'";

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