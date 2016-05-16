<?php
require_once('function.php');
    $user_id = $_GET['id'];
	$mysqli = connectDatabase();
	$number = getNextProfile($mysqli,$user_id);
	header('Location: ../profile.php?id='.$number);
?>