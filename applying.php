<?php
ob_start();
$host="localhost";
$username="root";
$password="cs4912";
$database="cs4912";

$tbl_name="users";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

echo "CALLING ME ";

$insertName=$_POST['Name'];
$insertSex=$_POST['Sex'];
$insertAge=$_POST['Age'];
$insertCoatColor=$_POST['CoatColor'];
$insertCoatType=$_POST['CoatType'];
$insertWeight=$_POST['Weight'];
$insertLocation=$_POST['Location'];
$insertShots=$_POST['Shots'];
$insertSpayed=$_POST['Spayed'];
$insertActivity=$_POST['Activity'];
$insertStatus=$_POST['Status'];
$insertContact=$_POST['Contact'];
$insertMember=$_POST['Member'];



$query = "INSERT INTO $tbl_name VALUES('$registerEmail', '$registerName', '$registerPassword')";

$result = mysql_query($query);

mysql_close();

ob_end_flush();
?>