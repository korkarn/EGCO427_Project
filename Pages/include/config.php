<?php
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'egco427');
	define('DB_PASSWORD', 'egco427');
	define('DB_DATABASE', 'project_deal');

	function connectDB()
	{
    	global $mysqli; // using the global $link
    	$mysqli = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die("Could not connect to host");
    	mysqli_select_db($mysqli, DB_DATABASE) or die("Could not find database");
        //mysqli_query("SET NAMES UTF8");
        mysqli_query($mysqli,"SET NAMES UTF8" );
        mysqli_query($mysqli,"SET collation_connection =utf8_general_ci");
        mysqli_query($mysqli,"SET character_set_results=utf8");
        mysqli_query($mysqli,"SET character_set_client=utf8");
        mysqli_query($mysqli,"SET character_set_connection=utf8");
    	return $mysqli;
	}

?>