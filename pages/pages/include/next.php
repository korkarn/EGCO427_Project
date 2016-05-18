<?php
require_once('function.php');
    $id = $_GET['id'];
	$mysqli = connectDatabase();
	$number = getNextProfile($mysqli,$id);
	header('Location: ../profile.php?id='.$number);
?>