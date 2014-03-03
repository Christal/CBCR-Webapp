<?php
session_start();
ob_start();
$host="localhost";
$username="root";
$password="cs4912";
$database="cs4912";

$tbl_name="user";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

echo "CALLING ME ";

$loginEmail=$_POST['userEmail'];
$loginPassword=$_POST['userPIN'];

// To protect MySQL injection
$loginEmail = stripslashes($loginEmail);
$loginPassword = stripslashes($loginPassword);
$loginEmail = mysql_real_escape_string($loginEmail);
$loginPassword = mysql_real_escape_string($loginPassword);

$sql="SELECT * FROM $tbl_name WHERE Email='$loginEmail' and PIN='$loginPassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
if($loginEmail ==""  or $loginPassword=="" ){
	echo "FUCK BLANK SHIT";
}
// If result matched $myusername and $mypassword, table row must be 1 row
elseif($count==1){
	// Register userEmail, userPIN, userName and redirect to file "success.php"
	$row = mysql_fetch_assoc($result);
	$_SESSION['userEmail'] = $row['Email'];
	$_SESSION['userPIN'] = $row['PIN'];
	$_SESSION['userName'] = $row['Name'];
	header("location:home.php");
}
else {
echo "Wrong Username or Password";
header("location:FailedLogin.html");
}
ob_end_flush();
?>