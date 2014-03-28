<!DOCTYPE html>

<head>
	<title>Carolina Border Collie Rescue</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

	<?php
		session_start();
		
		$host="localhost";
		$username="root";
		$password="cs4912";
		$database="cs4912";

		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
		
		$email = $_POST['email'];
		$name = $_POST['name'];
		$URL = $_POST['URL'];
		$description = $_POST['description'];
		
		$findDogQuery = "SELECT * FROM dogs WHERE Email = '$email' AND Name = '$name'";
		$dogResult = mysql_query($findDogQuery);
		$dog = mysql_fetch_array($dogResult);
		
		$sql = "SELECT Name from users WHERE Email='$email'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$dogPosterName = $row[0];
		
	?>

	<!-- HEADER: Banner goes here -->
	<div id="header">
		<img alt="Carolina Border Collie Rescue" src="images/header.png"/>
	</div>

	<!-- NAVIGATION BAR: -->
	<div id="nav">
		<img alt="Navigation Bar" src="images/nav.png" />	
	</div>

	<div id="container">
		
		<div class ='cols2'>
		<img src="<?php echo $URL; ?>"/><br>
		<h4>Name <?php echo $dog['name'];?></h4>
		<h3>Age</h3> <?php echo $dog['age'];?>
		<h3>Sex</h3> <?php echo $dog['sex'];?>
		<h3>Location</h3> <?php echo $dog['location'];?>
		<h3>Weight</h3> <?php echo $dog['weight'];?>
		<h3>Coat Color</h3> <?php echo $dog['coat_color'];?>
		<h3>Coat Type</h3> <?php echo $dog['coat_type'];?>
		<h3>Activity Level</h3> <?php echo $dog['activity_level'];?>
		<h3>Description</h3> <p><?php echo $description?></p>
		<br>
		<h3>Status</h3> <?php echo $dog['status'];?>
		<br>
		<h3>House Trained</h3> <?php echo $dog['house_trained'];?>
		<h3>Spayed/Neutered</h3> <?php echo $dog['spayed_neutered'];?>
		<h3>Current of Vaccinations</h3> <?php echo $dog['current_vaccinations'];?>
		<h3>Home Preferences</h3> <?php echo $dog['home_preference'];?>
		<br/>
		<h3>Contact</h3> <p><?php echo $dogPosterName. ' (' .$email . ')';?></p>
		<form action='adoptionapplication.php' method='post'>
			<input type="submit" value="Apply to Adopt Me"/></td>
		</form>
		</div>	
		<form name = "input" action = "home.php" method = "post">
			<input type="submit" value="Back to Home" name="backtohome"/>
		</form>
		
	</div>
</body>
</html>
