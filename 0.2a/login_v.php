<?php

require 'constants.php';

// assign browser variables to PHP variables

$user_id = trim($_POST["user_id"]);
$password = $_POST["password"];

$user_id = mysqli_real_escape_string($db_connection,$user_id);
$password = mysqli_real_escape_string($db_connection,$password);

function authenticateUser($uid,$pw)

{

	// Open a database connection
	
	// retrieve user ID from database

	require 'constants.php';
	
	$query = "SELECT * FROM users WHERE user_id = '" . $uid . "'";

	$result = mysqli_query($db_connection,$query);

	// check if any user ID was retrieved

	if (mysqli_affected_rows($db_connection) == 0)

	{

		// no user ID retrieved, query didn't match any records

		return false;

	}

	else

	{

		// user ID retrieved, loop through matching records

		while ($row = mysqli_fetch_array($result))

		{

			// check password against database

			// Open a SECOND, fresh database connection

			// retrieve data

			$query = "SELECT * FROM users WHERE password = '" . $pw . "'";

			$result = mysqli_query($db_connection,$query);

			// check if any data was retrieved

			if (mysqli_affected_rows($db_connection) == 0)

			{

				// no data returned, query didn't match any records

				return false;

			}

			else

			{

				// data returned, loop through matching records

				while ($row = mysqli_fetch_array($result))

				{

					// if a password is matched, user is authenticated

					$user_num = $row['user_num'];
					setcookie("compass_auth", $user_num, time()+2592000);  /* expire in 30 days */

					return true;

				}

			// close connection

			mysqli_close($db_connection);

			}

		// close connection

		mysqli_close($db_connection);

		}

	}

}

if (authenticateUser($user_id,$password))

{

header('Location: default.php');

}

else

{

header('Location: login.php?invalid=1');

}

?>