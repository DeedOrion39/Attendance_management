<?php
$username="root";
$password="";
$server="localhost";
$db="d7a";

$con=mysqli_connect($server,$username,$password,$db);
if($con)
{
   
}
else
{
	die("no connection".mysqli_connect_error());
}
?>

