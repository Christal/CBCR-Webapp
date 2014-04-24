<?php session_start();
	$host="db150b.pair.com";
	$username="cbcr";
	$password="RmgXUCLD";
	$database="cbcr_doglist";


mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");


$loginEmail=$_POST['userEmail'];
$loginPassword=$_POST['userPassword'];

// To protect MySQL injection
$loginEmail = stripslashes($loginEmail);
$loginPassword = stripslashes($loginPassword);
$loginEmail = mysql_real_escape_string($loginEmail);
$loginPassword = mysql_real_escape_string($loginPassword);

$sql="SELECT * FROM users WHERE email='$loginEmail' and password='$loginPassword'";
$myAdmin ="SELECT * FROM users WHERE email='$loginEmail' and admin =1";


$result=mysql_query($sql);
$result2=mysql_query($myAdmin);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$count2=mysql_num_rows($result2);

if($count2 == 1){
$row = mysql_fetch_assoc($result2);
	$_SESSION['userEmail'] = $row['email'];
	$_SESSION['userPassword'] = $row['password'];
	$_SESSION['userName'] = $row['name'];
	header("location:adminHome.php");
}
// If result matched $myusername and $mypassword, table row must be 1 row
elseif($count==1){
	// Register userEmail, userPIN, userName and redirect to file "success.php"
	$row = mysql_fetch_assoc($result);
	$_SESSION['userEmail'] = $row['email'];
	$_SESSION['userPassword'] = $row['password'];
	$_SESSION['userName'] = $row['name'];
	header("location:home.php");
}
else {
echo "Wrong Username or Password";
header("location:FailedLogin.html");
}
ob_end_flush();
?>