<?php

$first_name 	= $_POST["first_name"];
$last_name 		= $_POST["last_name"];
$user_id 		= $_POST["user_id"];
$password		= $_POST["password"];

require 'constants.php';

// Check connection

if (mysqli_connect_errno($db_connection))
{

echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

$query = "INSERT INTO users (first_name, last_name, user_id, password, `e-mail`) VALUES ('$first_name','$last_name','$user_id','$password','$user_id')";

// send email

$to = $user_id;
$subject = "[Memory Lane] Welcome to Memory Lane!";
$message = "You have successfully created an account on Memory Lane!\n\nYou're ready to start sharing memories and telling stories!\n\nUser ID: " . $user_id . "\nPassword: " . $password . "\n\n--\nThe Newsworx Apps Team\nadmin@newsworxapps.com\nTwitter: @memorylaneapp\n\n*** Share memories and tell stories with Memory Lane for Android http://newsworxapps.com ***\n\n--- Newsworx is a student-powered project of the SF State Journalism Department ---";
$from = "Newsworx Apps Team<admin@newsworxapps.com>";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);


if (!mysqli_query($db_connection,$query))

{

die('Error: ' . mysqli_error($db_connection));

}

mysqli_close($db_connection);

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