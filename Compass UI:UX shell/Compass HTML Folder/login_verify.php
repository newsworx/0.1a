

<?php

$user_id = $_POST["user_name"];
$password = $_POST["password"];

function authenticateUser($user_id,$password)

{

	require 'db_login.php';


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
	
			require 'db_login.php';


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
    <h1><img src="Images/logo.png" width="90%"/></h1>
</div>

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