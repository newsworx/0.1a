<!DOCTYPE html>

<html> 

<head> 

<title>Memory Lane</title> 

<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="c/compass0-2.min.css" />

<link rel="stylesheet" href="c/ml.css" />

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile.structure-1.3.1.min.css" /> 
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 

<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script> 

</head>
 
<body>  

<div data-role="page">

<div data-role="header">

<img class="center banner" src="i/memory_lane.png" width="50%" />

</div>
    
    <div data-role="content">
    
    <?php
    
    if ($_GET['invalid'] == 1)
    
    {
    
    echo ("<div class=\"warning\">\n\n");
    echo ("Invalid login. Please try again.\n\n");
    echo ("</div>\n\n");
    
    }
    
    ?>
    
    <h2>Please Login</h2>
<form  data-ajax="false" method="post" action="login_v.php">
E-mail <input type="text" name="user_id">
Password <input type="password" name="password">
<br />
<button type="submit" value="Submit">Login</button>
</form>

<br /><br />

<div class="center">

<a href="new_user.php">No account yet? Register now!</a>

</div>
    
</div>
    
</body>

</html>