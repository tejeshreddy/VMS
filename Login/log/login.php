<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
   <link rel="stylesheet" type="text/css" href="../styles/style.css">
</head>

<?php
include '../pract/front.php';

?>


<body>
      <!-- <br><div align="center"><h1><i>Vehicle Management System</i></h1></div> -->
      <div id="frm">
      <!-- style="height:30%;width: 30%;" -->
       <form action="loginserv.php" method="post">
          <p>
               Authentication: <br>
               <select name="alphaids">
                <option value="passenger">Passenger</option>
                <!-- <option value="employee">Employee</option> -->
                 <option value="administrator">Administrator</option>
             </select></p>
              
              <p>
              <label >Username:</label>
              <input type="text" id="username" name="username" placeholder="Enter username">
             </p>
        
          <p>
              <label>Password:</label><br>
              <input type="password" id="password" name="password" placeholder="Enter password">
          </p>

              
              
              <input type="submit" name="submit" id="btn" value="Login"><br><br><br>
          </form>

       <!--  <form  action="../signup/signup.php" method="post">
          <input type="submit" name="submit" id="btn" value="Sign Up">
        </form>
        
       -->
        </div>
      

</body>
</html>
