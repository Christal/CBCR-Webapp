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
		<div id="adoptionDiv">	
		<center><h4>Available Dogs</h4></center>
		<?php $sql = "SELECT * FROM dogs";
			$result = mysql_query($sql);
			while ($rows = mysql_fetch_array($result)) {
		?>
		<form action='dogprofile.php' method='post'>
			<div class = 'cols2'>
			<img src="<?php echo $rows['URL']; ?>" alt="Picture of dog"/>
					<input type="hidden" name="URL" value="<?php echo $rows['URL'];?>">
					<br/>
			
			<h4><center>Name<?php echo $rows['name']; ?>
				<input type="hidden" name="name" value="<?php echo $rows['name'];?>"></center></h4>
				
			<h3>Description</h3><p><?php echo $rows['description']; ?>
				<input type="hidden" name="description" value="<?php echo $rows['description'];?>"></p>
				
			<h3>Contact</h3><p><?php echo $rows['email']; ?>
				<input type="hidden" name="email" value="<?php echo $rows['email'];?>"></p>
			<input type="submit" value="Adopt Me!"/>	
			</div>
			<center>
			<div id="nameimage">
				<img src="images/redCollar.png" alt="Dog collar divider"/> 
				<br/>
				<br/>
			</center>
			
			</div>
			<form action='dogprofile.php' method='post'>
			<div class = 'cols2'>
				
			<h3>Description</h3><p><?php echo $rows['description']; ?>
				<input type="hidden" name="description" value="<?php echo $rows['description'];?>"></p>
				
			<h3>Contact</h3><p><?php echo $rows['email']; ?>
				<input type="hidden" name="email" value="<?php echo $rows['email'];?>"></p>
			<input type="submit" value="Adopt Me!"/>	<br/>
			<img src="<?php echo $rows['URL']; ?>" alt="Picture of dog"/>
					<input type="hidden" name="URL" value="<?php echo $rows['URL'];?>">
					<br/>
			
			<h4><center>Name<?php echo $rows['name']; ?>
				<input type="hidden" name="name" value="<?php echo $rows['name'];?>"></center></h4>
			</div>
			<center>
			<div id="nameimage">
				<img src="images/blueCollar.png" alt="Dog collar divider"/> 
				<br/>
				<br/>
			</center>
			
			</div>
			
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