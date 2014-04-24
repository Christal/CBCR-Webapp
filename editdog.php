<!DOCTYPE html>
<html>
<head>
	<title>Dog Submission Form</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="header">
		<img alt="Carolina Border Collie Rescue" src="images/header.png"/>
	</div>

	<!-- NAVIGATION BAR: -->
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
	<?php
		session_start();
		
		$host="localhost";
		$username="root";
		$password="";
		$database="cs4912";

		mysql_connect($host,$username,$password);
		@mysql_select_db($database) or die( "Unable to select database");
		$name = $_GET['dogID'];
		
		$findDogQuery = "SELECT * FROM dogs WHERE ID = '$name'";
		$dogResult = mysql_query($findDogQuery);
		$dog = mysql_fetch_array($dogResult);
		
	?>
	<!-- CONTAINER: Holds the sidebar and main area -->
	<div id="container">
		<!-- MAIN: -->
		<div>
			<form name= "dogSubmit" action="updateDog.php" method="post">
			Contact Info:  <input type ="text" name = "Contact" value="<?php echo $dog['email']?>"><br>
			Name: <input type ="text" name = "Name" value="<?php echo $dog['name']?>"><br>
			Sex: <br>
				<input type="radio" name="Sex" value="Male" <?php if($dog['sex'] == "Male") echo 'checked="checked"'; ?>>Male<br>
				<input type="radio" name="Sex" value="Female" <?php if($dog['sex'] == "Female") echo 'checked="checked"'; ?>>Female<br>
			Age: <select name="Age" size=1>
				<option value="">Select an option</option>
				<option value="0-1 years"<?php if($dog['age'] == "0-1 years") echo 'selected="selected"'; ?>>0-1 years</option>
			 	<option value="1-2 years" <?php if($dog['age'] == "1-2 years") echo 'selected="selected"'; ?>>1-2 years</option>
				<option value="2-3 years" <?php if($dog['age'] == "2-3 years") echo 'selected="selected"'; ?>>2-3 years</option>
				<option value="3-4 years"<?php if($dog['age'] == "3-4 years") echo 'selected="selected"'; ?>>3-4 years</option>
				<option value="4-5 years"<?php if($dog['age'] == "4-5 years") echo 'selected="selected"'; ?>>4-5 years</option>
				</select> <br>
			Weight: <select name="Weight" size=1>
				<option value="<?php echo $dog['weight']?>">Select an option</option>
				<option value="30-39 lbs" <?php if($dog['weight'] == "30-39 lbs") echo 'selected="selected"'; ?>>30-39 lbs</option>
			 	<option value="40-49 lbs" <?php if($dog['weight'] == "40-49 lbs") echo 'selected="selected"'; ?>>40-49 lbs</option>
				<option value="50-59 lbs" <?php if($dog['weight'] == "50-59 lbs") echo 'selected="selected"'; ?>>50-59 lbs</option>
				<option value="60-69 lbs" <?php if($dog['weight'] == "60-69 lbs") echo 'selected="selected"'; ?>>60-69 lbs</option>
				<option value="70+ lbs" <?php if($dog['weight'] == "70+ lbs") echo 'selected="selected"'; ?>>70+ lbs</option>
				</select> <br>
			Location (City, State): <input type="text" name ="Location" value="<?php echo $dog['location']?>"><br>
			Coat Color: <select name="CoatColor" size=1>
				<option value="<?php echo $dog['coat_color']?>">Select an option</option>
			 	<option value="Black/White" <?php if($dog['coat_color'] == "Black/White") echo 'selected="selected"'; ?>>Black/White</option>
				<option value="Blond/White" <?php if($dog['coat_color'] == "Blond/White") echo 'selected="selected"'; ?>>Blond/White</option>
				<option value="Brindle" <?php if($dog['coat_color'] == "Brindle") echo 'selected="selected"'; ?>>Brindle</option>
				<option value="Tri-color" <?php if($dog['coat_color'] == "Tri-color") echo 'selected="selected"'; ?>>Tri-color</option>
				<option value="Other" <?php if($dog['coat_color'] == "Other") echo 'selected="selected"'; ?>>Other</option>
				</select><br>
			Coat Type: <select name="CoatType" size=1>
				<option value="<?php echo $dog['coat_type']?>">Select an option</option>
				<option value="Smooth" <?php if($dog['coat_type'] == "Smooth") echo 'selected="selected"'; ?>>Smooth</option>
				<option value="Rough" <?php if($dog['coat_type'] == "Rough") echo 'selected="selected"'; ?>>Rough</option>
				<option value="Medium" <?php if($dog['coat_type'] == "Medium") echo 'selected="selected"'; ?>>Medium</option>
				<option value="Long" <?php if($dog['coat_type'] == "Long") echo 'selected="selected"'; ?>>Long</option>
				<option value="Other" <?php if($dog['coat_type'] == "Other") echo 'selected="selected"'; ?>>Other</option>
				</select><br>
			Activity Level:<select name="Activity" size=1>
				<option value="<?php echo $dog['activity_level']?>">Select an option</option>
				<option value="Active" <?php if($dog['activity_level'] == "Active") echo 'selected="selected"'; ?>>Active</option>
				<option value="Sporting" <?php if($dog['activity_level'] == "Sporting") echo 'selected="selected"'; ?>>Sporting</option>
				<option value="Working" <?php if($dog['activity_level'] == "Working") echo 'selected="selected"'; ?>>Working</option>
				<option value="Ready for Retirement" <?php if($dog['activity_level'] == "Ready for Retirement") echo 'selected="selected"'; ?>>Ready for Retirement</option>
				</select><br>
			Description: <input type="text" name ="Description" value="<?php echo $dog['description']?>"><br>
			Tag: <input type="number" name ="Tag" value="<?php echo $dog['tag']?>"><br>
			Status:<select name="Status" size=1>
				<option value="<?php echo $dog['status']?>">Select an option</option>
				<option value="Shelter" <?php if($dog['status'] == "Shelter") echo 'selected="selected"'; ?>>Shelter</option>
				<option value="CBCR Foster"<?php if($dog['status'] == "CBCR Foster") echo 'selected="selected"'; ?>>CBCR Foster</option>
				<option value="Independent Foster"<?php if($dog['status'] == "Independent Foster") echo 'selected="selected"'; ?>>Independent Foster</option>
				</select><br>	
			Release Date: <input type="date" name ="ReleaseDate" value="<?php echo $dog['release_date']?>"><br>
			Last Updated: <input type="date" name ="LastUpdated" value="<?php echo $dog['last_updated']?>"><br>
			Is this dog up to date on it's vaccinations?<br>
			<input type="radio" name="Vaccinations" value="Yes" <?php if($dog['current_vaccinations'] == "Yes") echo 'checked="checked"'; ?>>Yes<br>
			<input type="radio" name="Vaccinations" value="No"  <?php if($dog['current_vaccinations'] == "No") echo 'checked="checked"'; ?>>No<br>
			Has this dog been spayed/neutered?<br>
			<input type="radio" name="Spayed" value="Yes" <?php if($dog['spayed_neutered'] == "Yes") echo 'checked="checked"'; ?>>Yes<br>
			<input type="radio" name="Spayed" value="No" <?php if($dog['spayed_neutered'] == "No") echo 'checked="checked"'; ?>>No<br>
			Is this dog house trained?<br>
			<input type="radio" name="HouseTrained" value="Yes" <?php if($dog['house_trained'] == "Yes") echo 'checked="checked"'; ?>>Yes<br>
			<input type="radio" name="HouseTrained" value="No" <?php if($dog['house_trained'] == "No") echo 'checked="checked"'; ?>>No<br>
			
			Home Preference: <input type ="text" name = "HomePreference" value="<?php echo $dog['home_preference']?>"><br>
			
			Is this dog listed on PetFinder?<br>
			<input type="radio" name="PetFinder" value="Yes" <?php if($dog['petfinder'] == "Yes") echo 'checked="checked"'; ?>>Yes<br>
			<input type="radio" name="PetFinder" value="No" <?php if($dog['petfinder'] == "No") echo 'checked="checked"'; ?>>No<br>
			Is this dog listed on Facebook?<br>
			<input type="radio" name="Facebook" value="Yes" <?php if($dog['facebook'] == "Yes") echo 'checked="checked"'; ?>>Yes<br>
			<input type="radio" name="Facebook" value="No" <?php if($dog['facebook'] == "No") echo 'checked="checked"'; ?>>No<br>
			<input type=hidden" name"ID" value="<?php echo $dog['ID']?>"><br>
			
			<p>
		<input type=submit value="Submit Form" name="submit">
		<br>
	</form>
		</div>			
		<!-- FOOTER: -->
		<div id="footer">
			<p>CBCR @2014</p>
		</div>
	</div>
	
</body>
</html>