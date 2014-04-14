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

$registerName=$_POST['userName'];
$registerEmail=$_POST['userEmail'];
$registerPassword=$_POST['userPassword'];
$registerConfirmPassword=$_POST['userConfirmPassword'];

// To protect MySQL injection
$registerName = stripslashes($registerName);
$registerEmail = stripslashes($registerEmail);
$registerPassword = stripslashes($registerPassword);
$registerConfirmPassword = stripslashes($registerPassword);
$registerName = mysql_real_escape_string($registerName);
$registerEmail = mysql_real_escape_string($registerEmail);
$registerPassword = mysql_real_escape_string($registerPassword);
$registerConfirmPassword = mysql_real_escape_string($registerConfirmPassword);

$query = "INSERT INTO $tbl_name VALUES('$registerEmail', '$registerName', '$registerPassword')";

$result = mysql_query($query);

$usercheck = $_POST['userEmail'];
$check = mysql_query("SELECT email FROM users WHERE email = '$usercheck'") 
or die(mysql_error());
$check2 = mysql_num_rows($check);
if ($check2 != 0) {
 		die('Sorry, the email '.$_POST['userEmail'].' is already in use.');
}
elseif($_POST['userPassword'] != $_POST['userConfirmPassword']){
	echo "Passwords do not match";
}
elseif(!$result){
	echo "SOMETHING WENT FUCKING WRONG";
}
elseif($registerName == "" or $registerEmail ==""  or $registerPassword=="" ){
	header("location:registerFail.html");
}
else{
	header("location:success.html");
}
mysql_close();

ob_end_flush();
?>