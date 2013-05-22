<?php

require 'constants.php';

// detect authentication cookie. if logged in, proceed.
// if not, kick user back to login screen

if ($_COOKIE['compass_auth'] == '')

{

header('Location: login.php');

}

// grab query string variables

$memory_id = $_GET['memory_id'];

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

// query for memory details

$query_memory = "SELECT * FROM memories WHERE mem_id = " . $memory_id;

$result_memory = mysqli_query($db_connection,$query_memory);

while ($row = mysqli_fetch_array($result_memory))

{

// assign user details to php variables

	$memory_label			= $row['mem_label'];
	$memory_name 			= $row['mem_name'];
	$memory_description 	= $row['mem_description'];
	
}

?>
<!DOCTYPE html>

<html> 

<head> 

<title>Memory Lane - Display Memory</title> 

<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="c/compass0-2.min.css" />

<link rel="stylesheet" href="c/ml.css" />

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" /> 
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 

<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script> 

    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
   
  <style>
  body { margin:0; padding:0; border:0;}
  #map { position:absolute; top:0px; left:0px; right:0px;bottom:0px; }
  #map_container { position:relative; width:100%; height:200px; }
  </style>

<script type="text/javascript">

$(document).bind("pageinit", function() {

load();

});

</script>

</head>
 
<body>  

<div data-role="page">

<div data-role="header">

<a href="default.php"  class="ui-btn-left"  data-theme="a" data-mini="true" data-icon="arrow-l" data-role="button" data-transition="slide" data-direction="reverse" data-rel="back">Memories</a>

<?php echo "<h4>" . $memory_name. "</h4>"; ?>

	</div><!-- /header -->

<div data-role="content">

<div id="map_container"><div id="map"></div></div>

<a data-role="button" data-theme="b" data-icon="plus" href="new_asset.php">New Memento</a>

<?php

$query_outer = "SELECT * FROM assets_memories WHERE memory_id = " . $memory_id;

$result_outer = mysqli_query($db_connection,$query_outer);

// outer query loops through matching memory_lane records


if (mysqli_affected_rows($db_connection) != 0)

	{
	
		echo ("<h4>Your Mementos</h4>");
	

}

	echo ("<ul data-role=\"listview\" data-theme=\"a\" data-inset=\"true\">\n\n");
	
	while($row_outer = mysqli_fetch_array($result_outer))

	{

		// set variables to values of fields from returned record

		$current_memory = $row_outer['memory_id'];
		$current_asset = $row_outer['asset_id'];

$query_inner = "SELECT * FROM assets WHERE asset_id = " . $current_asset;

		$result_inner = mysqli_query($db_connection,$query_inner);

				 while($row_inner = mysqli_fetch_array($result_inner))

			 {

				// set variables to values of fields from returned record

				$asset_id = $row_inner['asset_id'];
				$asset_name = $row_inner['asset_name'];
				$asset_description = $row_inner['asset_description'];
				$asset_url = $row_inner['asset_url'];
				$asset_type = $row_inner['asset_type'];


				echo "<li /><a rel=\"external\" href=\"asset.php?asset_id=" . $asset_id . " \"><strong style=\"display:block; margin-bottom:6px;\">" . $asset_name . "</strong><p> " . $asset_description . "</p></a>\n";

			}
	

	
	

	}

echo ("</ul>\n\n");


?>






</div><!-- content -->
    
    <div data-role="footer" data-id="mainfoot" data-position="fixed" data-theme="c">
 
<span class="ui-title" />
<a href="edit_profile.php"  class="ui-btn-left"  data-theme="a" data-mini="true" data-icon="gear" data-role="button" data-transition="pop">Edit Profile</a>
<a href="signout.php" data-theme="a" class="ui-btn-right" data-mini="true" data-icon="delete" data-role="button" data-transition="pop">Logout</a>



	</div><!-- /footer -->

</body>

</html>