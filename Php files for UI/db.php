<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Access Database</title>  

</head>  

<body>

<?php


$last_name_string = $_GET['last_name'];

$db_connection = mysqli_connect("localhost","jfolio_juser","j2013","jfolio_j680");

if (mysqli_connect_errno($db_connection))

{

	echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$query = "SELECT * FROM users WHERE user_num = 1";

$result = mysqli_query($db_connection,$query);

echo $query . "<p />";

while ($row = mysqli_fetch_array($result))

{

	echo "<a href=\"edit.php?user_num=" . $row['user_num'] . "\">Edit</a> " . "Name: " . $row['first_name'] . " " . $row['last_name'] . "<br />" . " user id: " . $row['user_id'];
	echo "<br />";

}

mysqli_close($db_connection);

?>

</body>

</html>