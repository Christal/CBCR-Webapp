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
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="adoption.php">Adopt Me</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="courtesy.php">Courtesy</a></li>
			<li><a href="adopted.php">Adopted</a></li>
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

			Contact Info:  <input type ="text" name = "Contact"><br>
			Name: <input type ="text" name = "Name"><br>
			
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





