<?php
if(isset($_POST['submit']))
{
  if( empty($_POST['name']) || empty($_POST['email']) || empty($_POST['dob']) || empty($_POST['age']))
         {
           echo "*All fields are mandatory!! ";
         }
else
         {
             $name=$_POST['name'];
             $email=$_POST['email'];
             $dob=$_POST['dob'];
             $age=$_POST['age'];
             $gender=$_POST['gender'];

             $conn= mysqli_connect('localhost','root','');
             if($conn == false)
                {
                   die(mysqli_connect_error());
                }

             $db= mysqli_select_db($conn,'vms');
             $sqltrig=mysqli_query($conn,"CREATE TRIGGER agecheck 
BEFORE INSERT 
ON employee FOR EACH ROW
BEGIN 
IF NEW.age-(2017-year(NEW.date_of_birth))!=0 THEN SET NEW.age=2017-year(NEW.date_of_birth);
END IF;
END;");
             $sql = mysqli_query($conn,"INSERT INTO employee (name,email,authentication,age,date_of_birth,gender) VALUES ('$name','$email','administrator','$age','$dob','$gender')");

             $dc= mysqli_select_db($conn,'Login');
             $sqll = mysqli_query($conn,"INSERT INTO users (username,authentication) VALUES ('$email','administrator')");


             if($sql==1 && $sqll==1) 
                {
                    header("Location:page3.php");
                 }
         }

}
?>
























































