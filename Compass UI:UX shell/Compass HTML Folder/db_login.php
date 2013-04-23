<?php

// db_login.php

	$db_connection = mysqli_connect("localhost","stoneho3_juser","j2013","stoneho3_j680");

	// Check connection

	if (mysqli_connect_errno($db_connection))

	{

		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}

?>