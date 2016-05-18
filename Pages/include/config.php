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
	}
?>
