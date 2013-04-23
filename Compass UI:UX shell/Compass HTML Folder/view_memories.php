<!DOCTYPE html> 
<html> 
<head> 
	<title>Compass 0.1a</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 


 <link rel="stylesheet" href="css/themes/memorylane_v1.css" />
 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" /> 
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script> 


<button class="show-page-loading-msg" data-theme="a" data-textonly="false" data-textvisible="false" data-msgtext="" data-inline="true">Icon (default)</button>


</head> 
<body>  

<div data-role="page">

<div data-role="header">
    <h1><img src="Images/logo.png" width="250" height="72">
</div>

<div data-role="footer">
<a href="compasstemplate.html" data-icon="home" data-role="button" data-transition="pop">Home</a>

<a href="edit_profile.php" data-icon="gear" data-role="button" data-transition="flip">Edit Profile</a>

<a href="compasstemplate.html" data-icon="gear" data-role="button" data-transition="flip">View Memories</a>

<a href="signout.php" data-icon="minus" data-role="button" data-transition="flip">Sign out</a>
	</div><!-- /footer -->

<h1> Your memories</h1>



So instead of this, it'll be a PHP / MYSQL code that pulls the users saved memories and displays them in chronological order (the most recent memories being displayed higher up). Users will then have options to edit or delete their stored memories.


</body>
</html>
