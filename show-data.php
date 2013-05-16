<?php 
    include('config.php');
    $sql="SELECT * FROM personal WHERE id=1";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query))
    {
        $name=$row['name'];
        $add=$row['add'];
        $mob=$row['cont'];
    }
?>
<html>
<head>
<title>Re</title>
</head>

<body>
<table width="50%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40%">Name</td>
    <td width="60%"><?php echo $name;?></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><?php echo $mob;?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $add;?></td>
  </tr>
</table>
</body>
</html>