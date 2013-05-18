<?php

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



if (mysqli_connect_errno($db_connection))

{

	echo "Failed to connect to MySQL: " . mysqli_connect_error();

}



if(isset($_GET['submit'])) 
{ 


$mem_label= $_GET["mem_label"];
$mem_name= $_GET["mem_name"];
$mem_description= $_GET["mem_description"];
$mem_id= $_GET["mem_id"];
$mem_id= $_GET["longitude"];
$mem_id= $_GET["lat"];

$update_query = "UPDATE memories SET mem_label='$mem_label', mem_name='$mem_name',  mem_description='$mem_description', longitude='$longitude', lat='$lat'" . "WHERE mem_id = $mem_id";


mysqli_query($db_connection,$update_query);

}



$query = "SELECT * FROM memories WHERE mem_id = " . $_GET["mem_id"];
$result = mysqli_query($db_connection,$query);

echo "<form action=\"TEAM_MEMORY_LANES_DB.php\" method=\"get\" name=\"edit\">";

while ($row = mysqli_fetch_array($result))

{

echo "<input type=\"hidden\" name=\"mem_id\" value=\"" . $row['mem_id'] . "\" />";
echo "Label <input name=\"mem_label\" value=\"" . $row['mem_label'] . "\" <p />";
echo "Name <input name=\"mem_name\" value=\"" . $row['mem_name'] . "\" /> <p />";
echo "Description <input name=\"mem_description\" value=\"" . $row['mem_description'] . "\" <p />";
echo "Longitude <input name=\"longitude\" value=\"" . $row['longitude'] . "\" <p />";
echo "Latitude <input name=\"latitude\" value=\"" . $row['latitude'] . "\" <p />";
	
}



mysqli_close($db_connection);

echo "<input type=\"submit\" name=\"submit\" value=\"submit\" />";
echo "</form>";

echo "<a href=\"TEAM_MEMORY_LANES_DB.php\">Return to list</a>";

?>

</body>

</html>