<?php
session_start();
echo $_SESSION['userPassword'];
?>

<!DOCTYPE html>
<head></head>
<body>
	<br>
	<form name = "input" action = "home.php" method = "post">
		<input type="submit" value="Back to Home" name="backtohome"/>
	 </form>
</body>
</html>