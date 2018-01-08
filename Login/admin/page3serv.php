<?php
if(isset($_POST['submit']))
{
  if( empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repassword']))
         {
           echo "*All fields are mandatory!! ";
         }

     else 
         {

           $email=$_POST['email'];
           $password=$_POST['password'];
           $repassword=$_POST['repassword'];

           
                    if($password==$repassword)
                         {
                         	$conn= mysqli_connect('localhost','root','');
                            if($conn == false)
                                 {

                                   die(mysqli_connect_error());
                                  }
                              
                            $db= mysqli_select_db($conn,'vms');
                            $result = mysqli_query($conn,"SELECT * FROM employee WHERE email='$email' AND authentication ='administrator'"); 
                            $row = mysqli_num_rows($result);
                            
                             if ($row==1)
                              {
                             	$db= mysqli_select_db($conn,'vms');
           $sql = mysqli_query($conn,"UPDATE employee SET password='$password' WHERE email='$email'");

                                $dc= mysqli_select_db($conn,'Login');
           $sqll= mysqli_query($conn,"UPDATE users SET password='$password' WHERE username='$email'");
                               }
                         }
                         
                          else
                         {
                              
                              echo "password doesnt match!!!";
                         }

         }          

                                    if($sql==1 && $sqll==1) 
                                    {
                	                   echo " Employee Account Set Up";
                    
                                      }
}
?>
