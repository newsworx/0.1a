<?php

// db_login

$db_connection = mysqli_connect("localhost","jfolio_juser","j2013","jfolio_j680");

	// Check connection

	if (mysqli_connect_errno($db_connection))

	{

		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}

?>