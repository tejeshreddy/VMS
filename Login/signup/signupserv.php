<?php

if(isset($_POST['submit']))
{
	if( empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['age']) )
         {
         	 echo "*All fields are mandatory!! ";
         }


    else
         {

             $name=$_POST['name'];
             $email=$_POST['email'];
             $password=$_POST['password'];
             $age=$_POST['age'];

             $conn= mysqli_connect('localhost','root','');
             if($conn == false)
                {
                   die(mysqli_connect_error());
                }

             $db= mysqli_select_db($conn,'vms');
             
             $sql = mysqli_query($conn,"INSERT INTO passengers (name,email,password,age) VALUES ('$name','$email','$password','$age')");

             $dc= mysqli_select_db($conn,'Login');
             $sqll = mysqli_query($conn,"INSERT INTO users (username,password,authentication) VALUES ('$email','$password','passenger')");


             if($sql==1 && $sqll==1) 
                {
                	#echo "Account Set Up";
                    header("Location:../log/login.php");
                    # header("Location:welcome.php");
                 }
         }
 }
  

?>
