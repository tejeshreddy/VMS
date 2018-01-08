<?php 
$conn= mysqli_connect('localhost','root','');
  if($conn == false)
{
   die(mysqli_connect_error());
}
$db = mysqli_select_db($conn,'vms');


?>


<!DOCTYPE html>
<html>
<head>
     <title></title>
     <link rel="stylesheet" type="text/css" href="../styles/style.css">
<?php
include '../pract/front1.php';
?>	
</head>
<body>

   <div id="frm1">
     <form action="" method="post">
         <div class="form-row">
           <div class="col-6">
           <input type="text" class="form-control" placeholder="KA-00-AA-1234" id="reg" name="reg">
           </div><br>
           <div class="col-4">
           <input type="text" class="form-control" placeholder="Route ID" id="ri" name="ri">
           </div>
           </div>
           <br><input type="submit" name="submit" id="submit" value="Submit">
     </form>
</div> 

<?php

if(isset($_POST['submit']))
{
	if( empty($_POST['reg']) || empty($_POST['ri']))
         {
         	 echo "*All fields are mandatory!! ";
         }

         else
         {
         $reg=$_POST['reg'];
         $ri=$_POST['ri'];

         $conn= mysqli_connect('localhost','root','');
             if($conn == false)
                {
                   die(mysqli_connect_error());
                }

                $db= mysqli_select_db($conn,'vms');
        $result = mysqli_query($conn,"INSERT INTO bus(rid,vehicle_number,no_of_stops) VALUES('$ri','$reg','4')");


         }

}
?>
</body>
</html>