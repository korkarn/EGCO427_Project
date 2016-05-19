<?php
	require_once('config.php');
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

	function getDeal($id,$mysqli)
	{
		$sql = "SELECT * FROM deal WHERE class_id = 1 ORDER BY date_start DESC";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row =$res;
        }
        return $row;
	}

	function getDeal1($id,$mysqli)
	{
		$sql = "SELECT * FROM deal WHERE class_id = 6 ORDER BY date_start DESC";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row1 =$res;
        }
        return $row1;
	 }

	function getDeal2($id,$mysqli)
	{
		$sql = "SELECT * FROM deal WHERE class_id = 7 ORDER BY date_start DESC";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row2 =$res;
        }
        return $row2;
	}

	function getDeal3($id,$mysqli)
	{
		$sql = "SELECT * FROM deal WHERE class_id = 11 ORDER BY date_start DESC";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		while ($res = $result->fetch_array(MYSQLI_ASSOC))
        {
            $row3 =$res;
        }
        return $row3;
	}
?>