<?php
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
	$dessert = $_POST['dessert'];
	$food = $_POST['food'];
	$drink = $_POST['drink'];
	$transport = $_POST['transport'];
	$tour = $_POST['tour'];
	$hotel = $_POST['hotel'];
	$makeup = $_POST['makeup'];
	$fashion = $_POST['fashion'];
	$beauty = $_POST['beauty'];
	$entertainment = $_POST['entertainment'];
	$sport = $_POST['sport'];
	$electronic = $_POST['electronic'];

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
	$dessert = $mysqli->real_escape_string($dessert);
	$food = $mysqli->real_escape_string($food);
	$drink = $mysqli->real_escape_string($drink);
	$transport = $mysqli->real_escape_string($transport);
	$tour = $mysqli->real_escape_string($tour);
	$hotel = $mysqli->real_escape_string($hotel);
	$makeup = $mysqli->real_escape_string($makeup);
	$fashion = $mysqli->real_escape_string($fashion);
	$beauty = $mysqli->real_escape_string($beauty);
	$entertainment = $mysqli->real_escape_string($entertainment);
	$sport = $mysqli->real_escape_string($sport);
	$electronic = $mysqli->real_escape_string($electronic);

	echo $name;
	echo $promotion;
	echo $description;
	echo $newprice;
	echo $oldprice;
	echo $addr;
	echo $tel;
	echo $web;
	echo $lat;
	echo $log;
	echo $pic1;
	echo $pic2;
	echo $pic3;
	echo $pic4;
	echo $pic5;
	echo $point;
	echo $datestart;
	echo $dateend;
	echo $dessert;
	echo $food;
	echo $drink;
	echo $transport;
	echo $tour;
	echo $hotel;
	echo $makeup;
	echo $fashion;
	echo $beauty;
	echo $entertainment;
	echo $sport;
	echo $electronic;

	// $sql_uid = "SELECT uid FROM user WHERE creditcard = '$creditCardNo'";
	// $result= mysqli_query($mysqli, $sql_uid) or die("Data not found.");
	// $row = $result->fetch_array(MYSQLI_ASSOC);
	// $uid = $row['uid'];

	// $sql_insert = "INSERT INTO cardstatement (uid,number,date,sellerno,product,price) 
	// 			VALUES ('$uid','$creditCardNo','$date','$sellerNo','$product','$price')";
	// $result = $mysqli->query($sql_insert);

	// $sql = "SELECT * FROM cardstatement WHERE transno = (SELECT max(transno) FROM cardstatement)";
	// $result = $mysqli->query($sql);
	// $row = $result->fetch_array(MYSQLI_ASSOC);
	// $number = $row['transno'];

	// header('Location: ../cardstate.php?id='.$number);

?>