
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
			
		<h2>Courtesy Dogs</h2>
		<?php $sql = "SELECT * FROM dogs WHERE status='Courtesy'";
			$result = mysql_query($sql);
			while ($rows = mysql_fetch_array($result)) {
		?>
		<form action='dogprofile.php' method='post' onsubmit="return checkCaptcha();">
			<div id="nameimage">
				<img src="images/redCollar.png" alt="Dog collar divider"/> 
				<br>
			Email:<?php echo $rows['email']; ?>
				<input type="hidden" name="email" value="<?php echo $rows['email'];?>">
				<br>
			Name:<?php echo $rows['name']; ?>
				<input type="hidden" name="name" value="<?php echo $rows['name'];?>">
				<br>
			Description:<?php echo $rows['description']; ?>
				<input type="hidden" name="description" value="<?php echo $rows['description'];?>">
				<br>
			Picture:<img src="<?php echo $rows['URL']; ?>" alt="Picture of dog"/>
					<input type="hidden" name="URL" value="<?php echo $rows['URL'];?>">
					<br>
				<br>
			<p>
			Are you a human? <input type="checkbox" id="captcha"> Yes!
			<p>
			<form action='adoptionform.php' method='post'>
				<input type="submit" value="Apply to Adopt Me"/></td>
			</form>
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
	
	<script language="javascript" type="text/javascript">
		function checkCaptcha() {
			if(!(document.getElementById("captcha").checked))
			{
				alert("Submission Failed. Hit the checkbox to make sure you're not a spam bot.");
				return false;
			}
		}	
	</script>
	
</body>
</html>