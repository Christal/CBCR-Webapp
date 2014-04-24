<?php session_start();
	$host="db150b.pair.com";
	$username="cbcr";
	$password="RmgXUCLD";
	$database="cbcr_doglist";

		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
		
		$username = $_SESSION['userName'];
		$useremail = $_SESSION['userEmail'];

	?>
	<!DOCTYPE html>

<head>
	<title>Carolina Border Collie Rescue</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

	
	
	<!-- HEADER: Banner goes here -->
	<div id="header">
		<a href="index.php"><img alt="Carolina Border Collie Rescue" src="images/header.png"/></a>
	</div>

	<!-- NAVIGATION BAR: -->
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="adoption.php">Adopt Me</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="courtesy.php">Courtesy</a></li>
			<li><a href="adopted.html">Adopted</a></li>
			<li><a href="support.html">How to Help</a></li>
			<li><a href="contacts.html">Contacts</a></li>
			<li><a href="resources.html">Resources</a></li>
		</ul>
	</nav>

	<div id="container">			
		<div>	
			<h4>List of Dogs</h4></center>
			<?php $sql = "SELECT * FROM dogs";
				$result = mysql_query($sql);
				while ($rows = mysql_fetch_array($result)) {
			?>
			<div>
				<img src="<?php echo $rows['URL']; ?>" alt="Picture of dog"/></br>
				Email: <?php echo $rows['email']; ?></br>
				Name: <?php echo $rows['name']; ?></br>
				Age: <?php echo $rows['age']; ?></br>
				Sex: <?php echo $rows['sex']; ?></br>
				Location: <?php echo $rows['location']; ?></br>
				Weight: <?php echo $rows['weight']; ?></br>
				Coat Color: <?php echo $rows['coat_color']; ?></br>
				Coat Type: <?php echo $rows['coat_type']; ?></br>
				Activity Level: <?php echo $rows['activity_level']; ?></br>
				Description: <?php echo $rows['description']; ?></br>
				Tag #: <?php echo $rows['tag']; ?></br>
				Status: <?php echo $rows['status']; ?></br>
				Release Date: <?php echo $rows['release_date']; ?></br>
				Last Updated: <?php echo $rows['last_updated']; ?></br>
				House Trained: <?php echo $rows['house_trained']; ?></br>
				Spayed and Neutered: <?php echo $rows['spayed_neutered']; ?></br>
				Current Vaccinations: <?php echo $rows['current_vaccinations']; ?></br>
				Home Preference: <?php echo $rows['home_preference']; ?></br>
				Petfinder: <?php echo $rows['petfinder']; ?></br>
				Facebook: <?php echo $rows['facebook']; ?></br>
			</div>		
			<?php
				}
				mysql_close();
				$count=mysql_num_rows($result);
				if($count < 1){
					echo "<p>You currently have no dog listings.</p>";
				}
			?>
	
			<!-- FOOTER: -->
			<div id="footer">
				<p>CBCR @2014</p>
			</div>
		</div>
	</div>
</body>
</html>