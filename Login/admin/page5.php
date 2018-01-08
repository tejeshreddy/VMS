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
           <div class="col-7">
           <input type="text" class="form-control" placeholder="Bus Id to be removed" id="bid" name="bid">
           </div><br>
          
           </div>
           <br><input type="submit" name="submit" id="submit" value="Submit">
     </form>
</div> 
<?php

if(isset($_POST['submit']))
{
	if( empty($_POST['bid']) )
	         {
         	 echo "*All fields are mandatory!! ";
             }

         else
         {
         $bid=$_POST['bid'];
         
         $conn= mysqli_connect('localhost','root','');
             if($conn == false)
                {
                   die(mysqli_connect_error());
                }

                $db= mysqli_select_db($conn,'vms');
        $result = mysqli_query($conn,"DELETE FROM bus WHERE busid='$bid'");             
    }

}

?>


</body>
</html>