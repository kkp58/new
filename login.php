<?php 
	session_start();
	$_SESSION["login_btn"] = 'true'; //not sure if this is right
/*
	// connect to database
	$db = mysqli_connect("10.0.0.7", "admin", "12345", "gitgood");
	if (isset($_POST['login_btn'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$password = md5($password); // remember we hashed password before storing last time
		$sql = "SELECT * FROM test WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: home.php"); //redirect to home page
		}else{
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}
*/
?>

<?php
	if (isset($_SESSION['message'])) {
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register & Login</title>
</head>
<body>
<div class="header"> 
	<h1>Register & Login</h1>
</div>



<form action="testRabbitMQClient.php" method="post">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>

		<tr>
			<td>Password:</td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="login_btn" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>