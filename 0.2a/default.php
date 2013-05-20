<?php

require 'constants.php';

// detect authentication cookie. if logged in, proceed.
// if not, kick user back to login screen

if ($_COOKIE['compass_auth'] == '')

{

header('Location: login.php');

}

// grab user number from saved cookie

$uid = $_COOKIE['compass_auth'];

// query for user details

$query = "SELECT * FROM users WHERE user_num = " . $uid;

$result = mysqli_query($db_connection,$query);

while ($row = mysqli_fetch_array($result))

{

// assign user details to php variables

$first_name 	= $row["first_name"];
$last_name 		= $row["last_name"];
$user_id 		= $row["user_id"];

}

?>
<!DOCTYPE html>

<html> 

<head> 

<title>Memory Lane - Default screen</title> 

<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="c/compass0-2.min.css" />
<link rel="stylesheet" href="c/ml.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

<link rel="stylesheet" href="c/ml.css" />

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
</head>
 
<body>  

<div data-role="page">

<div data-role="header">

<?php echo "<h4>Welcome, " . $first_name . "!</h4>"; ?>

	</div><!-- /header -->




<div data-role="content">

<a data-role="button" data-theme="b" data-icon="plus" href="add_memory.php">New Memory Lane</a>

<?php

$query = "SELECT * FROM lanes WHERE user_num = " . $uid;

$result = mysqli_query($db_connection,$query);

if (mysqli_affected_rows($db_connection) != 0)

	{
	
	echo ("<h4>Your Memory Lanes</h4>");
	
echo ("<ul data-role=\"listview\" data-theme=\"a\" data-filter=\"true\" data-inset=\"true\">\n\n");

// outer query loops through matching memory_lane records

	while($row = mysqli_fetch_array($result))

	{

	$lane_id 			= $row['lane_id'];
	$lane_name 			= $row['lane_name'];
	$lane_description 	= $row['lane_description'];
	
	echo "<li /><a href=\"lane.php?lane_id=" . $lane_id . "\" data-transition=\"slide\"><strong style=\"display:block; margin-bottom:6px;\">" . $lane_name . "</strong><p> " . $lane_description . "</p></a>\n";

	}


echo ("</ul>\n\n");

	}

?>






</div><!-- content -->
    
    <div data-role="footer" data-position="fixed" data-theme="c">
 
<span class="ui-title" />
<a href="edit_profile.php"  class="ui-btn-left"  data-theme="a" data-mini="true" data-icon="gear" data-role="button" data-transition="pop">Edit Profile</a>
<a href="signout.php" data-theme="a" class="ui-btn-right" data-mini="true" data-icon="delete" data-role="button" data-transition="pop">Logout</a>



	</div><!-- /footer -->

</body>

</html>