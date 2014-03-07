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
		
		$username = $_SESSION['userName'];
		$useremail = $_SESSION['userEmail'];
		
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
	
		<h1>Home Page for
		<!-- USERS NAME -->
		<?php echo $username . ' (' .$useremail . ')';?>
		</h1>
		
		<form action='CheckPassword.php' method='post'><input type='submit' name='checkpassword' value='Check Password'/></form>
		<form action='Logout.php' method='post'><input type="Submit" value="Logout"></form>
				
		<h2>Available Dogs</h2>
		<!-- $sql = "SELECT * FROM corkboard NATURAL JOIN userfollows WHERE Followee='$useremail'"; -->
		<?php $sql = "SELECT * FROM pushpin";
			$result = mysql_query($sql);
			while ($rows = mysql_fetch_array($result)) {
		?>
		<form action='dogs.php' method='post'>
			<div id="nameimage">
				<img src="images/redCollar.png" alt="Dog collar divider"/> 
				<br>
			Email:<?php echo $rows['Email']; ?>
				<input type="hidden" name="corkboardEmail" value="<?php echo $rows['Email'];?>">
				<br>
			Description:<?php echo $rows['Description']; ?>
				<input type="hidden" name="corkboardLastUpdate" value="<?php echo $rows['Description'];?>">
				<br>
			Picture:<img src="<?php echo $rows['URL']; ?>" alt="Picture of dog"/>
					<input type="hidden" name="pushpinURL" value="<?php echo $rows['URL'];?>">
					<br>
				<br>
			<input type="submit" value="Adopt Me!"/>
			</div>

		</form>
		<br></br>
		<?php
			}
			$count=mysql_num_rows($result);
			
			if($count < 1){
				echo "<p>Either you're not following anyone or they have no CorkBoards</p>";
			}
		?>
		
		
		
		
		
		<h2>Your Dogs</h2>
		
		<?php $sql = "SELECT * FROM pushpin WHERE Email='$useremail'";
			$result = mysql_query($sql);
			while ($rows = mysql_fetch_array($result)) {
		?>
		<form action='dogs.php' method='post'>
			<input type="hidden" name="corkboardEmail" value="<?php echo $useremail;?>">
			Email:<?php echo $rows['Email']; ?>
				<input type="hidden" name="corkboardEmail" value="<?php echo $rows['Email'];?>">
				<br>
			Title:<?php echo $rows['Title']; ?>
				<input type="hidden" name="corkboardTitle" value="<?php echo $rows['Title'];?>">
				<br>
			Description:<?php echo $rows['Description']; ?>
				<input type="hidden" name="corkboardLastUpdate" value="<?php echo $rows['Description'];?>">
				<br>
			Picture:<img src="<?php echo $rows['URL']; ?>"/>
					<input type="hidden" name="pushpinURL" value="<?php echo $rows['URL'];?>">
					<br>
				<br>
			<input type="submit" value="Adopt Me!"/></td>
		</form>
		<br></br>
		<?php
			}
			mysql_close();
		
			$count=mysql_num_rows($result);
			
			if($count < 1){
				echo "<p>You currently have no CorkBoards</p>";
			}
		?>
		
		<!-- <form action='AddCorkboard.html' method='get'><input type="submit" value="Add CorkBoard"/></form><br/> -->
		<form name="tags.php" action="popularTags.php" method="get"><input type="submit" value="Popular Tags"/></form>
		
		
		
		
		<!-- FOOTER: -->
		<div id="footer">
			<p>CBCR @2014</p>
		</div>

	</div>
	
</body>
</html>