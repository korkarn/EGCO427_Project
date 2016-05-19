<?php
 	session_start();
  	require_once('config.php');
  
	$name = $_POST['name'];
 	$promotion = $_POST['promotion'];
 	$description = $_POST['description'];
 	$newprice = $_POST['newprice'];
 	$oldprice = $_POST['oldprice'];
 	$addr = $_POST['addr'];
 	$tel = $_POST['tel'];
 	$web = $_POST['web'];
 	$lat = $_POST['lat'];
 	$log = $_POST['log'];
 	$pic1 = $_POST['pic1'];
 	$pic2 = $_POST['pic2'];
 	$pic3 = $_POST['pic3'];
 	$pic4 = $_POST['pic4'];
 	$pic5 = $_POST['pic5'];
	$point = $_POST['point'];
	$datestart = $_POST['datestart'];
	$dateend = $_POST['dateend'];
	$selectClass = $_POST['selectClass'];
  
  	// Connect to database
  	$mysqli = connectDB();
 
 	$name = $mysqli->real_escape_string($name);
 	$promotion = $mysqli->real_escape_string($promotion);
 	$description = $mysqli->real_escape_string($description);
 	$newprice = $mysqli->real_escape_string($newprice);
 	$oldprice = $mysqli->real_escape_string($oldprice);
 	$addr = $mysqli->real_escape_string($addr);
 	$tel = $mysqli->real_escape_string($tel);
 	$web = $mysqli->real_escape_string($web);
 	$lat = $mysqli->real_escape_string($lat);
 	$log = $mysqli->real_escape_string($log);
 	$pic1 = $mysqli->real_escape_string($pic1);
 	$pic2 = $mysqli->real_escape_string($pic2);
 	$pic3 = $mysqli->real_escape_string($pic3);
 	$pic4 = $mysqli->real_escape_string($pic4);
 	$pic5 = $mysqli->real_escape_string($pic5);
	$point = $mysqli->real_escape_string($point);
	$datestart = $mysqli->real_escape_string($datestart);
	$dateend = $mysqli->real_escape_string($dateend);
	$selectClass = $mysqli->real_escape_string($selectClass);
 	
 	$sql_id = "SELECT id, name_main FROM class WHERE name_sub = '$selectClass'";
 	$result= mysqli_query($mysqli, $sql_id) or die("Data not found.");
 	$row = $result->fetch_array(MYSQLI_ASSOC);
 	$id = $row['id'];
 	$_SESSION["name_main"] = $row['name_main'];
 	
 	$sql_insert = "INSERT INTO deal (name,promotion,description,price_new,price_old,address,tel,website,latitude,longitude,pic1,pic2,pic3,pic4,pic5,points,class_id,date_start,date_end) VALUES ('$name','$promotion','$description','$newprice','$oldprice','$addr','$tel','$web','$lat','$log','$pic1','$pic2','$pic3','$pic4','$pic5','$point','$id','$datestart','$dateend')";
 	$result = $mysqli->query($sql_insert);
 	$sql = "SELECT id FROM deal WHERE id = (SELECT max(id) FROM deal)";
 	$result = $mysqli->query($sql);
 	$row = $result->fetch_array(MYSQLI_ASSOC);
 	$number = $row['id'];
 	$_SESSION["class_id"] = $number;
 	$_SESSION["name_sub"] = $selectClass;

 	// echo $_SESSION["name_main"];
 	// echo $_SESSION["name_sub"];

 	header('Location: ../adddeal-success.php');
  
 ?>