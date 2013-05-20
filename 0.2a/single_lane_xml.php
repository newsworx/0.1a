<?php
require("phpsqlajax_dbinfo.php");

function parseToXML($htmlStr) 
{ 
$xmlStr=str_replace('<','&lt;',$htmlStr); 
$xmlStr=str_replace('>','&gt;',$xmlStr); 
$xmlStr=str_replace('"','&quot;',$xmlStr); 
$xmlStr=str_replace("'",'&apos;',$xmlStr); 
$xmlStr=str_replace("&",'&amp;',$xmlStr); 
return $xmlStr; 
} 

// Opens a connection to a mySQL server
$connection=mysql_connect (localhost, $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select rows from memories table

$lane_id = $_GET['lane_id'];
// $lane_id = 3;

// query for lane_id in memories_lanes

$query_mem_lanes = "SELECT * FROM memories_lanes WHERE lane_id = '$lane_id'" ;

$result_mem_lanes = mysql_query($query_mem_lanes);

if (!$result_mem_lanes) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

echo '<markers>';


while ($row = @mysql_fetch_assoc($result_mem_lanes))

{

$mem_id = $row['memory_id'];

// query for memories

$query_mem = "SELECT * FROM memories WHERE mem_id = '$mem_id'" ;

$result_mem = mysql_query($query_mem);

if (!$result_mem) {
  die('Invalid query: ' . mysql_error());
}

// Start XML file, echo parent node

while ($row = @mysql_fetch_assoc($result_mem))

{

  // ADD TO XML DOCUMENT NODE
  
  $mem_id 			= $row['mem_id'];
  $latitude 		= $row['latitude'];
  $longitude 		= $row['longitude'];
  $mem_label 		= $row['mem_label'];
  $mem_name 		= $row['mem_name'];
  $mem_description	= $row['mem_description'];
  
  echo '<marker ';
  echo 'name="' . parseToXML($mem_name) . '" ';
  echo 'description="' . parseToXML($mem_description) . '" ';
  echo 'lat="' .  $latitude . '" ';
  echo 'lng="' .  $longitude . '" ';
  echo '/>';

}

}

// End XML file
echo '</markers>';

?>