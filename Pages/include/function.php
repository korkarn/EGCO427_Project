<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	require_once('config.php');
	//get users id
	function getProfile($id,$mysqli)
	{
		$sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."'";
		$result = $mysqli->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row;
	}

	//update profile after edit profile
	function updateProfile($id,$username,$email,$tel,$address,$mysqli)
	{
		$id = $mysqli->real_escape_string($id);
		$username = $mysqli->real_escape_string($username);
		$email = $mysqli->real_escape_string($email);
		$tel = $mysqli->real_escape_string($tel);
		$address = $mysqli->real_escape_string($address);

		$sql = "UPDATE users SET username='$username',email='$email',tel='$tel',address='$address' WHERE id = '$id'";
		$result = $mysqli->query($sql);
	}

	//upload(edit) profile picture
	function upload($id, $pic, $mysqli)
    {
        $path = $mysqli->real_escape_string($path);

        $sql = "UPDATE `users` SET `pic` = '$pic' WHERE `id` = $id";
        $result = $mysqli->query($sql);
        return $result; // returns true or false
    } 

    //get deals id
	function getDeal($id,$mysqli)
	{	
		$day_comp = date("Y-m-d");
		$sql_dateStart = "SELECT * FROM deal WHERE (date_start < '$day_comp' AND date_end >= '$day_comp') AND class_id = $id ORDER BY date_start DESC";
		$result= mysqli_query($mysqli, $sql_dateStart) or die("Data not found.");
	 	$row = $result->fetch_array(MYSQLI_ASSOC);
	 	$pic = $row['pic1'];

	 	return $pic;
	}

	//add comments
	function addcomment($comment,$users_id,$id,$mysqli)
	{
		$comment = $mysqli->real_escape_string($comment);
		$users_id = $mysqli->real_escape_string($users_id);
		$id = $mysqli->real_escape_string($id);
		$date = date("Y-m-d");

		$sql = "INSERT INTO rating_comment (comment,users_id,date,deal_id) VALUES ('$comment',$users_id,'$date',$id)";
		$result = $mysqli->query($sql);
		return $result;
	}

	//add points after comments
	function addpointment($a,$mysqli)
	{
		$points = $a + 5;

		$sql = "UPDATE users SET points = $points WHERE id = '".$_SESSION['user_id']."'";
		$result = $mysqli->query($sql);
		return $result;
	}

	//add like after click like button
	function addlike($like,$users_id,$id,$mysqli)
	{
		$like = $mysqli->real_escape_string($like);
		$users_id = $mysqli->real_escape_string($users_id);
		$id = $mysqli->real_escape_string($id);
		$date = date("Y-m-d");

		$sql = "INSERT INTO rating_like (like_num,users_id,date,deal_id) VALUES ($like,$users_id,'$date',$id)";
		$result = $mysqli->query($sql);
		return $result;
	}

	//add points after click like button
	function addpointlike($a,$mysqli)
	{
		$points = $a + 2;

		$sql = "UPDATE users SET points = $points WHERE id = '".$_SESSION['user_id']."'";
		$result = $mysqli->query($sql);
		return $result;
	}

	//add history from buy deal
	function buydeal($id,$users_id,$a,$b,$mysqli)
	{
		$id = $mysqli->real_escape_string($id);
		$users_id = $mysqli->real_escape_string($users_id);
		$a = $mysqli->real_escape_string($a);
		$b = $mysqli->real_escape_string($b);
		$date = date("Y-m-d");

		$sql = "INSERT INTO history (users_id,deal_id,deal_name,date,deal_points) VALUES ($users_id,$id,'$b','$date',$a)";
		$result = $mysqli->query($sql);
		return $result;
	}

	//update points after buy deal
	function reducepoints($points,$mysqli)
	{
		$sql = "UPDATE users SET points = $points WHERE id = '".$_SESSION['user_id']."'";
		$result = $mysqli->query($sql);
		return $result;
	}
?>