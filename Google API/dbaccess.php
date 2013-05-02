<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Database access</title>  

</head>  

<body>

<?php

$username="jfolio";
$password="$fsU2013";
$hostname="localhost";

$db_connection = mysqli_connect($hostname,$username,$password);

// Check connection

if (mysqli_connect_errno($db_connection))

{

	echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("memories",$dbhandle) 
  or die("Could not select memories");

//execute the SQL query and return records
$result = mysql_query("SELECT mem_id,latitude,longitude,mem_label,mem_name,mem_description FROM memories");

//fetch the data from the database 
while ($row = mysql_fetch_array($result)) {
   echo "Memory ID:".$row{'mem_id'}." Latitude:".$row{'latitude'}." Longitude:". $row{'longitude'}." Memory Label:".$row{'mem_label'}." Memory Name: ".$row{'mem_name'}." Memory Description: ".$row{'mem_description'};
}
//display data

//close the connection
mysql_close($dbhandle);

?>

</body>

</html>