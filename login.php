<?php
	session_start();
	if(isset($_SESSION['loggedin'])){
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>

	<head>	
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<div class="sign_in">
			<form action="verification.php" method="POST">
				<input id="login_mail" type="text" name="mail" placeholder="Email" required><br>
				<input id="login_pass" type="password" name="password" placeholder="Password" required><br>
				<input id="login_button" type="submit" value="Sign In">
			</form>
		</div>
		<form  action="sign_up.php">
			<input id="sign_up" type="submit" value="Sign Up">
		</form>
	</body>
</html>		