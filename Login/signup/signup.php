<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css">

  <?php
include '../pract/front1.php';

?>
</head>

<body>
      <div align="center"> <h1>Welcome To Sign Up Pageee!!</h1></div>
       <div id="frm" style="height:20%;width: 30%;">
           <form action="signupserv.php" method="post">
                 <p>
                 <label>Name:</label><br>
                 <input type="text" id="name" name="name">
                 </p>
   
                <p>
                  <label>Enter your email-id:</label>
                  <input type="email" id="email" name="email">
                </p>

                <p>
                   <label>Password:</label><br>
                   <input type="password" id="password" name="password">
                </p>
                 
                 <p>
                   <label>Age:</label><br>
                   <input type="number" id="age" name="age">
                 </p><br><br>

                
                  <p>
                    <input type="submit" id="btn1" name="submit" value="Submit!">
                  </p>
                  
            
            </form>
       </div>

</body>
</html>