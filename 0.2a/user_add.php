<?php

$first_name 	= $_POST["first_name"];
$last_name 		= $_POST["last_name"];
$user_id 		= $_POST["user_id"];
$password		= $_POST["password"];

$query_string = "?";
$val_errors = 0;

if (strlen($first_name) < 1)

{

$query_string = $query_string . "first_name=req&";
$val_errors++;

}

else

{

$query_string = $query_string . "first_name=" . $first_name . "&";

}

if (strlen($last_name) < 1)

{

$query_string = $query_string . "last_name=req&";
$val_errors++;


}

else

{

$query_string = $query_string . "last_name=" . $last_name . "&";

}

if (strlen($user_id) < 4)

{

$query_string = $query_string . "user_id=req&";
$val_errors++;


}

else

{

$query_string = $query_string . "user_id=" . $user_id . "&";

}

if (strlen($password) < 4)
$val_errors++;


{

$query_string = $query_string . "password=req&";

}

if ($val_errors > 0)

{

header("Location: new_user.php" . $query_string);
break;

}

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

$query_user = "SELECT * FROM users WHERE user_id = '$user_id' AND password = '$password'";


$result_user = mysqli_query($db_connection,$query_user);

while ($row = mysqli_fetch_array($result_user))

{

// assign user details to php variables

$user_num = $row['user_num'];
setcookie("compass_auth", $user_num, time()+2592000);  /* expire in 30 days */

header('Location: default.php?first=1');

}

mysqli_close($db_connection);

?>