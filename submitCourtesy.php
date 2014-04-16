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
		<a href="index.php"><img alt="Carolina Border Collie Rescue" src="images/header.png"/></a>
	</div>

	<!-- NAVIGATION BAR: -->
	<!-- NAVIGATION BAR: -->
	<nav>
		<ul>
			<li><a href="adoption.php">Adopt Me</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="courtesy.php">Courtesy</a></li>
			<li><a href="support.html">How to Help</a></li>
			<li><a href="contacts.html">Contacts</a></li>
			<li><a href="resources.html">Resources</a></li>
		</ul>
	</nav>


	<!-- CONTAINER: Holds the sidebar and main area -->
	<div id="container">
		<!-- MAIN: -->
		<div>
			<form name= "dogSubmit" action="submitApplication.php" method="post"  onsubmit="return checkCaptcha()";>
			<!--Form Type: <select id="formID" name ="form" onchange ="jsfunc1()" size=1>
				<option selected>Fostered Dog</option>
				<option value="courtesy" id="2">Courtesy Dog</option>
				<option value="shelter" id="3">Shelter Dog</option>
				</select><br>-->
			Contact Info:  <input type ="text" name = "Contact"><br>
			Name: <input type ="text" name = "Name"><br>
			Sex: <br>
				<input type="radio" name="Sex" value="Male">Male<br>
				<input type="radio" name="Sex" value="Female">Female<br>
			Age: <select name="Age" size=1>
				<option value="">Select an option</option>
				<option value="0-1 years">0-1 years</option>
			 	<option value="1-2 years">1-2 years</option>
				<option value="2-3 years">2-3 years</option>
				<option value="3-4 years">3-4 years</option>
				<option value="4-5 years">4-5 years</option>
				</select> <br>
			Weight: <select name="Weight" size=1>
				<option value="">Select an option</option>
				<option value="30-39 lbs">30-39 lbs</option>
			 	<option value="40-49 lbs">40-49 lbs</option>
				<option value="50-59 lbs">50-59 lbs</option>
				<option value="60-69 lbs">60-69 lbs</option>
				<option value="70+ lbs">70+ lbs</option>
				</select> <br>
			Location (City, State): <input type="text" name ="Location"><br>
			Upload a Picture: <input type="file" name="URL"> <br>
			Description: <input type="text" name ="Description"><br>
			Status:<select name="Status" size=1>
				<option value="">Select an option</option>
				<option value="Shelter">Shelter</option>
				<option value="CBCR Foster">CBCR Foster</option>
				<option value="Independent Foster">Independent Foster</option>
				</select><br>	
			Is this dog up to date on it's vaccinations?<br>
			<input type="radio" name="Vaccinations" value="Yes">Yes<br>
			<input type="radio" name="Vaccinations" value="No">No<br>
			Has this dog been spayed/neutered?<br>
			<input type="radio" name="Spayed" value="Yes">Yes<br>
			<input type="radio" name="Spayed" value="No">No<br>
			Is this dog house trained?<br>
			<input type="radio" name="HouseTrained" value="Yes">Yes<br>
			<input type="radio" name="HouseTrained" value="No">No<br>	
			Home Preference: <input type ="text" name = "HomePreference"><br>
			Is this dog listed on PetFinder?<br>
			<input type="radio" name="PetFinder" value="Yes">Yes<br>
			<input type="radio" name="PetFinder" value="No">No<br>
			If yes, then please provide the link: <input type ="text" name ="petFinderLink"><br>
			Is this dog listed on CBCR's Facebook?<br>
			<input type="radio" name="Facebook" value="Yes">Yes<br>
			<input type="radio" name="Facebook" value="No">No<br>
			<p>
				Are you a human? <br>
				<input type="checkbox" id="captcha"> Yes!
			</p>
		<input type=submit value="Submit Form" name="submit">
		<br>
	</form>
		</div>			
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





