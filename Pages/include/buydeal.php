<?php
	session_start(); 
	require_once('function.php');

	//get id from 'singdeal' page
	$id = $_GET['id'];
	$users_id = $_SESSION['user_id'];

	//get points from users table
	$mysqli = connectDB(); 
	$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$pUser = $row['points'];

	//get deal_name and deal_points from deal table
	$sql = "SELECT * FROM deal WHERE id = $id";
	$result = $mysqli->query($sql);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$pDeal = $row['points'];
	$b = $row['name'];

	//if user points < deal points can't buy deal
	if($pUser < $pDeal)
		{
			header('Location: ../singdeal.php?id='.$id);
		}
	else
		{
			$points = $pUser-$pDeal;
			$mysqli = connectDB();
			//call buydeal function
			buydeal($id,$users_id,$pDeal,$b,$mysqli);
			//call reducepoints function
			reducepoints($points,$mysqli);
			header('Location: ../../fpdf181/tutorial/pdf.php?id='.$id);
		}
?>