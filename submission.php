<?php 
require 'dbconnect.php';

$firstNameErr = $lastNameErr = $genderErr = $dobErr = $RelIgionErr = $eMailErr = $userNameErr = $passWordErr = "";
$successfulMessage = $errorMessage = "";


 if($_SERVER['REQUEST_METHOD'] === "POST") {
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$genDer = $_POST['gender'];

$DOb = $_POST['dob'];
$RelIgion = $_POST['religion'];

$EMail= $_POST['email'];
$userName = $_POST['username'];
$PassWord = $_POST['password'];
$isValid = true;

 if(empty($firstName)) {
$firstNameErr = "First name can not be empty!";
$isValid = false;
}
if(empty($lastName)) {
$lastNameErr = "Last name can not be empty!";
$isValid = false;
}
if(empty($genDer)) {
$genderErr = "Gender can not be empty!";
$isValid = false;
}
if(empty($DOb)) {
$dobErr = "Dob can not be empty!";
$isValid = false;
}
if(empty($RelIgion)) {
$RelIgionErr = "Religion can not be empty!";
$isValid = false;
}
if(empty($EMail)) {
$eMailErr = "EMail can not be empty!";
$isValid = false;
}
if(empty($userName)) {
$userNameErr = "UserName can not be empty!";
$isValid = false;
}
if(empty($PassWord)) {
$passWordErr = "Password can not be empty!";
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

	<title>Form submission</title>
	<script src="validation.js"></script>
</head>
<body>

<h1 id="demo">Form submission</h1>
<button onclick="test()"> Click here </button>

<fieldset>
	<legend> Basic Information: </legend>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="submissionform" onsubmit="return isValid()">
<label for="firstname">First Name <span style="color: red;">*</span>: </label>
<input type="text" name="firstname" id="firstname">
<span style="color: red;"><?php echo $firstNameErr; ?></span>
<br><br>


<label for="lastname">Last Name <span style="color: red;">*</span>: </label>
<input type="text" name="lastname" id="lastname">
<span style="color: red;"><?php echo $lastNameErr; ?></span>
<br><br>

		<label for ="male"> Gender <span style="color: red;">*</span>: </label>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		
		<input type="radio" id="female" name="gender" value="female">
		<label for="female">Female</label>

		<input type="radio" id="other" name="gender" value="other">
		<label for="other">Other</label>
		<span style="color: red;"><?php echo $genderErr; ?></span>
		<br><br>

        <label for="dob">DoB <span style="color: red;">*</span>: </label>
  <input type="date" id="dob" name="dob">
  <span style="color: red;"><?php echo $dobErr; ?></span>
  <br><br>


        <label for="religion">Religion <span style="color: red;">*</span>: </label>
		<select id="religion" name="religion">
			<option value="islam">Islam</option>
			<option value="hindu">Hindu</option>
			<option value="other">Other</option>
			

		</select>
		<span style="color: red;"><?php echo $RelIgionErr; ?></span>

		<br><br>

</fieldset>

<fieldset>
  <legend>Contact Information:</legend>
  <label for="pesent address">Pesent Address:</label>
<textarea id="pesent address" name="pesent address="4" cols="50">
  </textarea>
  <br><br>
  <label for="permanent address">Permanent Address:</label>
<textarea id="permanent address" name="pesent address="4" cols="50">
  </textarea>
  <br><br>
  <label for="phone"> Phone:</label>
  <input type="tel" id="phone" name="phone"><br><br>
 <label for="email">Email <span style="color: red;">*</span>: </label>
		<input type="email" id="email" name="email">
		<span style="color: red;"><?php echo $eMailErr; ?></span>
		<br><br>

  <label for="personal web link">Personal Web Link:</label>
  <p><a href="https://github.com/anannya789/">Please Go to this link </a></p>

   <br><br>
  </fieldset>

  <fieldset>
  	<legend>Account Information:</legend>
  	<label for="username"> UserName <span style="color: red;">* </span>: </label>
<input type="text" name="username" id="username">
<span style="color: red;"><?php echo $userNameErr; ?></span>
<br><br>

<label for="password"> Password <span style="color: red;">* </span>: </label>
<input type="password" name="password" id="password">
<span style="color: red;"><?php echo $passWordErr; ?></span>
<br><br>

  </fieldset>

<input type="submit" value="Submit">
</form>
<p>Back to<a href="login.php">Login</a></p>
<br><br>
 <span style="color: green;"><?php echo $successfulMessage; ?></span>
<span style="color: red;"><?php echo $errorMessage; ?></span>
 <span style="color: green;"><?php echo $RelIgion; ?></span>
  <span style="color: green;"><?php echo $genDer; ?></span>
<script>
	function isValid()
	{
		var flag = true;
		var firstNameErr = document.getElementById("firstNameErr");
		var lastNameErr = document.getElementById("lastNameErr");
		var genderErr = document.getElementById("genderErr");
		var dobErr = document.getElementById("dobErr");
		var RelIgionErr = document.getElementById("RelIgionErr");
		var eMailErr = document.getElementById("eMailErr");
		var userNameErr = document.getElementById("userNameErr");
		var passWordErr = document.getElementById("passWordErr");
		var firstname = document.forms["submissionform"]["firstname"].value;
		var lastname = document.forms["submissionform"]["lastname"].value;
		var genDer = document.forms["submissionform"]["genDer"].value;
		var DOb = document.forms["submissionform"]["DOb"].value;
		var RelIgion = document.forms["submissionform"]["RelIgion"].value;
		var EMail = document.forms["submissionform"]["EMail"].value;
		var userName = document.forms["submissionform"]["userName"].value;
		var PassWord = document.forms["submissionform"]["PassWord"].value;
		firstNameErr.innerHTML = " ";
		lastNameErr.innerHTML = " ";
		genderErr.innerHTML = " ";
		dobErr.innerHTML = " ";
		RelIgionErr.innerHTML = " ";
		eMailErr.innerHTML = " ";
		userNameErr.innerHTML = " ";
		passWordErr.innerHTML = " ";

		if(firstname === ""){

			flag = false;
			firstNameErr.innerHTML = "please fill up the fisrt name";
		}

		if(lastname === ""){

			flag = false;
			lastNameErr.innerHTML = "please fill up the last name";
		}
		if(genDer === ""){

			flag = false;
			genderErr.innerHTML = "please fill up the genDer";
		}
		if(DOb === ""){

			flag = false;
			dobErr.innerHTML = "please fill up the DOb";
		}
		if(RelIgion === ""){

			flag = false;
			RelIgionErr.innerHTML = "please fill up the RelIgion";
		}
		if(EMail === ""){

			flag = false;
			eMailErr.innerHTML = "please fill up the EMail";
		}
		if(userName === ""){

			flag = false;
			userNameErr.innerHTML = "please fill up the userName";
		}
		if(PassWord === ""){

			flag = false;
			passWordErr.innerHTML = "please fill up the PassWord";
		}
		
		return flag;

	}
</script>
 
 
</body>
</html>