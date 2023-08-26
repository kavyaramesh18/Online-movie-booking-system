<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$db     = 'reservation database';
$con  = mysqli_connect($dbhost,$dbuser,'',$db);

if(!$con)
{
   die(mysqli_error($con)); 
}
?>