<!DOCTYPE html>

<html>

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
			<li><a href="courtesy.php">Courtesy</a></li>
			<li><a href="adopted.html">Adopted</a></li>
			<li><a href="support.html">How to Help</a></li>
			<li><a href="contacts.html">Contacts</a></li>
			<li><a href="resources.html">Resources</a></li>
		</ul>
	</nav>

	
	<!-- CONTAINER: -->
	<div id="container">
		<div>
			
			<form action="CheckLogin.php" method="post">
				<p> Email: <input type="email" name="userEmail" size="25" /> </p>
				<p> Password: <input type="password" name="userPassword" size="25" /> </p>
				<p><input type="submit" value="Login"></p>
				<p id="status"></p>
			</form>

		</div>
	
		<!-- FOOTER: -->
		<div id="footer">
			<p>CBCR @2014</p>
		</div>
		
	</div><!--End container-->	
	
</body>
</html>
