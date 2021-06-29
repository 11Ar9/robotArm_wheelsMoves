<? php


$con=mysql_connect("localhost","root","","racontrol");

if($con) echo "connection";
else die("database error: :.mysql_connect_error()); <br>

if($_POST['sv']);{
$m1=$_POST['r1'];
$m2=$_POST['r2'];
$m3=$_POST['r3'];
$m4=$_POST['r4'];
$m5=$_POST['r5'];
$sql="INSERT INTO `arcon` (`r1`,`r2`,`r3`,`r4`,`r5`)  VALUES (`$m1`,`$m2`,`$m3`,`$m4`,`$m5`)";
if (mysqli_query($con,$sql)) echo "data added"

else "error"; <br>

}
?>
