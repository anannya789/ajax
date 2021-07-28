<?php 
	require 'dbconnect.php';

	$userNameErr = $passwordErr = "";
	$successfulMessage = $errorMessage = "";


	if(isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	}

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$userName = $_POST['username'];
		$password = $_POST['password'];
		if(empty($userName)) {
			$userNameErr = "User name can not be empty!";
			$isValid = false;
		}
		if(empty($password)) {
			$passwordErr = "Password can not be empty!";
			$isValid = false;
		}
		if($isValid) {
			$successfulMessage = "Successfull";
		}
			else {
				$errorMessage = "Please fill up the fields properly";
			}
	}
		

	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<script src="validation.js"></script>
</head>
<body>

	<h1 id="demo">Login Form</h1>
	<button onclick="test()"> Click here </button>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="loginform" onsubmit="return isValid()">
		<fieldset>
			<legend>Login Form:</legend>

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value="<?php echo $uid; ?>">
			<span style="color:red"><?php echo $userNameErr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span style="color:red"><?php echo $passwordErr; ?></span>

			<br><br>

			<input type="checkbox" name="rememberme" id="rememberme">
			<label for="rememberme">Remember Me:</label>

			<br><br>

			<input type="submit" name="submit" value="Login">
		</fieldset>
	</form>

	<br>
	<span style="color: green;"><?php echo $successfulMessage; ?></span>
	<span style="color: red;"><?php echo $errorMessage; ?></span>

	<p>back to <a href="submission.php">Click here</a> for 
    registration.</p>

    <p>go to<a href="usersearch.php">User search</a></p>

<script>
	function isValid()
	{
		var userNameErr = document.getElementById("userNameErr");
		var passwordErr = document.getElementById("passwordErr");
		var userName = document.forms["loginform"]["userName"].value;
		var password = document.forms["loginform"]["password"].value;
		userNameErr.innerHTML = " ";
		passwordErr.innerHTML = " ";

		if(userName === ""){

			flag = false;
			userNameErr.innerHTML = "please fill up the userName";
		}
		if(password === ""){

			flag = false;
			passwordErr.innerHTML = "please fill up the password";
		}
		
		return flag;

	}

</script>

</body>
</html>