<?php
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$user_id = $_POST["user_id"];
$password = $_POST["password"];
$e_mail = $_POST["e_mail"];



?>

<?php

// db_login.php

$db_connection = mysqli_connect("localhost","stoneho3_juser","j2013","stoneho3_j680");

// Check connection

if (mysqli_connect_errno($db_connection))
{

echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

echo $db_connection;
?>

<?php

$query = "INSERT INTO users (first_name, last_name, user_id, password, e-mail) Values ('$first_name' , '$last_name' , '$user_id' , '$password' , '$e_mail' )";

echo $query;



?>