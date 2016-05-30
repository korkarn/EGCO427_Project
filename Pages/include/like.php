<?php
	session_start(); 
	require_once('function.php');
	//get id from 'singdeal' page
	$id = $_GET['id'];
	$like = 1;
	$users_id = $_SESSION['user_id'];
	
	//get points from users table
	$mysqli = connectDB(); 
	$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$a = $row['points'];

	$mysqli = connectDB();
	//call addlike function
	addlike($like,$users_id,$id,$mysqli);
	//call addpointlike function
	addpointlike($a,$mysqli);
	header('Location: ../singdeal.php?id='.$id);
?>