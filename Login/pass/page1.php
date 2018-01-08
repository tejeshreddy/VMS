<!DOCTYPE html>
<html>
<head>
	<title>Passenger Page</title>
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
    <?php
include '../pract/front1.php';
     ?>
</head>
<body>
    <div align="center"><b><i><h2>Welcome Passeneger</h2></i></b></div>
    <div id="frm">
    <form action="page1serv.php" method="post">
    	<p>
    		Select Action:
    		<select name="alphaids">
    		    <option value="change">Change Password</option>
    			<!-- <option value="bus">View Your Bus  Details</option> -->
    			<option value="route">View Your Route  Details</option>
    		</select>
    	</p><br>

    	<p>
    		<input type="submit" name="submit" id="btn" value="Submit">
    	</p>
    </form>
    	
    </div>
</body>
</html>