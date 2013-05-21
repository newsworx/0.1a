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

    <script type='text/javascript' src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    
  
    
    
      <script type='text/javascript' src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
    



</head>
 
<body>  

<div data-role="page">

<div data-role="header">

<a href="default.php"  class="ui-btn-left"  data-theme="a" data-mini="true" data-icon="arrow-l" data-role="button" data-transition="slide" data-direction="reverse">Home</a>

<?php echo "<h4>New Memory Lane</h4>"; ?>

	</div><!-- /header -->
    
<div data-role="content">

A Memory Lane is a collection of Memories. You can place Memories on a map and attach Mementos to them.

<br /><br />

<form name="lane" action="lane_add.php" method="get">

<label for="new-name"><strong>Memory Lane Name</strong></label>

     <input type="text" name="lane_name" id="name" placeholder="Please name your new Memory Lane here">
     
 <br>
<label for="textarea-a"><strong>Description</strong></label>

<textarea name="lane_description" id="textarea-a" placeholder="Please describe your new Memory Lane here"></textarea>

<br>
    <input type="submit" value="Create Memory Lane">
    </form>

</div><!-- content -->
    
    <div data-role="footer" data-position="fixed" data-theme="c">
 
<span class="ui-title" />
<a href="edit_profile.php"  class="ui-btn-left"  data-theme="a" data-mini="true" data-icon="gear" data-role="button" data-transition="pop">Edit Profile</a>
<a href="signout.php" data-theme="a" class="ui-btn-right" data-mini="true" data-icon="delete" data-role="button" data-transition="pop">Logout</a>



	</div><!-- /footer -->

</body>

</html>