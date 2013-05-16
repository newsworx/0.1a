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

<!DOCTYPE html> 
<html> 
<head> 
	<title>Compass 0.1a</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 


 <link rel="stylesheet" href="css/themes/memorylane_v1.css" />
 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" /> 
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script> 


</head> 
<body>  

<div data-role="page">

<div data-role="header">
    <h1><img src="Images/logo.png" class="ui-center"/> </h1>
</div>

</body>

</html>