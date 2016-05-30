<?php
	session_start(); 
	require_once('function.php');

	//get points from users table
	$mysqli = connectDB(); 
	$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$a = $row['points'];

	//get 'id_deal' 'comment' and 'user_id' from 'singdeal' page
	$id = $_GET['id'];
	$comment = $_POST['comment'];
	$users_id = $_SESSION['user_id'];
	
	$mysqli = connectDB();
	//call addcomment function
	addcomment($comment,$users_id,$id,$mysqli);
	//call addpointment function
	addpointment($a,$mysqli);
	header('Location: ../singdeal.php?id='.$id);
?>