<!DOCTYPE html>
<html>
<head>
	<title>Carolina Border Collie Rescue</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<?php
	
	//connect to the database
	$host="localhost";$username="root";$password="cs4912";$database="cs4912";
	mysql_connect($host,$username,$password);
	@mysql_select_db($database) or die( "Unable to select database");
	mysql_close();
	
	
	?>
	
	<!-- HEADER: Banner goes here -->
	<div id="header">
		<img alt="Carolina Border Collie Rescue" src="images/header.png"/>
	</div>
	<!-- NAVIGATION BAR: -->
	<div id="nav">
		<img alt="Navigation Bar" src="images/nav.png" />
	</div>
	<!-- CONTAINER: -->
	<div id="container">
		<div>
	
		
		</div>
		
		
		
		<!-- FOOTER: -->
		<div id="footer">
			<p>CBCR @2014</p>
		</div>
	</div>
</body>
</html>