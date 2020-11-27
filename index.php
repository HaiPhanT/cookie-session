<?php  
	if(isset($_POST["username"]) && isset($_POST["password"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		setcookie("user", "This is $username", time()+(60), "/");

		session_start();

		$_SESSION["user"] = "$username,$password";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Welcome</h2>
	
	<?php 
		if(!isset($_COOKIE["user"])){
			header("Location: signup.php");
		}
		else {
			echo "You're loged in.";	
			var_dump($_SESSION["user"]);
		}
	?>
</body>
</html>