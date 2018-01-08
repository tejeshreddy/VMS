<!DOCTYPE html>
<html>
<head>
	<title>pg1</title>
   <link rel="stylesheet" type="text/css" href="../styles/style.css"> 

   <?php
include '../pract/front1.php';

?>
  
</head>
<body>
       <div align="center"><h1><i>Welcome Administrator</i></h1></div>
       <!--Begin of Admin actoins--> 

       <div id="frm">
       	<form action="page1serv.php" method="post">
       	<p>
       		<b><u>Administrative Actions:</u></b>
       		<br><br>
       		
           <select name="choice">
           <option value="add">Add New Item</option>
           <option value="delete">Delete existing</option>
           </select><br><br>

           <b><u>Feature:</u></b><br><br>

       		<select name="alphaid">
            <option value="employee">Administrator</option>
           <!--  <option value="administrator">Administrator</option> -->
       			<option value="bus">Bus</option>
           <!--  <option value="passenger">Passenger</option> -->
            
       		</select><br><br>
       		<input type="submit" name="submit" id="btn" value="Ok">
     	    </p>
       </form>
       </div><br><br>
        
        <!--Account Actions-->

          <div id="frm">
          <form action="" method="post">
          <b><u>Account Actions:</u></b><br><br>
          <select name="">
          	<option value="">Change password</option>
          </select>
          	
          </form>	
       </div>
</body>
</html>
