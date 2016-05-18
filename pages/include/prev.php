<?php
require_once('function.php');
    $id = $_GET['id'];
	$mysqli = connectDatabase();
	$number = getPrevProfile($mysqli,$id);
	header('Location: ../profile.php?id='.$number);
?>