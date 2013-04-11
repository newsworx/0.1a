<?php

$user_id = $_POST["user_id"];
$password = $_POST["password"];

function authenticateUser($user_id,$password)

{

	require 'A07_1.php';


	$query = "SELECT * FROM users WHERE userid = '" . $user_id . "'";

	$result = mysqli_query($db_connection,$query);


	if (mysqli_affected_rows($db_connection) == 0)

	{

		return false;

	}

	else

	{

		while ($row = mysqli_fetch_array($result))

		{
	
			require 'A07_1.php';


			$query = "SELECT * FROM users WHERE password = '" . $password . "'";

			$result = mysqli_query($db_connection,$query);


			if (mysqli_affected_rows($db_connection) == 0)

			{
	

				return false;

			}

			else

			{

				while ($row = mysqli_fetch_array($result))

				{

					return true;

				}

			mysqli_close($db_connection);

			}

		mysqli_close($db_connection);

		}

	}

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Results</title>  

</head>  

<body>

<?php

if (authenticateUser($user_id,$password))

{

	echo ("Welcome, $user_id ");

}

else

{

	echo ("<center><font color='red'> Username and password do not match. Please try again. </font> </center>");

}

?>

</body>

</html>