<?php
ob_start();
$host="localhost";
$username="root";
$password="";
$database="cs4912";

$tbl_name="dogs";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

echo "CALLING ME ";


$registerURLLink = "images/" . $registerURL;
$registerDes = addslashes($registerDescription);

$dogID = $_POST['dogID'];

if($registerApprove == 2);
{
	$query = "UPDATE dogs SET admin = 1 WHERE ID ='$dogID'";
}

if($registerApprove == 1);
{
	$query = "UPDATE dogs SET admin = 0 AND member = 1 WHERE ID ='$dogID'";
}

if($registerApprove == 0);
{
	$query = "UPDATE dogs SET admin = 0 WHERE ID ='$dogID'";
}
$result = mysql_query($query);


if(!$result){
	echo "SOMETHING WENT WRONG";
}

else{
	header("location:adminHome.php");
}
mysql_close();

ob_end_flush();
?>