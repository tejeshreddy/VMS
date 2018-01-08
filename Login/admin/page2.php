<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="../styles/style.css">
<?php
include '../pract/front.php';
?>

</head>

<body>
      <div align="center"> <h1><i>Enter the details of new Administrator</i></h1></div><br>
      <h3>Step 1:To be filled by <u><i>Administrator</u></i></h3>
       <div id="frm">
           <form action="page2serv.php" method="post">
                 <p>
                 <label>Name:</label><br>
                 <input type="text" id="name" name="name" placeholder="Enter Name">
                 </p>
   
                <p>
                  <label>Enter employee email-id:</label>
                  <input type="email" id="email" name="email" placeholder="Enter Email-id">
                </p>
                 
                 <p>
                   <label>Age:</label><br>
                   <input type="number" id="age" name="age" placeholder="Enter Age"><br>
                 </p>

                 <p>
                   <label>Date Of Birth:</label><br>

                   <input type="date" id="dob" name="dob" placeholder="(YYYY-MM-DD)">
                 </p>

                 <p>
                   <label>Gender:</label><br>
                  <!-- <input type="radio" id="Male" name="gender">Male
                   <input type="radio" id="Female" name="gender">Female -->
                  <select name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  </select>
                 </p><br>

                  <p>
                    <input type="submit" id="btn1" name="submit" value="Submit!">
                  </p>
                  
            
            </form>
       </div>

</body>
</html>