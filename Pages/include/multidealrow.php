<?php 
 	session_start();
    $subName = $_SESSION['name_sub'];
  	require_once('config.php');
  	$mysqli = connectDB();

  	$day_comp = date("Y-m-d");

  	$sql = "SELECT * FROM deal WHERE (date_start < '$day_comp' AND date_end >= '$day_comp') AND (class_id = (SELECT id FROM class WHERE name_sub = '$subName')) ORDER BY date_start DESC";
  	$result = mysqli_query($mysqli, $sql);
 	$arr = [];
 	if (mysqli_num_rows($result) > 0) {
 		while ($row = mysqli_fetch_assoc($result)) {
 			$temp = array('Id' => $row['id'], 'Nmae' => $row['name'], 'Promotion' => $row['promotion'], 'Description' => $row['description'],'Pricenew' => $row['price_new'], 'Priceold' => $row['price_old'], 'Addr' => $row['address'], 'Tel' => $row['tel'], 'Web' => $row['website'], 'Lat' => $row['latitude'], 'Lon' => $row['longitude'], 'Pic1' => $row['pic1'], 'Pic2' => $row['pic2'], 'Pic3' => $row['pic3'], 'Pic4' => $row['pic4'], 'Pic5' => $row['pic5'], 'Point' => $row['points'], 'Class_id' => $row['class_id'], 'DateStart' => $row['date_start'], 'DateEnd' => $row['date_end']);
 			array_push($arr, $temp);
 		}
 		echo json_encode($arr);
 		$_SESSION['name_sub'] = $subName;
 	}
 	else{
 		echo json_encode($arr);
 	}
 	mysqli_close($mysqli);
 ?>