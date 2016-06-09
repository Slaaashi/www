<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
	</head>
	<body>
		<form  action="logout.php">
			<input id="log_out" type="submit" value="Log out">
		</form>
		<?php
			session_start();
			if(!isset($_SESSION['loggedin'])){
				header('Location: login.php');
			}
			
			DEFINE('DB_USER','root');
			DEFINE('DB_HOST','localhost');
			DEFINE('DB_PASSWORD','');
			DEFINE('DB_DATABASE','webbshop');
	
			$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	
			$query = "SELECT * FROM products;";
			
			$result = mysqli_query($dbc,$query);
			
			while($row = mysqli_fetch_array($result)){
				
				$product_number = $row['Product_number'];
				$product_name = $row['Product_name'];
				$price = $row['Price'];
				?>
				<div class="products">
					<?php
						echo "Product-number: $product_number <br>";
						echo "Product: $product_name <br>";
						echo "Price: $price €";
						?>
						</div>
					<?php
					}
					?>
				
	</body>
</html>		