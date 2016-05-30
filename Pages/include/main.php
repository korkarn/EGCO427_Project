<?php
	session_start();
  	require_once('config.php');
  	require_once('function.php');

  	// Connect to database
  	$mysqli = connectDB();

  	$arr = [];
  	for ($id=1; $id <= 12 ; $id++) {
  		$str = "pic".$id;

  		$arr[0][$str] = getdeal($id,$mysqli);
  	}
  	mysqli_close($mysqli);
  	echo json_encode($arr);
?>