<?php

$con=mysql_connect("localhost","root","","racontrol");

if($con) echo "connection";
else die("database error: :.mysql_connect_error()); <br>


$forword=$_POST['fr'];
$left=$_POST['le'];
$stop=$_POST['st'];
$right=$_POST['ri'];
$backword=$_POST['ba'];
$sql="INSERT INTO `moves` (`fr`,`le`,`st`,`ri`,`ba`)  VALUES (`$forword`,`$left`,`$stop`,`$right`,`$backword`)";
if (mysqli_query($con,$sql)) echo "data added"

else "error"; <br>


?>
