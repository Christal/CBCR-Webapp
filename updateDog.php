<?php
ob_start();
$host="localhost";
$username="root";
$password="";
$database="cs4912";

$tbl_name="dogs";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

$username = $_SESSION['userName'];

echo "CALLING ME ";

$registerID = $_POST['ID'];
$registerName=$_POST['Name'];
$registerEmail=$_POST['Contact'];
$registerAge=$_POST['Age'];
$registerSex=$_POST['Sex'];
$registerLocation=$_POST['Location'];
$registerWeight=$_POST['Weight'];
$registerCoatColor=$_POST['CoatColor'];
$registerCoatType=$_POST['CoatType'];
$registerActivity=$_POST['Activity'];
$registerURL=$_POST['URL'];
$registerDescription=$_POST['Description'];
$registerTag=$_POST['Tag'];
$registerStatus=$_POST['Status'];
$registerReleaseDate=$_POST['ReleaseDate'];
$registerLastUpdated=$_POST['LastUpdated'];
$registerHouseTrained=$_POST['HouseTrained'];
$registerSpayed=$_POST['Spayed'];
$registerVaccinations=$_POST['Vaccinations'];
$registerHomePreference=$_POST['HomePreference'];
$registerPetFinder=$_POST['PetFinder'];
$registerFacebook=$_POST['Facebook'];

// To protect MySQL injection
$registerName = stripslashes($registerName);
$registerEmail = stripslashes($registerEmail);

$registerURLLink = "images/" . $registerURL;
$registerDes = addslashes($registerDescription);

$admin = "SELECT users WHERE name = '$registerName'";

$query = "UPDATE dogs SET email = '$registerEmail', 
		name = '$registerName', 
		age = '$registerAge', 
		sex = '$registerSex', 
		location ='$registerLocation',
		weight= '$registerWeight',
		coat_color='$registerCoatColor',
		coat_type='$registerCoatType',
		activity_level='$registerActivity',
		description='$registerDes',
		tag='$registerTag',
		status='$registerStatus',
		release_date='$registerReleaseDate',
		last_updated='$registerLastUpdated',
		house_trained='$registerHouseTrained',
		spayed_neutered='$registerSpayed',
		current_vaccinations='$registerVaccinations',
		home_preference='$registerHomePreference',
		petfinder='$registerPetFinder',
		facebook='$registerFacebook'
	 WHERE ID ='$registerID'";

$result = mysql_query($query);
$result2 = mysql_query($admin);


if(!$result){
	echo "SOMETHING WENT FUCKING WRONG";
}
elseif($registerName == "" or $registerEmail ==""){
	header("location:adminHome.html");
}
elseif($result2['admin']== 0){

	header("location:home.php");
}
else{

	header("location:adminHome.php");
}
mysql_close();

ob_end_flush();
?>