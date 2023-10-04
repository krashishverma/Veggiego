<?php
$server="localhost";
$username="root";
$password="";
$dbname="veggie";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
	die('could not connect mysql:'.mysql_error());
}
?>