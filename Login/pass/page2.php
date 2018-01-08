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
     <div align="center"><h2>Change Password Page</h2></div>
     <div id="frm">
     	<form action="page2serv.php" method="post">
                   
                   <p>
                   <label>Email:</label><br>
                   <input type="text" id="email" name="email" placeholder="Enter email">
                   </p>

                   <p>
        		   <label>Current-Password:</label><br>
                   <input type="password" id="oldpassword" name="oldpassword" placeholder="Enter Current Password">
                   </p>

     		       <p>
        		   <label>Password:</label><br>
                   <input type="password" id="newpassword" name="newpassword" placeholder="Enter New Password">
                   </p>

                   <p>
        		   <label>Re-Enter Password:</label><br>
                   <input type="password" id="newrepassword" name="newrepassword" placeholder="Re-Enter New Password">
                   </p>
                     
                    <p>
                   <input type="submit" name="submit" id="btn" value="Submit">
     	           </p>
     	</form>
     </div>
</body>
</html>