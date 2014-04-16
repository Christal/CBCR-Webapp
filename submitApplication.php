<?php
ob_start();
$host="localhost";
$username="root";
$password="cs4912";
$database="cs4912";

$tbl_name="dogs";

mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

echo "CALLING ME ";

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

$query = "INSERT INTO dogs (
		email, 
		name,
		age,
		sex,
		location,
		weight,
		coat_color,
		coat_type,
		activity_level,
		URL,
		description,
		tag,
		status,
		release_date,
		last_updated,
		house_trained,
		spayed_neutered,
		current_vaccinations,
		home_preference,
		petfinder,
		facebook
	) 
	VALUES(
		'$registerEmail', 
		'$registerName',
		'$registerAge',
		'$registerSex',
		'$registerLocation',
		'$registerWeight',
		'$registerCoatColor',
		'$registerCoatType',
		'$registerActivity',
		'$registerURLLink',
		'$registerDes',
		'$registerTag',
		'$registerStatus',
		'$registerReleaseDate',
		'$registerLastUpdated',
		'$registerHouseTrained',
		'$registerSpayed',
		'$registerVaccinations',
		'$registerHomePreference',
		'$registerPetFinder',
		'$registerFacebook'
	)";

$result = mysql_query($query);


if(!$result){
	echo "SOMETHING WENT FUCKING WRONG";
}
elseif($registerName == "" or $registerEmail ==""){
	header("location:registerFail.html");
}
else{
	header("location:success.html");
}
mysql_close();

ob_end_flush();
?>