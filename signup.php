<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="index.php" method="POST">
		username: <input type="text" name="username" /><br/>
		password: <input type="password" name="password" /><br/>
		<button type="submit" name="submit" onclick="">Sign Up</button>
	</form>

	<?php 
		if ($_SERVER['REQUEST_METHOD'] == "POST" and  isset($_POST["submit"])){
			header("Location: index.php");
		}
	?>
</body>
</html>