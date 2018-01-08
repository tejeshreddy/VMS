<?php
 
   if(isset($_POST['submit'])) //can be written as !empty as well
   {
 if(empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['alphaids']))
 {
 $error = "Username or Password is Invalid";
 }
}

$username=$_POST['username'];
$password=$_POST['password'];
$authentication=$_POST['alphaids'];   

  $conn= mysqli_connect('localhost','root','');
  if($conn == false)
{
   die(mysqli_connect_error());
}
  $db= mysqli_select_db($conn,'Login');
  $result = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password ='$password' AND authentication = '$authentication' "); 
   //or die("Failed to query database ".mysql_error());
   
   $row = mysqli_num_rows($result);


   if($row==1) 
   {
      
      if($authentication=='administrator')
      {
          header("Location:../admin/page1.php");
        }

       if($authentication=='employee')
      {
          header("Location:../emp/page1.php");
        }

        if($authentication=='passenger')
      {
          header("Location:../pass/page1.php");
        }
        
   }

   else {
    echo "Failed to login!!!";
   }
?>