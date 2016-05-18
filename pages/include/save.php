<?php
require_once('function.php');
	$id = $_POST['id'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];

	$mysqli = connectDatabase();
	updateProfile($id,$email,$tel,$address,$mysqli);
	header('Location: ../profile.php?id='.$id);

?>