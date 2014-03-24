<!DOCTYPE html>

<html>

<head>
	<title>Carolina Border Collie Rescue</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
</head>

<body>

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
			
			<form action="CheckLogin.php" method="post">
				<p> Email: <input type="email" name="userEmail" size="25" /> </p>
				<p> Password: <input type="password" name="userPIN" size="25" /> </p>
				<p><input type="submit" value="Login"></p>
				<p id="status"></p>
			</form>
			<form action="Register.html" method="post"><input type="submit" value="Registration Page"></form>
			
		</div>
	
		<!-- FOOTER: -->
		<div id="footer">
			<p>CBCR @2014</p>
		</div>
		
	</div><!--End container-->	
	
</body>
</html>
