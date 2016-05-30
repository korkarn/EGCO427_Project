<?php 
session_start(); 

// Include required MySQL configuration file and functions 
require_once('include/function.php'); 

// Connect to database 
$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE); 
// Check connection 
if (mysqli_connect_errno()) { 
printf("Unable to connect to database: %s", mysqli_connect_error()); 
exit(); 
}

// Escape any unsafe characters before querying database 
$username = $mysqli->real_escape_string($_POST['username']); 
$password = $mysqli->real_escape_string($_POST['password']); 

// Construct SQL statement for query & execute 
$sql   = "SELECT * FROM users WHERE username = '$username' AND  password = '$password'"; 
$result = $mysqli->query($sql); 
if(is_object($result) && $result->num_rows==1)
{
	$row = mysqli_fetch_assoc($result);
	$_SESSION['login'] = true; 
	$_SESSION['username'] = $username;
	$_SESSION['admin'] = $row['admin'];
	$_SESSION['user_id'] = $row['id'];
	$_SESSION['points'] = $row['points'];
	$_SESSION['user_pic'] = $row['pic'];
	echo "correct" ;
}
else
{
	header('location: /login.php');
} 

?>