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
    
    <center>
<h1> Enter the following information to create your new account! </h1>
<form  method="post" action="A07_3.php">
First Name: <input type="text" name="first_name">
Last Name: <input type="text" name="last_name">
Email: <input type="text" name="e_mail">
Username: <input type="text" name="user_id">
Password: <input type="password" name="password">
Confirm Password: <input type="password" name="confirm_password">
<br>
<form action="user_add.php" method="post">
<button type="submit" value="Submit">Create new account</button>
</form>
</body>

</html>
</center>


<br> </br>
<br> </br>
     <center> <a href="login.php">Already have an account? Login here!</a> </center>
    
    
</body>
</html>
