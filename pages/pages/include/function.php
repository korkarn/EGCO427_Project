<?php
	require_once('config.php');
	function connectDatabase()
	{
		// Connect to database
		$mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		// Check connection
		if (mysqli_connect_errno()) {
			printf("Unable to connect to database: %s", mysqli_connect_error());
			exit();
		}
		return $mysqli;
	}

	function getProfile($id,$mysqli)
	{
		$sql = "SELECT * FROM users WHERE id = '$id'";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row;
	}

	function getNextProfile($mysqli,$id)
	{
		$sql = "SELECT * FROM users WHERE id = (SELECT min(id) FROM users WHERE id > $id)";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$number = $row['id'];
		return $number;
	}

	function getPrevProfile($mysqli,$id)
	{
		$sql = "SELECT * FROM users WHERE id = (SELECT max(id) FROM users WHERE id < $id)";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$number = $row['id'];
		return $number;
	}

	function updateProfile($id,$email,$tel,$address,$mysqli)
	{
		$id = $mysqli->real_escape_string($id);
		$email = $mysqli->real_escape_string($email);
		$tel = $mysqli->real_escape_string($tel);
		$address = $mysqli->real_escape_string($address);

		$sql = "UPDATE users SET email='$email',tel='$tel',address='$address' WHERE id = '$id'";
		$result = $mysqli->query($sql);

	}
?>