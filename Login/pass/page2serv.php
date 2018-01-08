<?php
if(isset($_POST['submit'])) 
   {
      if(empty($_POST['oldpassword']) || empty($_POST['newpassword'])|| empty($_POST['newrepassword']) || empty($_POST['email']))
                        {
                           echo "*All Fields are Mandatory";
                          }
      else
            {
	             $email=$_POST['email'];
                 $oldpassword=$_POST['oldpassword'];
                 $newpassword=$_POST['newpassword'];
                 $newrepassword=$_POST['newrepassword'];

                  $conn= mysqli_connect('localhost','root','');
                  if($conn == false)
                       {
                             die(mysqli_connect_error());
                       }
      
                       if($newpassword==$newrepassword)
                         {
                           $db= mysqli_select_db($conn,'Login');
                           $result = mysqli_query($conn,"SELECT * FROM users WHERE username='$email' AND password ='$oldpassword' AND authentication = 'passenger'"); 
                           $row = mysqli_num_rows($result);
        
                            if($row==1)
                               {
                                   $db= mysqli_select_db($conn,'Login');
                                   $sqll= mysqli_query($conn,"UPDATE users SET password='$newpassword' WHERE username='$email'");

                                   $dc= mysqli_select_db($conn,'vms');
                                   $sql = mysqli_query($conn,"UPDATE passengers SET password='$newpassword' WHERE email='$email'");
                               }

                         }
                   
                       if($newpassword!=$newrepassword)
                         {
           	              echo "Passwords Dont Match!!!";
                         } 
                           


                        if($sqll==1 && $sql==1) 
                          {
                               echo "Password Change Was Successful!!!";
                           }

             }
     }
?>