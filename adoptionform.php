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


	<!-- CONTAINER: Holds the sidebar and main area -->
	<div id="container">
		<!-- MAIN: -->
		<div>
			<form name= "dogSubmit" action="" method="get">
			<!--Form Type: <select id="formID" name ="form" onchange ="jsfunc1()" size=1>
				<option selected>Fostered Dog</option>
				<option value="courtesy" id="2">Courtesy Dog</option>
				<option value="shelter" id="3">Shelter Dog</option>
				</select><br>-->
			Name: <input type ="text" name = "name"><br>
			Sex: <br>
				<input type="radio" name="sex" value="male">Male<br>
				<input type="radio" name="sex" value="female">Female<br>
			Age: <select name="Age" size=1>
				<option selected>0-1 years</option>
			 	<option value>1-2</option>
				<option value>2-3</option>
				<option value>3-4</option>
				<option value>4-5</option>
				</select> <br>
			Coat Color: <select name="Coat" size=1>
				<option selected>Unselected</option>
			 	<option value>Black/White</option>
				<option value>Blond/White</option>
				<option value>Brindle</option>
				<option value>Tri-color</option>
				</select><br>
			Coat Type: <select name="Coat2" size=1>
				<option selected>Unselected</option>
			 	<option value>Smooth</option>
				<option value>Rough</option>
				<option value>Medium</option>
				<option value>Long</option>
				</select><br>
			Weight: <input type ="text" name = "weight"><br>
			Location (City, State): <input type="text" name ="location"><br>
			Is this dog up to date on it's shots?<br>
			<input type="radio" name="spayed" value="male">Yes<br>
			<input type="radio" name="spayed" value="female">No<br>
			Has this dog been spayed/neutered? <br>
			<input type="radio" name="spayed" value="male">Yes<br>
			<input type="radio" name="spayed" value="female">No<br>
			Activity Level:<select name="Activity" size=1>
				<option selected>Unselected</option>
			 	<option>Active Companion</option>
				<option>Sporting</option>
				<option>Working</option>
				<option>Ready for Retirement</option>
				</select><br>
			Status:<select name="status" size=1>
				<option selected>Unselected</option>
			 	<option>Shelter</option>
				<option>CBCR Foster</option>
				<option>Independent Foster</option>
				</select><br>
			Contact Info:  <input type ="text" name = "contact"><br>
			Member Name:  <input type ="text" name = "member"><br>
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





