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
		
		<h2>Contact: <?php echo $dogPosterName. ' (' .$email . ')';?></h2>
		<img src="<?php echo $URL; ?>"/><br>
		Name: <?php echo $dog['name'];?><br>
		Age: <?php echo $dog['age'];?><br>
		Sex: <?php echo $dog['sex'];?><br>
		Location: <?php echo $dog['location'];?><br>
		Weight: <?php echo $dog['weight'];?><br>
		Coat Color: <?php echo $dog['coat_color'];?><br>
		Coat Type: <?php echo $dog['coat_type'];?><br>
		Activity Level: <?php echo $dog['activity_level'];?><br>
		Description: <?php echo $description?><br>
		<br>
		Status: <?php echo $dog['status'];?><br>
		<br>
		House Trained: <?php echo $dog['house_trained'];?><br>
		Spayed/Neutered: <?php echo $dog['spayed_neutered'];?><br>
		Current of Vaccinations: <?php echo $dog['current_vaccinations'];?><br>
		Home Preferences: <?php echo $dog['home_preference'];?><br>
		
		<form action='adoptionapplication.php' method='post'>
			<input type="submit" value="Apply to Adopt Me"/></td>
		</form>
			
		<form name = "input" action = "home.php" method = "post">
			<input type="submit" value="Back to Home" name="backtohome"/>
		</form>
		
	</div>
</body>
</html>
