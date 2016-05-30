<?php
 	session_start();
  	require_once('config.php');
  
	$name = $_POST['username'];
 	$password = $_POST['password'];
 	$email = $_POST['email'];
 	$addr = $_POST['addr'];
 	$tel = $_POST['tel'];
 	$pic = $_POST['pic'];
 	$folder = "../images/users/";
    $path = $folder.$pic;

    if( move_uploaded_file($_FILES["img"]["tmp_name"], $path) ) 
    {
        // Connect to database
	  	$mysqli = connectDB();
	 
	 	$name = $mysqli->real_escape_string($name);
	 	$password = $mysqli->real_escape_string($password);
	 	$email = $mysqli->real_escape_string($email);
	 	$addr = $mysqli->real_escape_string($addr);
	 	$tel = $mysqli->real_escape_string($tel);
	 	$pic = $mysqli->real_escape_string($pic);

	 	$password = md5($password);
	 	$day = date("Y-m-d");
	 	
	 	$sql_insert = "INSERT INTO users (username,password,pic,email,tel,address,points,date,admin) VALUES ('$name','$password','$pic','$email','$tel','$addr','100','$day','0')";
	 	$result = $mysqli->query($sql_insert);
	 	$sql = "SELECT id FROM users WHERE id = (SELECT max(id) FROM users)";
	 	$result = $mysqli->query($sql);
	 	$row = $result->fetch_array(MYSQLI_ASSOC);
	 	$number = $row['id'];
	 	$_SESSION["newuser_id"] = $number;
	 	$_SESSION["signup"] = true;

	 	header('Location: ../signup-success.php');
    } 
    else {
       echo 'Error uploading file';
    }
 	
  	
  
 ?>