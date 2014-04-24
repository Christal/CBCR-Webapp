<?php ob_start();
	$host="db150b.pair.com";
	$username="cbcr";
	$password="RmgXUCLD";
	$database="cbcr_doglist";

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
$registerVideo=$_POST['Video'];
$registerDescription=$_POST['Description'];
$registerTag=$_POST['Tag'];
$registerStatus=$_POST['Status'];
$registerReleaseDate=$_POST['ReleaseDate'];
$registerLastUpdated=$now = date('Y-m-d H-i-s');
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
		video,
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
		'$registerVideo',
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
	header("location:adminHome.php");
}
mysql_close();

ob_end_flush();
?>