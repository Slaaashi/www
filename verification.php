<?php
	session_start();
	
	DEFINE('DB_USER','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_PASSWORD','');
	DEFINE('DB_DATABASE','webbshop');
	
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	
	if(isset($_POST['mail']) AND isset($_POST['password'])){
		
		$query = "SELECT * FROM users WHERE mail='".$_POST['mail']."' AND Password='".$_POST['password']."';";
		$result = mysqli_query($dbc,$query);
		$row = mysqli_fetch_array($result);
		
		if($row){
			$_SESSION['loggedin'] = TRUE;
			
			echo"Logged In";
			header("Location: index.php");
		}
		else{
			header("Location: login.php");
		}
		
	}
	else{
		header("Location: login.php");
	}
?>