<?php 
$conn= mysqli_connect('localhost','root','ASTeroid_3905');
  if($conn == false)
{
   die(mysqli_connect_error());
}

?>
<html>
<head>
	<title>Display Page</title>
</head>
<body>
<h1><i><div align="center">Shelter Basics Table</div></i></h1>
<?php

$db= mysqli_select_db($conn,'Animal_Shelter');


echo "<table border=1>
  <tr>
    <td >Animal Id</td>
    <td >Animal Name</td>
    <td >Type</td>
    <td >Age</td>
    <td >Date Of arrival</td>
    <td >Reason</td>
  </tr>";



for ($i=1; $i <=9 ; $i++) 
{ 

     $result = mysqli_query($conn,"SELECT * FROM Shelter_Basics WHERE Animal_ID='$i'");
     while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$row['Animal_ID']."</td>";
  echo "<td>".$row['Animal_Name']."</td>";
  echo "<td>".$row['Animal_Type']."</td>";
  echo "<td>".$row['Animal_Age']."</td>";
  echo "<td>".$row['Date_Of_Arrival']."</td>";
  echo "<td>".$row['Reason_Of_Arrival']."</td>";
  echo "</tr>";
  echo "</table>";
}
	
}
  


?>

</body>
</html>