<?php session_start(); ob_start();
	$host="db150b.pair.com";
	$username="cbcr";
	$password="RmgXUCLD";
	$database="cbcr_doglist";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$userEmail=$_POST['email'];

$query = "DELETE FROM users WHERE email='$userEmail'";
$result = mysql_query($query);
header("location:members.php");

mysql_close();
ob_end_flush();

?>