<!DOCTYPE html>
<html>
<head>
	<title>pg3</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
  <?php
include '../pract/front.php';
?>
</head>
<body>
          <br><br><h4>Step 2:To be entered by the <u><i>Employee</i></u> </h4>
        <div id="frm">
        	<form action="page3serv.php" method="post">
        	        <p>
        	        <label>Enter Your Email id:</label><br>
        	        <input type="email" id="email" name="email">
        	        </p>
        			<p>
        		   <label>Password:</label><br>
                   <input type="password" id="password" name="password">
                   </p>
                   <p>
        		   <label>Re-Enter Password:</label><br>
                   <input type="password" id="repassword" name="repassword">
                </p>
                <br><br>
                <p>
                	<input type="submit" id="btn1" name="submit" value="Submit!">
                </p>

        	</form>
        </div>
</body>
</html>