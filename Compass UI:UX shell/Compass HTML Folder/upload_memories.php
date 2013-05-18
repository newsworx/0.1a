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
    
	
<div data-role="footer">
<a href="compasstemplate.html" data-icon="home" data-role="button" data-transition="pop">Home</a>
<a href="edit_profile.php" data-icon="gear" data-role="button" data-transition="flip">Edit Profile</a>
<a href="view_memories.php" data-icon="gear" data-role="button" data-transition="flip">View Memories</a>
<a href="signout.php" data-icon="minus" data-role="button" data-transition="pop">Sign out</a>
	</div><!-- /footer -->
    
     <div data-role="content">
    
    <?php
	
	require db_login.php;
	
	$memory_name = $_POST['memory_name'];
	$memory_text = $_POST['memory_text'];
	$memory_audio = $_POST['memory_audio'];
	$memory_photo = $_POST['memory_photo'];
	$memory_video = $_POST['memory_video'];
	
	echo $memory_text;
	?>
    
    
   </div> 
</body>
</html>
