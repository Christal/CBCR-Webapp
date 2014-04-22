<?php
session_start();
ob_start();
$host="localhost";
$username="root";
$password="cs4912";
$database="cs4912";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$userEmail=$_POST['email'];

$query = "DELETE FROM users WHERE email='$userEmail'";
$result = mysql_query($query);
header("location:members.php");

mysql_close();
ob_end_flush();

?>