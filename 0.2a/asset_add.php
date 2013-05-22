<?php

$memento_type 			= $_GET["memento_type"] ;
$memento_name  			= $_GET["memento_name"] ;
$memento_url 			= $_GET["memento_url"]  ;
$memento_description 	= $_GET["memento_description"]  ;

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

$query="INSERT INTO assets (asset_url, asset_type, asset_name, asset_description) 
VALUES ('$memento_url,'$memento_type','$memento_name','$memento_description')";	

if (!mysqli_query($db_connection,$query))

{

die('Error: ' . mysqli_error($db_connection));

}

mysqli_close($db_connection);

header('Location: default.php');

?>