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
		<img alt="Carolina Border Collie Rescue" src="images/header.png"/>
	</div>

	<!-- NAVIGATION BAR: -->
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="adoption.php">Adopt Me</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="courtesy.html">Courtesy</a></li>
			<li><a href="adopted.php">Adopted</a></li>
			<li><a href="support.html">How to Help</a></li>
			<li><a href="contacts.html">Contacts</a></li>
			<li><a href="resources.html">Resources</a></li>
		</ul>
	</nav>


	<div id="container">
				
		<div id="adoptionDiv">	

			<h4>Members</h4></center>
				<?php $sql = "SELECT * FROM users";
					$result = mysql_query($sql);
					while ($rows = mysql_fetch_array($result)) {
				?>
				<form action='remove.php' method='post'>
					<div>
						<?php echo $rows['email']; ?>
						<input type="hidden" name="email" value="<?php echo $rows['email'];?>"></p>
						<input type="submit" value="Remove Member"/>	
					</div>
				</form>
				<br></br>
				<?php }
					$count=mysql_num_rows($result);
				?>
			<!-- FOOTER: -->
			<div id="footer">
				<p>CBCR @2014</p>
			</div>
		</div>
	</div>
	
</body>
</html>