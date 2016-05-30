<?php
session_start();
require_once('function.php');
	//get values from 'editprofile' page when have edit profile
	$id = $_SESSION['user_id'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];

	$mysqli = connectDB();
	//call updateProfile function
	updateProfile($id,$username,$email,$tel,$address,$mysqli);
	header('Location: ../profile.php?id='.$id);
?>