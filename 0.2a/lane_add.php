<?php

$lane_name 			= $_GET["lane_name"];
$lane_description 	= $_GET["lane_description"];

require 'constants.php';

// detect authentication cookie. if logged in, proceed.
// if not, kick user back to login screen

if ($_COOKIE['compass_auth'] == '')

{

	header('Location: login.php');

}

// grab user number from saved cookie

$uid = $_COOKIE['compass_auth'];

// query for user details

$query = "SELECT * FROM users WHERE user_num = " . $uid;

$result = mysqli_query($db_connection,$query);

while ($row = mysqli_fetch_array($result))

{

	// assign user details to php variables

	$first_name 	= $row["first_name"];
	$last_name 		= $row["last_name"];
	$user_id 		= $row["user_id"];

}

$query="INSERT INTO lanes (user_num, lane_name, lane_description) 
VALUES ('$uid','$lane_name','$lane_description')";	

if (!mysqli_query($db_connection,$query))

{

die('Error: ' . mysqli_error($db_connection));

}

mysqli_close($db_connection);

header('Location: default.php');

?>