<!DOCTYPE html>

<head>
	<title>Carolina Border Collie Rescue</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
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
		
		$userName = $_SESSION['userName'];
		$userEmail = $_SESSION['userEmail'];
		
		$email = $_POST['email'];
		$name = $_POST['name'];
		$URL = $_POST['URL'];
		
		$findDogQuery = "SELECT * FROM dogs WHERE email = '$email' AND name = '$name'";
		$dogResult = mysql_query($findDogQuery);
		$dog = mysql_fetch_array($dogResult);
		
		$sql = "SELECT name from users WHERE email='$email'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$dogPosterName = $row[0];
		
	?>

	<!-- HEADER: Banner goes here -->
	<div id="header">
		<a href="index.php"><img alt="Carolina Border Collie Rescue" src="images/header.png"/></a>
	</div>

	<!-- NAVIGATION BAR: -->
	<!-- NAVIGATION BAR: -->
	<nav>
		<ul>
			<li><a href="adoption.php">Adopt Me</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="courtesy.php">Courtesy</a></li>
			<li><a href="support.html">How to Help</a></li>
			<li><a href="contacts.html">Contacts</a></li>
			<li><a href="resources.html">Resources</a></li>
		</ul>
	</nav>


	<div id="container">
		
		<div class='cols1'>
			<h1>User: <?php echo $dogPosterName. ' (' .$email . ')';?></h1>
			
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
			Description: <?php echo $dog['description'];?><br>
			<br>
			Tag#: <?php echo $dog['tag'];?><br>
			Status: <?php echo $dog['status'];?><br>
			Release Date: <?php echo $dog['release_date'];?><br>
			Last Updated: <?php echo $dog['last_updated'];?><br>
			<br>
			House Trained: <?php echo $dog['house_trained'];?><br>
			Spayed/Neutered: <?php echo $dog['spayed_neutered'];?><br>
			Current of Vaccinations: <?php echo $dog['current_vaccinations'];?><br>
			Home Preferences: <?php echo $dog['home_preference'];?><br>
			Listed on PetFinder: <?php echo $dog['petfinder'];?><br>
			Listed on CBCR Facebook: <?php echo $dog['facebook'];?><br>
			
			
			<form name="editDog" action="editDog.php" method="GET">
				<input type="hidden" name="dogID" value="<?php echo $dog['email']; ?>"/>
				<input type="submit" name="editDog" value="Edit"/>
			</form>
			<form action='adoptionform.php' method='post'>
				<input type="submit" value="Apply to Adopt Me"/></td>
			</form>
		
		<?php 
			if($email == $userEmail){
				echo "<form action='submitdog.php' method='get'>";
				echo "<input type='submit' value='Submit Dog Application'/>";
				echo "</form>";
			} 
		?>
			
		<form name = "input" action = "home.php" method = "post">
			<input type="submit" value="Back to Home" name="backtohome"/>
		</form>
		
		</div>
		
	</div>
</body>
</html>
