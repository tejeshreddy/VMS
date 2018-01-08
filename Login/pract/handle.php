<?php

$conn= mysqli_connect('localhost','root','');
$db= mysqli_select_db($conn,'vms');
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$Query=mysqli_query($conn,"CREATE PROCEDURE insertdata(name text, subject text, message text, email text)
BEGIN
INSERT INTO feedback(name,subject,message,email) values(name,subject,message,email);
END;"); 

$result = mysqli_query($conn,"CALL insertdata('$name','$subject','$message','$email')");


header('Location:contactus.php');
?>