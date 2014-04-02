<?php
	// creates the edit record form
	function renderForm($id, $email, $name, $error) {
?>

<!DOCTYPE html>

<head>
	<title>Carolina Border Collie Rescue</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<?php 
	// if there are any errors, display them
	if ($error != ''){
		echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
	}
	?> 
 
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		<div>
			<p>ID: <?php echo $id; ?></p>
			Email: <input type="text" name="email" value="<?php echo $email; ?>"/><br/>
			Name: <input type="text" name="name" value="<?php echo $name; ?>"/><br/>
			
			<input type="submit" name="submit" value="Submit">
		</div>
	</form> 
</body>
</html> 
	
	<?php }

	// Database Variables (edit with your own server information)
	$server = 'localhost';
	$user = 'root';
	$pass = 'cs4912';
	$db = 'records';
	 
	// Connect to Database
	$connection = mysql_connect($server, $user, $pass) 
	or die ("Could not connect to server ... \n" . mysql_error ());
	mysql_select_db($db) 
	or die ("Could not connect to database ... \n" . mysql_error ());
	
	// check if the form has been submitted. If it has, process the form and save it to the database
	if (isset($_POST['submit'])) { 
		// confirm that the 'id' value is a valid integer before getting the form data
		if (is_numeric($_POST['id'])){
			// get form data, making sure it is valid
			$id = $_POST['id'];
			$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
			$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
	 
			// check that email/name fields are both filled in
			if ($email == '' || $name == ''){
			// generate error message
			$error = 'ERROR: Please fill in all required fields!';
	 
			//error, display form
			renderForm($id, $email, $name, $error);
			}
			// save the data to the database
			else{
				mysql_query("UPDATE dogs SET email='$email', name='$name' WHERE id='$id'")
				or die(mysql_error()); 
	 
				// once saved, redirect back to the view page
				header("Location: view.php"); 
			}
		}
		// if the 'id' isn't valid, display an error
		else{
			echo 'Error!';
		}
	}
	// if the form hasn't been submitted, get the data from the db and display the form
	else{
		// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
		if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0){
			// query db
			$id = $_GET['id'];
			$result = mysql_query("SELECT * FROM dogs WHERE id=$id")
			or die(mysql_error()); 
			$row = mysql_fetch_array($result);	 
		
			// check that the 'id' matches up with a row in the databse
			if($row){	
	 
				// get data from db
				$firstname = $row['email'];
				$lastname = $row['name'];
	 
				// show form
				renderForm($id, $email, $name, '');
			}
			// if no match, display result
			else{
				echo "No results!";
			}
		}
		// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
		else{
			echo 'Error!';
		}
	}
	?>