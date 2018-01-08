<?php
$details=$_POST['alphaids'];


if($details=='change')
{
header("Location:page2.php");
}

if($details=='bus')
{
header("Location:page3.php");
}

if($details=='route')
{
header("Location:page4.php");
}

?>