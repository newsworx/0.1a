<?php

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Edit Profile</title>  

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

$update_query = "UPDATE users SET first_name=\"" . $_GET["first_name"] . "\",last_name=\"" . $_GET["last_name"] . "\",user_id=\"" . $_GET["user_id"] . "\",password=\"" . $_GET["password"] . "\" WHERE user_num = " . $_GET['user_num'];

echo "Update query: " . $update_query . "<p />";

mysqli_query($db_connection,$update_query);

}

$query = "SELECT * FROM users WHERE user_num = " . $_GET["user_num"];
$result = mysqli_query($db_connection,$query);

echo $query . "<p />";

echo "<form action=\"edit.php\" method=\"get\" name=\"edit\">";

while ($row = mysqli_fetch_array($result))

{

	echo "<input type=\"hidden\" name=\"user_num\" value=\"" . $row['user_num'] . "\" />";
	echo "First Name: " . "<input name=\"first_name\" value=\"" . $row['first_name'] . "\" />";
	echo "Last Name: " . "<input name=\"last_name\" value=\"" . $row['last_name'] . "\" />";
	echo "User I.D.: " . "<input name=\"user_id\" value=\"" . $row['user_id'] . "\" />";
	echo "Password: " . "<input name=\"password\" value=\"" . $row['password'] . "\" />";
}

mysqli_close($db_connection);

echo "<input type=\"submit\" name=\"submit\" value=\"submit\" />";
echo "</form>";

?>

</body>

</html>