<!DOCTYPE html>

<html lang="en">
<a href="http://newsworxapps.com/j680/aaa/memories-firstpage-aaa.php">Add A Memory</a>
<head>

<meta charset="utf-8" />

<title>Blank HTML 5 Template</title>  

</head>  

<body>

<?php

$con=mysqli_connect ("localhost","jfolio_juser","j2013","jfolio_j680");

// Check connection

	if (mysqli_connect_errno())

	{

		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}

// output table header

echo "<table border='1'>

<tr>

<th>Lane ID</th>

<th>Action</th>

<th>Memory ID</th>


<th>Latitude</th>


<th>Longitude</th>


<th>Memory Label</th>


<th>Memory Name</th>


<th>Memory Description</th>


</tr>";

// define outer query

$query = "SELECT * FROM memories_lanes WHERE lane_id = " . $_GET['lane_id'];

$result = mysqli_query($con,$query);

// outer query loops through matching memory_lane records

	while($row = mysqli_fetch_array($result))

	{

		// set variables to values of fields from returned record

		$current_lane = $row['lane_id'];
		$current_memory = $row['memory_id'];

		// define inner query

		$query_inner = "SELECT * FROM memories WHERE mem_id = " . $current_memory;

		//*********NEED TO FIGURE OUT HOW TO MAKE ALL FIELDS CORRELATE WITH A SINGLE MEMORY ID*********

		$result_inner = mysqli_query($con,$query_inner);

		// inner query loops through matching memory fiel records

			 while($row_inner = mysqli_fetch_array($result_inner))

			 {

				 // set variables to values of fields from returned record

				 $mem_id = $row_inner['mem_id'];
				 $lat = $row_inner['lat'];
				 $longitude = $row_inner['longitude'];
				 $mem_label = $row_inner['mem_label'];
				 $mem_name = $row_inner['mem_name'];
				 $mem_description = $row_inner['mem_description'];


				 // output recurrint table code

				 echo "<tr>";
				 

				 // note that $current_memory is defined in outer, not inner loop

				 echo "<td>" . $current_lane . "</td>";
				 
 				 echo "<td>" . "<a href=\"memories-secondpage-aaa.php?lane_id=" . $row['mem_id'] . "\">Edit</a> " . "<a href=\"delete.php?mem_id=" . $row['mem_id'] . "\">Delete</a> " . $row['mem_label'] . "</td>";

				 echo "<td>" . $mem_id . "</td>";
				 

				 echo "<td>" . $lat . "</td>";
				 

				 echo "<td>" . $longitude . "</td>";
				 

				 echo "<td>" . $mem_label . "</td>";
				 

				 echo "<td>" . $mem_name . "</td>";
				 

				 echo "<td>" . $mem_description . "</td>";
				 

				 echo "</tr>";

			 }

		// end inner query

	}

// close table just once, outside both loops

echo "</table>";

// close close database connection

mysqli_close($con);

?>

</body>

</html>


