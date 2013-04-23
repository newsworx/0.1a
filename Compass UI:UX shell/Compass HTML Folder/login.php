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
				
			

<button class="show-page-loading-msg" data-theme="a" data-textonly="false" data-textvisible="false" data-msgtext="" data-inline="true">Icon (default)</button>


</head> 
<body>  

<div data-role="page">

<div data-role="header">
    <h1><img src="Images/logo.png" width="200" height="64">
</div>
    
    <h1> Login Below! </h1>
<form  method="post" action="login_verify.php">
User Name: <input type="text" name="user_name">
Password: <input type="password" name="password">
<br>
<form action="user_add.php" method="post">
<button type="submit" value="Submit">Login</button>
</form>
    <br> </br>
    
    <br> </br>
    <center> <a href="new_user.php">Don't have an account yet? Register here!</a> </center>
</body>
</html>
