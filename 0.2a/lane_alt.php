<?php

require 'constants.php';

// detect authentication cookie. if logged in, proceed.
// if not, kick user back to login screen

if ($_COOKIE['compass_auth'] == '')

{

header('Location: login.php');

}

// grab query string variables

$lane_id = $_GET['lane_id'];

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

// query for lane details

$query_lane = "SELECT * FROM lanes WHERE lane_id = " . $lane_id;

$result_lane = mysqli_query($db_connection,$query_lane);

while ($row = mysqli_fetch_array($result_lane))

{

// assign user details to php variables

	$lane_id 			= $row['lane_id'];
	$lane_name 			= $row['lane_name'];
	$lane_description 	= $row['lane_description'];
	
}

?>
<!DOCTYPE html>

<html> 

<head> 

<title>Memory Lane - Display Lane</title> 

<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="c/compass0-2.min.css" />

<link rel="stylesheet" href="c/ml.css" />

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" /> 

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 

<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script> 

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
<script src="src/jquery.ui.map.full.min.js" type="text/javascript"></script>

  <style>
  body { margin:0; padding:0; border:0;}
  #map { position:absolute; top:0px; left:0px; right:0px;bottom:0px; }
  #map_container { position:relative; width:100%; height:200px; }
  </style>

</head>
 
<body>  

<div data-role="page">

<div data-role="header">

<a href="default.php"  class="ui-btn-left"  data-theme="a" data-mini="true" data-icon="arrow-l" data-role="button" data-transition="slide" data-direction="reverse">Lanes</a>

<?php echo "<h4>" . $lane_name. "</h4>"; ?>

	</div><!-- /header -->

<div data-role="content">

<div id="map_container"><div id="map"></div></div>

<?php

$query_outer = "SELECT * FROM memories_lanes WHERE lane_id = " . $_GET['lane_id'];

$result_outer = mysqli_query($db_connection,$query_outer);

// outer query loops through matching memory_lane records

	echo ("<ul data-role=\"listview\" data-theme=\"a\" data-inset=\"true\">\n\n");
	
	while($row = mysqli_fetch_array($result_outer))

	{

		// set variables to values of fields from returned record

		$current_lane = $row['lane_id'];
		$current_memory = $row['memory_id'];

$query_inner = "SELECT * FROM memories WHERE mem_id = " . $current_memory;

		$result_inner = mysqli_query($db_connection,$query_inner);

if (mysqli_affected_rows($db_connection) != 0)

	{
	
	
	
	
				 while($row_inner = mysqli_fetch_array($result_inner))

			 {

				// set variables to values of fields from returned record

				$mem_id = $row_inner['mem_id'];
				$lat = $row_inner['lat'];
				$longitude = $row_inner['longitude'];
				$mem_label = $row_inner['mem_label'];
				$mem_name = $row_inner['mem_name'];
				$mem_description = $row_inner['mem_description'];


				echo "<li /><a href=\"memory.php?mem_id=" . $mem_id . " \"><strong style=\"display:block; margin-bottom:6px;\">" . $mem_name . "</strong><p> " . $mem_description . "</p></a>\n";

			}
	

	
	
	
	
	
	
	
	

	
	}


	}

echo ("</ul>\n\n");


?>






</div><!-- content -->
    
    <div data-role="footer" data-id="mainfoot" data-theme="c" data-position="fixed">
 
<span class="ui-title" />
<a href="edit_profile.php"  class="ui-btn-left"  data-theme="a" data-mini="true" data-icon="gear" data-role="button" data-transition="pop">Edit Profile</a>
<a href="signout.php" data-theme="a" class="ui-btn-right" data-mini="true" data-icon="delete" data-role="button" data-transition="pop">Logout</a>



	</div><!-- /footer -->

<script type="text/javascript">
$(function() {
// Also works with: var yourStartLatLng = '59.3426606750, 18.0736160278';
var yourStartLatLng = new google.maps.LatLng(59.3426606750, 18.0736160278);
$('#map').gmap({'center': yourStartLatLng});
});
</script>


</body>

</html>