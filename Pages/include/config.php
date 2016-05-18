<?php
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'egco427');
	define('DB_PASSWORD', 'egco427');
	define('DB_DATABASE', 'project_deal');

	function connectDB()
	{
		// Connect to database
		$mysqli = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		// Check connection
		if (mysqli_connect_errno()) {
			printf("Unable to connect to database: %s", mysqli_connect_error());
			exit();
		}
		return $mysqli;

		global $mysqli; // using the global $mysqli
    	$mysqli = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD) or die("Could not connect to host");
    	mysqli_select_db($mysqli, DB_DATABASE) or die("Could not find database");
        mysql_query("SET NAMES UTF8");
        mysqli_query($mysqli,"SET NAMES UTF8" );
        mysqli_query($mysqli,"SET collation_connection =utf8_general_ci");
        mysqli_query($mysqli,"SET character_set_results=utf8");
        mysqli_query($mysqli,"SET character_set_client=utf8");
        mysqli_query($mysqli,"SET character_set_connection=utf8");
    	return $mysqli;
	}
?>