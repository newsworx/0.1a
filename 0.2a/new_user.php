<!DOCTYPE html>

<html> 

<head> 

<title>Memory Lane</title> 

<meta name="viewport" content="width=device-width, initial-scale=1"> 

<link rel="stylesheet" href="c/memorylane_v1.css" />

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

<h2>New Account</h2>

Create a Memory Lane account to save and share your memories. Storytelling is just steps away!

<br /><br />

<form data-ajax="false" action="user_add.php" method="post">
First Name <?php if ($_GET['first_name'] == "req") { echo "<span style=color:red;font-weight:bold;>REQUIRED</span>"; }?><input type="text" name="first_name" value="<?php if ($_GET['first_name'] != "req") { echo $_GET['first_name']; }?>">
Last Name <?php if ($_GET['last_name'] == "req") { echo "<span style=color:red;font-weight:bold;>REQUIRED</span>"; }?><input type="text" name="last_name" value="<?php if ($_GET['last_name'] != "req") { echo $_GET['last_name']; }?>">
Email <?php if ($_GET['user_id'] == "req") { echo "<span style=color:red;font-weight:bold;>REQUIRED</span>"; }?><input type="text" name="user_id" value="<?php if ($_GET['user_id'] != "req") { echo $_GET['user_id']; }?>">
Password <?php if ($_GET['password'] == "req") { echo "<span style=color:red;font-weight:bold;>REQUIRED</span>"; }?><input type="password" name="password">
Confirm Password<input type="password" name="confirm_password">
<br>
<button type="submit" value="Submit">Create new account</button>
</form>
<br> </>
<div class="center">

<a href="login.php">Already registered? Login here!</a>

</div>


    </div>
    
</body>
</html>
