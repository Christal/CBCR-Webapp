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
$registerAdminSelection=$_POST['admin'];

// To protect MySQL injection
$registerName = stripslashes($registerName);
$registerEmail = stripslashes($registerEmail);
$registerPassword = stripslashes($registerPassword);
$registerConfirmPassword = stripslashes($registerPassword);
$registerName = mysql_real_escape_string($registerName);
$registerEmail = mysql_real_escape_string($registerEmail);
$registerPassword = mysql_real_escape_string($registerPassword);
$registerConfirmPassword = mysql_real_escape_string($registerConfirmPassword);



$usercheck = $_POST['userEmail'];
$check = mysql_query("SELECT email FROM users WHERE email = '$usercheck'") 
or die(mysql_error());
$check2 = mysql_num_rows($check);

if ($check2 != 0) {
	header("location:registerFailEmail.html");
}
elseif($_POST['admin'] == ""){
	header("location:registerFail.html");
}
elseif($_POST['userPassword'] != $_POST['userConfirmPassword']){
	header("location:registerFail.html");
}
elseif($registerName == "" or $registerEmail ==""  or $registerPassword=="" ){
	header("location:registerFail.html");
}
else{
	$query = "INSERT INTO $tbl_name VALUES('','$registerEmail', '$registerName', '$registerPassword', '$registerAdminSelection')";
	$result = mysql_query($query);
	header("location:members.php");
}


mysql_close();

ob_end_flush();
?>