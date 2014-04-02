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
		
		$userName = $_SESSION['userName'];
		$userEmail = $_SESSION['userEmail'];
		
		$email = $_POST['email'];
		$name = $_POST['name'];
		$URL = $_POST['URL'];
		$description = $_POST['description'];
		
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
		<img alt="Carolina Border Collie Rescue" src="images/header.png"/>
	</div>

	<!-- NAVIGATION BAR: -->
	<nav>
		<ul>
			<li><a href="adoption.php">Adopt Me</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="#">Adopted</a></li>
			<li><a href="support.html">How to Help</a></li>
			<li><a href="contacts.html">Contacts</a></li>
			<li><a href="resources.html">Resources</a></li>
		</ul>
	</nav>

	<div id="container">
		
		<div class = 'cols2'>
		<img src="<?php echo $URL; ?>"/><br>
		<h4>Name <?php echo $dog['name'];?></h4><br>
		<h3>Age</h3> <?php echo $dog['age'];?>
		<h3>Sex</h3> <?php echo $dog['sex'];?>
		<h3>Location</h3> <?php echo $dog['location'];?>
		<br>
		<h3>Weight</h3> <?php echo $dog['weight'];?>
		<h3>Coat Color</h3> <?php echo $dog['coat_color'];?>
		<h3>Coat Type</h3> <?php echo $dog['coat_type'];?>
		<h3>Activity Level</h3> <?php echo $dog['activity_level'];?>
		<h3>Description</h3> <?php echo $description?>
		<br>
		<h3>Tag#</h3> <?php echo $dog['tag'];?>
		<h3>Status</h3> <?php echo $dog['status'];?>
		<h3>Release Date</h3> <?php echo $dog['release_date'];?>
		<h3>Last Updated</h3> <?php echo $dog['last_updated'];?>
		<br>
		<h3>House Trained</h3> <?php echo $dog['house_trained'];?>
		<h3>Spayed/Neutered</h3> <?php echo $dog['spayed_neutered'];?>
		<h3>Current on Vaccinations</h3> <?php echo $dog['current_vaccinations'];?>
		<h3>Home Preferences</h3> <?php echo $dog['home_preference'];?>
		<br>
		<h3>Listed on PetFinder</h3> <?php echo $dog['petfinder'];?>
		<h3>Listed on CBCR Facebook</h3> <?php echo $dog['facebook'];?>
		<br>
		<h3>User</h3> <?php echo $dogPosterName. ' (' .$email . ')';?>
		<h3>Contact</h3> <?php echo $dogPosterName. ' (' .$email . ')';?>
		</div>
		
		<form name="editDog" action="editDog.php" method="GET">
            <input type="hidden" name="dogID" value="<?php echo $dog['email']; ?>"/>
            <input type="submit" name="editDog" value="Edit"/>
        </form>
		<form action='adoptionapplication.php' method='post'>
			<input type="submit" value="Apply to Adopt Me"/></td>
		</form>

		<?php 
			if($email == $userEmail){
				echo "<form action='AddPushpin.php' method='get'>";
				echo "<input type='submit' value='Submit Dog Application'/>";
				echo "</form>";
			} 
		?>
			
		<form name = "input" action = "home.php" method = "post">
			<input type="submit" value="Back to Home" name="backtohome"/>
		</form>
		
	</div>
</body>
</html>
