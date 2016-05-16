<?php
require_once('function.php');
    $user_id = $_GET['id'];
	$mysqli = connectDatabase();
	$number = getPrevProfile($mysqli,$user_id);
	header('Location: ../profile.php?id='.$number);
?>