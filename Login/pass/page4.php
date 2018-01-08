<?php 
$conn= mysqli_connect('localhost','root','');
  if($conn == false)
{
   die(mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
<?php
include '../pract/front1.php';
?>
</head>
<body>
<div align="center"><h1>Routes</h1></div>
<form action="" method="post">
Source:<br>
<select name="sor" id="sor">
  <option value="Marathalli">Marathalli</option>
  <option value="Koramangala">Koramangala</option>
  <option value="Banashankari">Bhanshankari</option>
</select>

<input type="submit" name="submit" id="submit" value="Submit">
</form>
<br>

<?php 
   if(!empty($_POST['sor']))
      {
          $values = $_POST['sor'];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
               {
                    if (isset($_POST['submit']) && ($_POST['submit'] == 'Submit')) 
                        {
                              echo "route number to $values is:";
                         }
                }

        
       }
?>

<?php
        $db= mysqli_select_db($conn,'vms');
        $result = mysqli_query($conn,"SELECT * FROM routes WHERE source='$values'"); 
        while($row = mysqli_fetch_array($result))
           {
                 $r=$row['rid'];
                 echo $r;
           }
?>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#rid</th>
      <th scope="col">#sid</th>
      <th scope="col">Stop Name</th>
      <th scope="col">Time</th>
      </tr>
  </thead>

  <tbody>
    <tr>
      <?php 
      $result = mysqli_query($conn,"SELECT * FROM stops WHERE sid='1'AND rid='$r'"); 
      while($row = mysqli_fetch_array($result))
           {
                 $r=$row['rid'];
                 $s=$row['sid'];
                 $sn=$row['stopname'];
                 $t=$row['time_a'];
           }
      ?>
      <th scope="row"><?php echo $r;?></th>
      <td><?php echo $s;?></td>
      <td><?php echo $sn;?></td>
      <td><?php echo $t;?></td>
    </tr>

    <tr>
      <?php 
      $result = mysqli_query($conn,"SELECT * FROM stops WHERE sid='2'AND rid='$r'"); 
      while($row = mysqli_fetch_array($result))
           {
                 $r=$row['rid'];
                 $s=$row['sid'];
                 $sn=$row['stopname'];
                 $t=$row['time_a'];
           }
      ?>
      <th scope="row"><?php echo $r;?></th>
      <td><?php echo $s;?></td>
      <td><?php echo $sn;?></td>
      <td><?php echo $t;?></td>
    </tr>
    
    
    <tr>
      <?php 
      $result = mysqli_query($conn,"SELECT * FROM stops WHERE sid='3'AND rid='$r'"); 
      while($row = mysqli_fetch_array($result))
           {
                 $r=$row['rid'];
                 $s=$row['sid'];
                 $sn=$row['stopname'];
                 $t=$row['time_a'];
           }
      ?>
      <th scope="row"><?php echo $r;?></th>
      <td><?php echo $s;?></td>
      <td><?php echo $sn;?></td>
      <td><?php echo $t;?></td>
    </tr>

    <tr>
      <?php 
      $result = mysqli_query($conn,"SELECT * FROM stops WHERE sid='4'AND rid='$r'"); 
      while($row = mysqli_fetch_array($result))
           {
                 $r=$row['rid'];
                 $s=$row['sid'];
                 $sn=$row['stopname'];
                 $t=$row['time_a'];
           }
      ?>
      <th scope="row"><?php echo $r;?></th>
      <td><?php echo $s;?></td>
      <td><?php echo $sn;?></td>
      <td><?php echo $t;?></td>
    </tr>
  </tbody>
</table>
</body>
</html>