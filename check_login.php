<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="simmou"; // Database name
$tbl_name="login"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['login'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE login='$myusername' and password='$mypassword'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);

$user_info = mysql_fetch_assoc($result);

if ($count == 0) {
    
    $_SESSION["loggedIn"] = false;
    header('Location:login.php');
}else{
    $_SESSION["loggedIn"] = true;
    header("location:here.php");
}
/*
 if( isset($user_info['url']) ) {

 session_register("myusername");
 session_register("mypassword");
     header('Location: ' . $user_info['url']); //Redirects to the supplied url from the DB
 } else {
  
 }*/
 ?>