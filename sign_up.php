<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<form id="signform" action="sign_up.php" method="POST">
	<input id="nick" type="text" name="Nick_name" placeholder="Nickname" required><br>
	<input id="First" type="text" name="First_name" placeholder="First Name" required><br>
	<input id="Last" type="text" name="Last_name" placeholder="Last Name"  required><br>
	<input id="Email" type="text" name="Email" placeholder="Email"  required><br>
	<input id="Birth" type="text" name="Birth_date" placeholder="Birth Date (YYYYMMDD)"required><br>
	<input id="Country" type="text" name="Country" placeholder="Country" required><br>
	<input id="pass" type="password" name="Password" placeholder="Password" required><br>
	<input id="sign_ip" type="submit" value="Sign Up">
</form>
<form  action="login.php">
			<input id="back" type="submit" value="Back">
		</form>



<?php
	session_start();
	
	DEFINE('DB_USER','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_PASSWORD','');
	DEFINE('DB_DATABASE','webbshop');
	
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	
	
	if(isset($_POST['Email'])){
		$nick = $_POST['Nick_name'];
		$first = $_POST['First_name'];
		$last = $_POST['Last_name'];
		$mail = $_POST['Email'];
		$birth = $_POST['Birth_date'];
		$country = $_POST['Country'];
		$pass = $_POST['Password'];
		
	$query = "INSERT INTO users (Nick_name, First_name, Last_name, Mail, Birth_date, Country, Password) VALUES ('$nick', '$first', '$last', '$mail', '$birth', '$country', PASSWORD('$pass'));";
	echo $query . "<br>";
	mysqli_query($dbc,$query);
	echo mysqli_error($dbc);
	//header("Location: index.php");
}


?>