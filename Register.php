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

$registerName=$_POST['name'];
$registerEmail=$_POST['email'];
$registerPassword=$_POST['password'];
$registerConfirmPassword=$_POST['confirm_password'];

// To protect MySQL injection
$registerName = stripslashes($registerName);
$registerEmail = stripslashes($registerEmail);
$registerPassword = stripslashes($registerPassword);
$registerConfirmPassword = stripslashes($registerPassword);
$registerName = mysql_real_escape_string($registerName);
$registerEmail = mysql_real_escape_string($registerEmail);
$registerPassword = mysql_real_escape_string($registerPassword);
$registerConfirmPassword = mysql_real_escape_string($registerConfirmPassword);

$query = "INSERT INTO $tbl_name VALUES('$registerEmail','$registerPassword','$registerName')";

$result = mysql_query($query);

$usercheck = $_POST['email'];
$check = mysql_query("SELECT email FROM users WHERE email = '$usercheck'") 
or die(mysql_error());
$check2 = mysql_num_rows($check);
if ($check2 != 0) {
 		die('Sorry, the email '.$_POST['email'].' is already in use.');
}
elseif($_POST['password'] != $_POST['confirm_password']){
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