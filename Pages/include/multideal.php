<?php 
 	session_start();
 	// $_SESSION['name_main'] = "BEAUTY";
 	// $_SESSION['name_sub'] = "Makeup";
 	$mainName = $_SESSION['name_main'];
 	$subName = $_SESSION['name_sub'];
  	require_once('config.php');
  	$mysqli = connectDB();

  	$day_comp = date("Y-m-d");

  	$sql_id = "SELECT id,name_sub FROM class WHERE name_main = '$mainName'";
 	$result= mysqli_query($mysqli, $sql_id) or die("Data not found.");
 	$arr_name_sub = [];
 	$i = 0;
 	if (mysqli_num_rows($result) > 0) {
 		while ($row = mysqli_fetch_assoc($result)) {
 			$arr_name_sub[$i] = $row['name_sub'];
			$i = $i +1;
 		}
 	}
 	else{
 		echo "0 results.";
 	}
	$_SESSION['name_sub1'] = $arr_name_sub[0];
	$_SESSION['name_sub2'] = $arr_name_sub[1];
	$_SESSION['name_sub3'] = $arr_name_sub[2];

	echo json_encode($arr_name_sub);
 ?>