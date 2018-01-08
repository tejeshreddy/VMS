<?php 
$conn= mysqli_connect('localhost','root','');
  if($conn == false)
{
   die(mysqli_connect_error());
}
?>


<html>
<head>
	<title></title>
</head>
<body>
   <?php 
   $db= mysqli_select_db($conn,'vms');
  $result = mysqli_query($conn,"SELECT * FROM routes WHERE rid='2' "); 
   //or die("Failed to query database ".mysql_error());
   
   $con = mysqli_num_rows($result);


   if($con==1) 
   {
   	echo "done!!";
}
   	


echo "<table border='1'>
<tr>
<th>rid</th>
<th>stops</th>
<th>destination</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['rid'] . "</td>";
echo "<td>" . $row['source'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>


</body>
</html>