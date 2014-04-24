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
			<li><a href="adopted.html">Adopted</a></li>
			<li><a href="support.html">How to Help</a></li>
			<li><a href="contacts.html">Contacts</a></li>
			<li><a href="resources.html">Resources</a></li>
		</ul>
	</nav>

	<!-- CONTAINER: Holds the sidebar and main area -->
	<div id="container">
		<div>
			<h4>Online Application</h4>
				<p>Please answer the following questions as honestly and completely as possible. The more details you provide, the easier it will be for us to find a dog that is suitable for your home environment, and that meets all the expectations you have for your new family member!</p>
				<p><b>CAUTION!</b> If you are applying for a dog from the Courtesy Page, DO NOT FILL OUT THIS APPLICATION. For dogs on our Courtesy Page, contact the name listed with the dog's information.</p>
				<p>If you are interested in multiple dogs, please contact each of the particular rescuers/homes.</p>
				<p>Don't forget that this is only the first step in our application process. After you have submitted this form, a Carolina Border Collie rescue volunteer will contact you, discuss your application with you, and set up an in-home interview.</p>
				<p>If you have any questions, or do not receive a response within a few days, please contact us <a href="mailto:annMiller@nc.rr.com">annMiller@nc.rr.com</a> or <a href="mailto:cbcrapplications@gmail.com">cbcrapplications@gmail.com</a></p>
			<form action="/cgi-sys/cgiemail/apptemp.txt" method="POST">
				<input type="HIDDEN" name="TO" value="climbergirl@triad.rr.com">
				<input name="SUBJECT" value="FORM RESULTS" type="HIDDEN">
					<p>
						You must be 18 years of age to apply! Please provide the following <b>contact information</b>:<br>
						*Denotes required field
					</p>
					*Name: <input type="text" name="Name 01" size="35" value=""><br>
					*Address: <input type="text" name="Address1 02" size="35"><br>
						<input type="text" name="Address2 02" size="35"><br>			
					*City: <input type="text" name="City 02" size="35"><br>
					*State: <input type="text" name="State 02" size="35"><br>
					*Zip: <input type="text" name="Zip 02" size="35"><br>
					*Home Phone (Include Area Code):	<input type="text" name="Phone 03" size="35" value=""><br>
					Cell Phone:	<input type="text" name="Phone 31" size="35" value=""><br>
					*E-mail: <input type="text" name="Email 04" size="70" value=""><br>
					
					<p>Please complete the following <b>questions</b>:</p>
						
					Is there a current <b>CBCR dog</b> that you are interested in?(Please keep in mind that this dog may no longer be available) <br>
					<textarea name="dog wanted 29" rows=2 cols=35></textarea><br>
					Time Frame that you would like to adopt:
						<select name="Time With Dog 32" size=1>
							<option selected>1-3 months</option>
							<option>4-6 months</option>
							<option>6-8 months</option>
							<option>8-10 months</option>
							<option>No Hurry</option>
						</select><br>
					<b>Number of children</b> at home:
						<input type=text size=4 maxlength=2 name="Number Children 10"><br>
					Please provide the <b>ages</b> for children included above:<br>
						<textarea name="Child Ages 11" rows=5 cols=35></textarea><br>
					How would you describe your <b>neighborhood</b>?
						<select name="Neighborhood 13" size=1>
							<option selected>Urban</option>
							<option>Suburban</option>
							<option>Rural</option>
						</select><br>
					What <b>type of home</b> do you have?
						<select name="House Type 14" size=1>
							<option selected>Mutiple-family - no yard</option>
							<option>Multiple family - yard space</option>
							<option>House with no yard</option>
							<option>House with yard</option>
							<option>House with acreage</option>
						</select><br>
					Do you <b>rent or own</b>?
						<select name="Ownership 15" size=1>
							<option selected>Rent</option>
							<option>Own</option>
						</select><br>
					Which of the following best describes the dog you feel would <b>fit best in your lifestyle</b>? You may select more than one.<br>
						<select name="Dog Type 16" size=1>
							<option selected>Active Pet</option>
							<option>Sport Competitor</option>
							<option>Working Dog</option>
						</select><br>
					Use this space to provide any <b>explanation for the above</b> selection(s):<br>
						<textarea name="Home Type Explanation 17" rows=5 cols=70></textarea><br>
					What <b>activities do you plan</b> to pursue with your new dog?<br>
						<textarea name="Activities 18" rows=5 cols=70></textarea><br>
					Average expected daily <b>time spent with dog</b> (hours per day):
						<select name="Time With Dog 18" size=1>
							<option selected>1-3</option>
							<option>4-6</option>
							<option>6-8</option>
							<option>8-10</option>
							<option>All day</option>
						</select><br>
					<b>Work schedule</b> for primary caregiver (if applicable)<br>
						<textarea name="Work Hours 19" rows=5 cols=70></textarea><br>
					Describe any <b>other pets:<br></b>
						<textarea name="Other Pets 20" rows=5 cols=70></textarea><br>
					If you have a yard, describe <b>fencing</b> or restraint system:<br> 
						<textarea name="Fence 21" rows=5 cols=70></textarea><br>
					*Please give your <b>veterinarian</b>'s name and phone number, if you currently have pets:<br>
						<textarea name="Vet Reference 22" rows=5 cols=70></textarea><br>
					Where will you primarily keep your dog when you are <b>at home</b>?<br>
						<textarea name="When At Home 23" rows=5 cols=70></textarea><br>
					Where will you primarily keep your dog when you are <b>away at work</b>?<br>
						<textarea name="While Away 24" rows=5 cols=70></textarea><br>
					Where will you primarily keep your dog when you are <b>away for extended periods of time</b>?<br>
						<textarea name="While Away Extended 24" rows=5 cols=70></textarea><br>
					<b>Why</b> do you want a Border Collie, as opposed to any other breed?<br>
						<textarea name="Why BC 25" rows=5 cols=70></textarea><br>
					Describe your <b>ideal dog:</b><br>
						<textarea name="Expectations 26" rows=5 cols=70></textarea><br>
					What <b>previous experience</b> have you had with Border Collies (if any)?<br>
						<textarea name="Prior BC Experience 27" rows=5 cols=70></textarea><br>
					Use the space provided	below to give us any <b>other information</b> you think may help us match you with the right dog for your home.<br>
						<textarea name="More Info 28" rows=5 cols=70></textarea><br>
					Would you like to <b>receive email updates</b> when we become aware of new available dogs? You must type in &quot;yes&quot; to receive emails from us.<br>				
						<textarea name="email updates from CBCR 30" rows=5 cols=70></textarea><br>
				
			<p>
				Are you a human? <br>
				<input type="checkbox" id="captcha"> Yes!
			</p>
		<input type=submit value="Submit Form" name="submit">
	</form>
	<form name="input" action="index.php" method="post">
		<input type="submit" value="Cancel" name="cancel"/>
	</form>
			
		
		<!-- FOOTER: -->
		<div id="footer">
			<p>CBCR @2014</p>
		</div>
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