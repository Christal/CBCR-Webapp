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
			
		<h2>Available Dogs</h2>
		<?php $sql = "SELECT * FROM dogs";
			$result = mysql_query($sql);
			while ($rows = mysql_fetch_array($result)) {
		?>
		<form action='dogprofile.php' method='post'>
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
			<input type="submit" value="Adopt Me!"/>
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
	
</body>
</html>