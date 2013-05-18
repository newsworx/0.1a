<?php

// assign browser variables to PHP variables

$uid = $_GET["user_id"];
$mem_label = $_GET["mem_label"];
$mem_name = $_GET["mem_name"];
$latitude = $_GET["latitude"];
$longitude = $_GET["longitude"];
$mem_description = $_GET["mem_description"];


?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Basic database access</title>  

</head>  

<body>

<?php

$db_connection = mysqli_connect("localhost","jfolio_juser","j2013","jfolio_j680");

// Check connection

if (mysqli_connect_errno($db_connection))

{

	echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

// retrieve data



$sql="INSERT INTO memories (mem_label, mem_name, latitude, longitude, mem_description) VALUES
('$mem_label', '$mem_name', '$latitude', '$longitude', '$mem_description')";

echo $sql;

if (!mysqli_query($db_connection,$sql))

{

die('Error: ' . mysqli_error($db_connection));

}

echo "1 record added";

mysqli_close($db_connection);

?>

</body>

</html>