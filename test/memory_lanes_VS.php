<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Blank HTML 5 Template</title>  

</head>  

<body>

<?php

$con=mysqli_connect( "localhost", "stoneho3_juser", "j2013", "stoneho3_j680");

// Check connection

if (mysqli_connect_errno())

  {

  echo "Failed to connect to MySQL: " . mysqli_connect_error();

  }



$query = "SELECT * FROM memory lanes WHERE lane_id = " . $_GET["lane_id:];

$result = mysqli_query($con,$query);

echo "<table border='1'>

<tr>

<th>Memory Lane ID</th>

>Memory ID</th>

<th>Latitude</th>

<th>Longitude</th>

<th>Memory Label</th>

<th>Memory Name</th>

<th>Memory Description</th>


</tr>";



while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['lane_id'] . "</td>";

  echo "<td>" . $row['lane_name'] . "</td>";

  echo "<td>" . $row['lane_description'] . "</td>";

 

   

  echo "</tr>";

  }

echo "</table>";



mysqli_close($con);

?>


</body>

</html>