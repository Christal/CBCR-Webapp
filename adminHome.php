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
		
		$username = $_SESSION['userName'];
		$useremail = $_SESSION['userEmail'];
		
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
				
		<div id="adoptionDiv">	
			<center><h1>Admin Home Page for <?php echo $username . ' (' .$useremail . ')';?> </h1>
			<form action='Logout.php' method='post'><input type="Submit" value="Logout"></form>
	
		<h4>Dogs to be Approved</h4></center>
				<?php $sql = "SELECT * FROM dogs WHERE admin =1";
					$result = mysql_query($sql);
					while ($rows = mysql_fetch_array($result)) {
				?>
				<form action='dogs.php' method='post'>
					<div class = 'cols2'>
						<img src="<?php echo $rows['URL']; ?>" alt="Picture of dog"/>
							<input type="hidden" name="URL" value="<?php echo $rows['URL'];?>">
							<br/>
						<h4><?php echo $rows['name']; ?>
							<input type="hidden" name="name" value="<?php echo $rows['name'];?>"></h4>
							</br>
						<h3>Contact: </h3><p><?php echo $rows['email']; ?>
							<input type="hidden" name="email" value="<?php echo $rows['email'];?>"></p>
						<input type="submit" value="Adopt Me!"/>	
					</div>
					<center>
						<div id="nameimage">
							<img src="images/redCollar.png" alt="Dog collar divider"/> 
							<br><br/>
						</div>
					</center>
				</form>
			
			<br></br>
			<?php }
				$count=mysql_num_rows($result);
			?>
	
			<h4>Available Dogs</h4></center>
			<?php $sql = "SELECT * FROM dogs WHERE admin =0";
				$result = mysql_query($sql);
				while ($rows = mysql_fetch_array($result)) {
			?>
			<form action='dogs.php' method='post'>
				<div class = 'cols2'>
					<img src="<?php echo $rows['URL']; ?>" alt="Picture of dog"/>
						<input type="hidden" name="URL" value="<?php echo $rows['URL'];?>">
						<br/>
					<h4><?php echo $rows['name']; ?>
						<input type="hidden" name="name" value="<?php echo $rows['name'];?>"></h4>
						</br>
					<h3>Contact: </h3><p><?php echo $rows['email']; ?>
						<input type="hidden" name="email" value="<?php echo $rows['email'];?>"></p>
					<input type="submit" value="Adopt Me!"/>	
				</div>
				<center>
					<div id="nameimage">
						<img src="images/redCollar.png" alt="Dog collar divider"/> 
						<br><br/>
					</div>
				</center>
			</form>
		
		<br></br>
		<?php }
			$count=mysql_num_rows($result);
		?>
		
		<center><h4>Your Dogs</h4></center>
			<?php $sql = "SELECT * FROM dogs WHERE email='$useremail'";
				$result = mysql_query($sql);
				while ($rows = mysql_fetch_array($result)) {
			?>
			<form action='dogs.php' method='post'>
				<div class = 'cols2'>
					<img src="<?php echo $rows['URL']; ?>" alt="Picture of dog"/>
						<input type="hidden" name="URL" value="<?php echo $rows['URL'];?>">
						<br/>
					<h4><?php echo $rows['name']; ?>
						<input type="hidden" name="name" value="<?php echo $rows['name'];?>"></h4>
						</br>	
					<h3>Contact: </h3><p><?php echo $rows['email']; ?>
						<input type="hidden" name="email" value="<?php echo $rows['email'];?>"></p>
					<input type="submit" value="View"/>	
					<br></br>
					<h3>Approve:</h3><p><?php if($rows['admin']==0){echo "Approved";} else{ echo "Not Approved";} ?>
						<input type="hidden" name ="approve" value="<?php echo $rows['admin'];?>"></p>
				<br>
				<br>
				</div>
				<center>
					<div id="nameimage">
						<img src="images/redCollar.png" alt="Dog collar divider"/> 
						<br><br/>
					</div>
				</center>
			</form>
		<br></br>
		<?php
			}
			mysql_close();
		
			$count=mysql_num_rows($result);
			
			if($count < 1){
				echo "<p>You currently have no dog listings.</p>";
			}
		?>
	
		<!--<form action='CheckPassword.php' method='post'><input type='submit' name='checkpassword' value='Check Password'/></form>-->
		
		<!-- FOOTER: -->
		<div id="footer">
			<p>CBCR @2014</p>
		</div>
	</div>
	</div>
	
</body>
</html>