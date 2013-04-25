<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8" />

<title>Blank HTML 5 Template</title>  

</head>  

<body>

<?php

// connect to database

$con=mysqli_connect("localhost", "stoneho3_juser", "j2013", "stoneho3_j680");

// Check connection

if (mysqli_connect_errno())

	{

		echo "Failed to connect to MySQL: " . mysqli_connect_error();

	}

// output table header code, just once, outside both loops

echo "<table border='1'>

<tr>

<th>Memory ID</th>

<th>Assets</th>

<th>Asset URL</th>

<th>Asset Type</th>

<th>Asset Description</th>

<th>Asset Name</th>

</tr>";

// define outer query

$query = "SELECT * FROM assets_memories WHERE memory_id = " . $_GET['mem_id'];

$result = mysqli_query($con,$query);

// outer query loops through matching asset_memory records

while($row = mysqli_fetch_array($result))

	{

	// set variables to values of fields from returned record

		$current_memory = $row['memory_id'];
		$current_asset = $row['asset_id'];

		// define inner query

		$query_inner = "SELECT * FROM assets WHERE asset_id = " . $current_asset;

		$result_inner = mysqli_query($con,$query_inner);

		// inner query loops through matching assets records

		while($row_inner = mysqli_fetch_array($result_inner))

		{

			// set variables to values of fields from returned record

			$asset_id = $row_inner['asset_id'];
			$asset_url = $row_inner['asset_url'];
			$asset_type = $row_inner['asset_type'];
			$asset_description = $row_inner['asset_description'];
			$asset_name = $row_inner['asset_name'];

			// output recurrint table code

			echo "<tr>";

			// note that $current_memory is defined in outer, not inner loop
			
			echo "<td>" . $current_memory . "</td>";

			echo "<td>" . $asset_id . "</td>";

			echo "<td>" . $asset_url . "</td>";

			echo "<td>" . $asset_type . "</td>";

			echo "<td>" . $asset_description . "</td>";

			echo "<td>" . $asset_name . "</td>";

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