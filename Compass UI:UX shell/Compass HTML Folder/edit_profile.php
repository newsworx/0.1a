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
<a href="compasstemplate.html" data-icon="gear" data-role="button" data-transition="flip">Edit Profile</a>
<a href="view_memories.php" data-icon="gear" data-role="button" data-transition="flip">View Memories</a>
<a href="signout.php" data-icon="minus" data-role="button" data-transition="pop">Sign out</a>
	</div><!-- /footer -->
    
    <h1> Edit your profile below </h1>
        
    <form>
    <label for="email">First Name:</label>
    <input type="email" data-clear-btn="true" name="email" id="email" value="">
</form>
    
    <form>
    <label for="last_name">Last Name:</label>
    <input type="text" data-clear-btn="true" name="last_name" id="last_name" value="">
</form>

    <form>
    <label for="email">Email:</label>
    <input type="email" data-clear-btn="true" name="email" id="email" value="">
</form>

    <form>
    <label for="password">Password:</label>
    <input type="password" data-clear-btn="true" name="password" id="password" value="">
</form>

    <form>
    <label for="new_password">New Password:</label>
    <input type="password" data-clear-btn="true" name="new_password" id="new_password" value="">
</form>
	
    <form>
    <label for="confirm_password">Confirm New Password:</label>
    <input type="password" data-clear-btn="true" name="confirm_password" id="confirm_password" value="">
</form> 
 <br> </br>
 <br> </br>
  
<form action="upload_memories.php" method="post">
<button type="submit" value="Submit">Save Profile Changes</button>
</form>

 <br> </br>
 <br> </br>

</body>

</html>